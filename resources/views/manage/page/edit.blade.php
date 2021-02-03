@extends('layouts.admin.app')

@section('content')
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <form method="POST"  action="/manage/page/{{ $page->id }}" class="form-horizontal">
        @csrf
        @method('PUT')
        <fieldset class="uk-fieldset">
          <div class="laraberg-sidebar">
            <div class="form-group">
              <div class=" control-label">
                <label for="title" class="col-lg-2 control-label">
                  Title
                </label>
              </div>
              <div >
                <input type="text" id="title" name="title" value="{{ $page->title }}" class="form-control {{ $errors->has('title') ? 'error' : '' }}" />
                <p class="description">The name is how it appears on your site.</p>
              </div>
              <!-- Error -->
               @if ($errors->has('title'))
               <div class="error">
                   {{ $errors->first('title') }}
               </div>
               @endif
            </div>
            <div class="form-group">
              <div class="col-lg-2 control-label">
                <label for="parent_category" class="col-lg-2 control-label">Category</label>
              </div>
              <div class="col-lg-10">
                <select style="width:200px; height: 30px; " name="parent_category" id="parent_category">
                  @<?php foreach ($data as $item): ?>
                    <option value="{{ $item->id }}"
                      @if ($item->id == $page->category)
                        selected
                      @endif
                      >
                      {{ $item->title }}
                    </option>
                  <?php endforeach; ?>
                </select>
                <p class="description">pages belong to categories. If the page belongs to no category then it's in the default category.</p>
              </div>
            </div>
            <div class="form-group">
              <div class="control-label">
                <label for="lang" class="col-lg-2 control-label">Langauge</label>
              </div>
              <div >
                <select style="width:200px; height: 30px; " class="custom-select" name="lang" id="lang">
                  @<?php foreach ($langArray as $lang): ?>
                    <option value="{{ $lang->id }}"
                      @if ($lang->id == $page->language )
                        Selected
                      @endif
                      >
                      {{ $lang->name }}
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="uk-margin">
                <!-- <input type="text" class="uk-input uk-form-large laraberg-sidebar {{ $errors->get('title') ? 'uk-form-danger' : '' }}" name="title_sub" placeholder="Title" value="{{ $page->title }}"> -->
                <textarea id="post-title-0" class="editor-post-title__input" placeholder="Add title" rows="1" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 95px;">{{ $page->title }}</textarea>
            </div>
            <div class="uk-margin">
              <textarea style="width: 100%" name="desc" id="desc" placeholder="Add desctiption" hidden="">{{ $page->lb_raw_content }}</textarea>
            </div>
          </div>
        </fieldset>

        <div class="form-group">
            <div class="col-lg-12">
              <input class="btn btn-primary" type="submit" name="save" id="save" value="Save">

              @if ($page->shw == 'Y')
                <input class="btn btn-primary" type="submit" name="draft" id="draft" value="Draft">
              @else
                <input class="btn btn-primary" type="submit" name="publish" id="publish" value="Publish">
              @endif

              <input class="btn btn-primary" type="reset" value="Reset">
              <a class="btn btn-primary" href="{{ route('page.index') }}">Cancel</a>
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
