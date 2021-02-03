<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'شركة أكديما لصناعة الأدوية البيطرية :: أكبيطرة') }}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <link href="{{ asset('assets') }}/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

         <link href="{{ asset('assets') }}/css/font-awesome.css" rel="stylesheet" crossorigin="anonymous">


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />


        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor_bundle.min.css" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <link rel="manifest" href="{{ asset('assets') }}/img/manifest/manifest.json">

        <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>

        <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

        <link rel="stylesheet" href="{{ asset('vendor') }}/laraberg/css/laraberg.css">

        <script src="{{ asset('vendor') }}/laraberg/js/laraberg.js"></script>
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
    </head>
    <body class="{{ $class ?? '' }}" style="background-color: #000;">
      @guest()
        @include('layouts.headers.guest')
      @endguest
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script type="text/javascript">
        window._config = {
  isDebug: ['localhost', 'dev.bootstrap-table.com'].indexOf(location.hostname) > -1,
  isViewSource: false,
  theme: location.search.slice(1),
  themes: []
}

function initUrl() {
  var href = location.hash.substring(1)
  window._config.isViewSource = false
  if (href.indexOf('view-source') > -1) {
    href = href.replace('#view-source', '').replace('view-source', '')
    window._config.isViewSource = true
  }
  return href || 'welcome.html'
}

function initThemes() {
  $('[data-theme]').each(function () {
    if ($(this).data('theme')) {
      window._config.themes.push($(this).data('theme'))
    }
  })
  if (window._config.themes.indexOf(window._config.theme) === -1) {
    window._config.theme = ''
  }
  var $theme = $('[data-theme="' + window._config.theme + '"]').addClass('active')
  $('#theme-title').text($theme.text())

  $('[data-show]').each(function () {
    $(this).toggle($(this).data('show').split(',').indexOf(window._config.theme) > -1)
  })
}

function loadUrl(url_) {
  var template = 'template'
  if (window._config.themes.indexOf(window._config.theme) > -1) {
    template += '-' + window._config.theme
  }
  var url = template + '.html?v=134&url=' + url_
  if (window._config.isDebug) {
    url = template + '.html?t=' + (+new Date()) + '&url=' + url_
  }
  if (window._config.isViewSource) {
    url = template + '.html?v=134&view-source&url=' + url_ + '#view-source'
  }
  $('iframe').attr('src', url)
}

function initNavigation(href) {
  var $el = $('a[href="#' + href + '"]')
  var $parent = $el.parent()

  if (!$el.length) {
    return
  }

  $('#bd-docs-nav .active').removeClass('active')
  $parent.addClass('active')
  $el.parents('.bd-toc-item').addClass('active')
}

function autoScrollNavigation () {
  var $el = $('.bd-sidenav >li.active')
  $('#bd-docs-nav').scrollTop(0)
  if ($el.length && $el.offset().top > $(window).height() / 2) {
    $('#bd-docs-nav').scrollTop($el.offset().top - $(window).height() / 2)
  }
}

function doSearch() {
  var searchClient = window.algoliasearch('FXDJ517Z8G', '9b89c4a7048370f4809b0bc77b2564ac')

  var search = window.instantsearch({
    indexName: 'bootstrap-table-example',
    searchClient: searchClient,
    searchFunction: function (helper) {
      if (helper.state.query) {
        helper.clearTags()
        helper.addTag(window._config.theme)
        helper.search()
        $('#hits').show()
      } else {
        $('#hits').hide()
      }
    }
  })

  search.addWidget(
    window.instantsearch.widgets.searchBox({
      container: '#searchbox'
    })
  )

  search.addWidget(
    window.instantsearch.widgets.hits({
      container: '.hits-body',
      templates: {
        item: function (hit) {
          var search = ''
          if (window._config.theme) {
            search = '?' + window._config.theme
          }
          return [
            '<div class="link" data-href="' + hit.url + search + hit.anchor + '">',
            '<div class="category">',
            hit.anchor.split('/')[0].slice(1),
            '</div>',
            '<div class="title">',
            hit.title,
            '</div>',
            '<div class="description">',
            hit.description,
            '</div>',
            '</div>'
          ].join('')
        }
      }
    })
  )

  $(document).on('click', '.ais-Hits-item .link', function (e) {
    var href = $(e.currentTarget).data('href')
    if ($(e.target).is('a')) {
      return
    }
    location.href = href
    $('.ais-SearchBox-reset').click()
    $('.ais-SearchBox-input').blur()
    setTimeout(autoScrollNavigation, 200)
  })

  search.start()
}

