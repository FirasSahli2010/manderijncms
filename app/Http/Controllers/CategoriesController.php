<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;

use App\Http\Controllers\LanguagesController;

class CategoriesController extends Controller
{
    private LanguagesController $langController;

    public function __construct()
    {
        $this->middleware('auth');
        $this->langController = new LanguagesController();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index() {
      // $sort = $request->input('sort', 'asc');
      //$categories = Categories::orderBy('updated_at')->paginate(10);
      $categories = Categories::sortable()->withTrashed()->where('id', '!=', 1)->paginate(10);

      $langListAsJSON = $this->langController->get_language_list();

      // $categories = Categories::orderBy('updated_at', request()->sort())->paginate(10);
      //return view('manage.category.index')->with('categories', compact('categories'));
      return view('manage.category.index',compact('categories'));
    }

    public function show($id) {
      //$category = Categories::findOrFail($id).get();
      return view('manage.category.detail', ['category' => Categories::findOrFail($id)]);
    }

    public function enable($id)
    {

      $category = Categories::findorfail($id);

      $category->shw ='Y';

      $category->save();
      return redirect('manage/category')->with('message', 'Category published!');
    }

    public function disable($id)
    {

      $category = Categories::findorfail($id);

      $category->shw ='N';

      $category->save();
      return redirect('manage/category')->with('message', 'Category un-published!');
    }

    public function permdelete($id) {
      $category = Categories::withTrashed()
                                ->where('id', $id)
                                ->first(); // fetch the category

      $result = $category->forceDelete();; //force delete the fetched category

      if ($result) {
            // return view('manage.category.index',compact('categories'));
            return redirect('/manage/category/')->with('message', 'Record deleted!');
        } else {

            return redirect('/manage/category/')->with('message', 'Delete failed!');
        }

        return response($response);
    }

    public function destroy($id) {
      $category = Categories::findorfail($id); // fetch the category
      $category->deleted = 'Y';
      $category->save();
      $result = $category->delete(); //delete the fetched category

      if ($result) {

            // return view('manage.category.index',compact('categories'));
            return redirect('/manage/category/')->with('message', 'Record deleted!');
        } else {

            return redirect('/manage/category/')->with('message', 'Delete failed!');
        }

        return response($response);
    }

    public function restore($id) {
      $category = Categories::onlyTrashed()->find($id);

        if (!is_null($category)) {
          $category->deleted = 'N';
          $category->save();
            $category->restore();
            // return view('manage.category.detail', ['category' => Categories::findOrFail($id)]);
              return redirect('/manage/category/')->with('message', 'Record restored!');
        } else {

            return redirect('/manage/category/')->with('message', 'Restore failed!');
        }
        return response($response);
    }

    public function add() {
      $data = Categories::all();
      $langListAsJSON = $this->langController->get_language_list();

      // $langArrayContent = $langListAsJSON->getContent();
      // $langArray = json_decode($langArrayContent, true);
      //$id = $array['id']
      $langArray = $langListAsJSON;

      return view('manage.category.add',compact('data', 'langArray'));

    }

    public function create(Request $request){
      $validatedData = $request->validate([
            'title' => ['required', 'unique:categories', 'max:255']
        ]);

      $category = new Categories();
      $category->title = $request['title'];
      $category->language = $request['lang'];
      $category->parent_category = $request['parent_category'];
      $category->slug = Str::slug($category->title);
      $category->desc = (!$request['desc'])?'':$request['desc'];

      if ($request['publish']) {
        $category->shw = 'Y';
      }

      $category->save();
      return redirect('/manage/category/')->with('message', 'Record created!');

    }

    public function edit($id) {
      $category = Categories::findorfail($id); // fetch the category

      $data = Categories::all();
      $langListAsJSON = $this->langController->get_language_list();

      // $langArrayContent = $langListAsJSON->getContent();
      // $langArray = json_decode($langArrayContent, true);
      //$id = $array['id']
      $langArray = $langListAsJSON;

      return view('manage.category.edit',compact('category', 'data', 'langArray'));

    }

    public function update(Request $request, $id) {
      // $validatedData = $request->validate([
      //       'title' => ['required', 'unique:categories', 'max:255']
      //   ]);

      // $id = 8; //$request['id'];

      $category = Categories::findorfail($id);
      $category->title = $request['title'];
      $category->parent_category = $request['parent_category'];
      $category->slug = Str::slug($category->title);
      $category->desc = (!$request['desc'])?'':$request['desc'];
      $category->language = $request['lang'];

      if ($request['publish']) {
        $category->shw = 'Y';
      }

      if ($request['draft']) {
        $category->shw = 'N';
      }

      $category->save();
      return redirect('/manage/category/')->with('message', 'Record updated!');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        $id_array = explode(",",$ids);
        foreach ($id_array as $id) {
          // code...
          $category = Categories::findorfail($id); // fetch the category
          $category->deleted = 'Y';
          $category->save();
          $result = $category->delete(); //delete the fetched category

          if (!$result) {
            return redirect('/manage/category/')->with('message','Not all records deleted!');
          }
        }
        // $result = Categories::whereIn('id',explode(",",$ids))->delete();
        return redirect('/manage/category/')->with('message','Records deleted!');
    }
}
