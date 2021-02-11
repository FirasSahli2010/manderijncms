@extends('layouts.admin.app')

@section('content')
	<div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">{{ __('Menu Items') }}</h3>
          </div>
        </div>
     </div>

        @if( session()->has( 'message' ))
          <div class="col-md-12">
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
          </div>
        @endif
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <div class="col-md-12">
      <form method="POST" action="/manage/menu/{{ $menu->id }}" class="form-horizontal">
        @csrf
        @method('PUT')
         <fieldset class="uk-fieldset">
         	<div class="col-lg-12">
            
            <div>
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingPages">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePages" aria-expanded="false" aria-controls="flush-collapsePages">
                      Pages
                    </button>
                  </h2>
                  <div id="flush-collapsePages" class="accordion-collapse collapse" aria-labelledby="flush-headingPages" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingPosts">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePosts" aria-expanded="false" aria-controls="flush-collapsePosts">
                      Posts
                    </button>
                  </h2>
                  <div id="flush-collapsePosts" class="accordion-collapse collapse" aria-labelledby="flush-headingPosts" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingCategories">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCategories" aria-expanded="false" aria-controls="flush-collapseCategories">
                      Categories
                    </button>
                  </h2>
                  <div id="flush-collapseCategories" class="accordion-collapse collapse" aria-labelledby="flush-headingCategories" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingCustomLink">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCustomLink" aria-expanded="false" aria-controls="flush-collapseCustomLink">
                      Custom link
                    </button>
                  </h2>
                  <div id="flush-collapseCustomLink" class="accordion-collapse collapse" aria-labelledby="flush-headingCustomLink" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </fieldset>
         <div style="text-align: center;" class="form-group">
              <div style="text-align: center;">
                <input class="btn btn-primary" type="submit" name="save" id="saqve" value="Save">
                <input class="btn btn-primary" type="reset" value="Reset">
                <a class="btn btn-primary" href="{{ route('menu.index') }}">Cancel</a>
              </div>
            </div>
    </form>
   </div>
   @endsection