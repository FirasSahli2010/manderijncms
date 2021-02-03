<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
       <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

       <link href="<?php echo e(asset('assets')); ?>/css/font-awesome.css" rel="stylesheet" crossorigin="anonymous">


      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

      <title><?php echo e(config('app.name_amdin', 'Q-CMS Dashboard')); ?></title>
      <!-- Favicon -->
      <link href="<?php echo e(asset('assets')); ?>/img/brand/favicon.png" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Extra details for Live View on GitHub Pages -->

      <!-- Icons -->
      <!-- <link href="<?php echo e(asset('argon')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet"> -->
      <!-- <link href="<?php echo e(asset('argon')); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"> -->
      <!-- Included code -->
      <!-- mobile settings -->
       <!-- WEB FONTS -->
       <!-- up to 10% speed up for external res -->
       <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
       <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
       <link rel="preconnect" href="https://fonts.googleapis.com/">
       <link rel="preconnect" href="https://fonts.gstatic.com/">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

       <link rel="preload" href=" <?php echo e(asset('assets')); ?>/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

      <!-- CORE CSS -->

      <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->
      <!-- <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/core.min.css" > -->
      <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/vendor_bundle.min.css" >
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

      <!-- <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet"> -->


      <link rel="shortcut icon" href="<?php echo e(asset('assets')); ?>/img/favicon.ico">
      <link rel="apple-touch-icon" href="<?php echo e(asset('assets')); ?>/images/logo/icon_512x512.png">

      <link rel="manifest" href="<?php echo e(asset('assets')); ?>/img/manifest/manifest.json">
      <meta name="theme-color" content="#7952b3">

      <!-- End included code -->
      <!-- Argon CSS -->
      <link type="text/css" href="<?php echo e(asset('argon')); ?>/css/argon.css?v=1.0.0" rel="stylesheet">

      <!-- <link href="<?php echo e(asset('assets')); ?>/css/sb-admin-2.min.css" rel="stylesheet"> -->
      <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet">


      <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>

      <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

      <link rel="stylesheet" href="<?php echo e(asset('vendor')); ?>/laraberg/css/laraberg.css">

      <script src="<?php echo e(asset('vendor')); ?>/laraberg/js/laraberg.js"></script>


    </head>
    <body cz-shortcut-listen="true">
      <!-- <div id="wrapper" class="d-flex align-items-stretch flex-column"> -->
        <?php if(auth()->guard()->check()): ?>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
          <?php echo $__env->make('layouts.admin.headers.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

          <div class="container-fluid">

              <!-- <div class="col-md-2 ms-sm-auto col-lg-2 px-md-2"> -->
                <?php echo $__env->make('layouts.admin.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <!-- </div> -->
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row g3">
                <div id="wrapper_content" class="d-flex flex-fill">
                  <div id="middle" class="flex-fill">
                    <div class="main-content">
                      <?php echo $__env->make('layouts.admin.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <div class="table-responsive">
                        <?php echo $__env->yieldContent('content'); ?>
                      </div>
                    </div>
                  </div>

                </div>

                </div>


              </main>


          </div>


          <?php if(auth()->guard()->guest()): ?>
              <?php echo $__env->make('layouts.admin.footers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
          <?php if(auth()->guard()->check()): ?>
            <?php echo $__env->make('layouts.admin.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>


      <!-- </div> -->




      <script src="<?php echo e(asset('assets')); ?>/vendor/jquery/dist/jquery.min.js"></script>
      <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <?php echo $__env->yieldPushContent('js'); ?>

      <!-- Argon JS -->
      <script src="<?php echo e(asset('argon')); ?>/js/argon.js?v=1.0.0"></script>

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
      <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/core.min.js"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/app.js"></script>



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
<?php /**PATH C:\laragon\www\acdivet\resources\views/layouts/admin/app.blade.php ENDPATH**/ ?>