function initViewSource () {
  var isSource = /view-source$/.test(location.hash)

  if (isSource) {
    $('.view-example').css('display', 'block')
    $('.view-source').css('display', 'none')
  } else {
    $('.view-example').css('display', 'none')
    $('.view-source').css('display', 'block')
  }

  $('.view-example, .view-source').off('click').click(function () {
    if (isSource) {
      location.hash = location.hash.replace('#view-source', '')
    } else {
      if (location.hash.indexOf('view-source') === -1) {
        location.hash += '#view-source'
      }
    }
  })

  $('.view-online').attr('href', 'https://live.bootstrap-table.com/example/' +
    (location.hash.slice(1).split('#')[0] || 'welcome.html'))
}

$(function () {
  $('.bd-sidenav li').each(function () {
    $(this).attr('title', $.trim($(this).text()))
  })

  $('[data-toggle="tooltip"]').tooltip()

  $(window).hashchange(function () {
    var href = initUrl()
    loadUrl(href)
    initNavigation(href)
    initViewSource()
  })

  initThemes()
  var href = initUrl()
  loadUrl(href)
  initNavigation(href)
  autoScrollNavigation()
  doSearch()
  initViewSource()
})
        </script>
        <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>

        <!-- Include Code -->

        <!-- JAVASCRIPT FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

        <!-- JAVASCRIPT FILES -->
        <!-- CORE FILES -->
        <script type="text/javascript" src="{{ asset('assets') }}/js/core.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/app.js"></script>



        <!-- End include code -->
      </body>


      <script type="text/javascript">
      $(document).ready(function () {


          $('#master').on('click', function(e) {
           if($(this).is(':checked',true))
           {
              $(".sub_chk").prop('checked', true);
           } else {
              $(".sub_chk").prop('checked',false);
           }
          });


          $('.delete_all').on('click', function(e) {


              var allVals = [];
              $(".sub_chk:checked").each(function() {
                  allVals.push($(this).attr('data-id'));
              });


              if(allVals.length <=0)
              {
                  alert("Please select row.");
              }  else {


                  var check = confirm("Are you sure you want to delete this row?");
                  if(check == true) {


                      var join_selected_values = allVals.join(",");


                      $.ajax({
                          url: $(this).data('url'),
                          /* type: 'DELETE', */
                          type: 'GET',
                          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                          data: 'ids='+join_selected_values,
                          success: function (data) {
                            window.location.replace("/manage/category/");
                              // if (data['success']) {
                              //     // $(".sub_chk:checked").each(function() {
                              //     //     $(this).parents("tr").remove();
                              //     // });
                              //     alert(data['success']);
                              // } else if (data['error']) {
                              //     alert(data['error']);
                              // } else {
                              //     alert('Whoops Something went wrong!!');
                              // }
                          },
                          error: function (data) {
                              alert(data.responseText);
                          }
                      });


                    // $.each(allVals, function( index, value ) {
                    //     $('table tr').filter("[data-row-id='" + value + "']").remove();
                    // });
                  }
              }
          });


          $('[data-toggle=confirmation]').confirmation({
              rootSelector: '[data-toggle=confirmation]',
              onConfirm: function (event, element) {
                  element.trigger('confirm');
              }
          });


          $(document).on('confirm', function (e) {
              var ele = e.target;
              // e.preventDefault();


              $.ajax({
                  url: ele.href,
                  type: 'DELETE',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  success: function (data) {
                    window.location.replace("/manage/category/");
                      // if (data['success']) {
                      //     $("#" + data['tr']).slideUp("slow");
                      //     alert(data['success']);
                      // } else if (data['error']) {
                      //     alert(data['error']);
                      // } else {
                      //     alert('Whoops Something went wrong!!');
                      // }
                  },
                  error: function (data) {
                      alert(data.responseText);
                  }
              });


              return false;
          });
      });
    </script>
</html>
