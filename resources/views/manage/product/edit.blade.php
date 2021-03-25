@extends('layouts.admin.app')

@section('content')
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <form method="POST" action="/manage/products/{{ $product->id }}" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <fieldset class="uk-fieldset">
          <div class="laraberg-sidebar">
     <!--  <div class="col-lg-4"> -->
            <div class="form-group">
              <div >
                <div class="control-label">
                  <label for="title" class="control-label">Name</label>
                </div>
                <input type="text" value="{{ $product->name }}" placeholder="Product name" id="name" name="name" class=" form-control {{ $errors->has('title') ? 'error' : '' }}" />
              </div>

            </div>

            <div class="form-group">
              <div >
                <div class="control-label">
                  <label for="title" class="control-label">Price</label>
                </div>
                <input type="text" value="{{ $product->price }}" placeholder="Price" id="price" name="price" class=" form-control " />
              </div>

            </div>

            <div class="form-group">
              <div class="control-label">
                <label for="parent_category" class="col-lg-2 control-label">Category</label>
              </div>
              <select style="width:200px; height: 30px; " class="custom-select" name="parent_category" id="parent_category">
                @foreach ($data as $item): ?>
                  <option value="{{ $item->id }}" <?PHP echo in_array($item->id, $cat_ids)?' SELECTED ':'' ?>>
                    {{ $item->title }}
                  </option>
                @endforeach;
              </select>

            </div>
            <div class="form-group">
              <div class="control-label">
                <label for="lang" class="control-label">Langauge</label>
              </div>
              <select style="width:200px; height: 30px; " class="custom-select" name="lang" id="lang">
                @foreach ($langArray as $lang): ?>
                  <option value="{{ $lang->id }}" <?PHP echo ($product->language_id == $lang->id)?' SELECTED ':'' ?>>
                    {{ $lang->name }}
                  </option>
                @endforeach;
              </select>
            </div>

            <div class="form-group">
              <div class="control-label">
                <label for="lang" class="control-label">Summery</label>
              </div>
              <textarea id="summ" name="summ" placeholder="Add summedry" cols="20" rows="5">{{ $product->summery }}</textarea>
            </div>


          </div>
          <div class="uk-margin">
            <textarea id="desc" placeholder="Add desctiption" name="desc" hidden>{{ $product->description }}</textarea>
          </div>

          <div class="form-group">

              <div class="control-label">
                <label for="title" class="control-label">Image</label>
              </div>
              <input type="file" placeholder="Image" id="image" name="image" class=" form-control " />
              <input type="checkbox" value="1" name="deleteImage" id="deleteImage" />
              <label for="deleteImage" class="control-label"> Delete Image </label>
              <img src="{{ URL::to('/') }}/images/{{ $product->image }}" style="width: 200px; " />
            </div>
        <!-- </div> -->

        </fieldset>

        <div class="form-group">
              <div style="text-align: center;">
                <input class="btn btn-primary" type="submit" name="save" id="saqve" value="Save">
                <input class="btn btn-primary" type="submit" name="publish" id="publish" value="Publish">
                <input class="btn btn-primary" type="reset" value="Reset">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Cancel</a>
              </div>
            </div>
      </form>
    <!-- </div>
  </div> -->
</div>
<script type="text/javascript">
      window.addEventListener('DOMContentLoaded', () => {
        Laraberg.init('desc', { height: '600px', laravelFilemanager: true, sidebar: true })
    })
</script>


@endsection
<!--  -->
