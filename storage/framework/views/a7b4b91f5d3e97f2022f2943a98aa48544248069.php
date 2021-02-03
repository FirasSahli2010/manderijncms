

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title"><?php echo e(__('Site Settings & identity')); ?></h3>
          </div>
        </div>
      </div>

        <?php if( session()->has( 'message' )): ?>
          <div class="col-md-12">
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
          </div>
        <?php endif; ?>

        <div class="col-md-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">

            <?php $__currentLoopData = $site_language_settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading_<?php echo e($setting_items->id); ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?php echo e($setting_items->id); ?>" aria-expanded="false"
                   aria-controls="flush-collapse_<?php echo e($setting_items->id); ?>">
                    <?php echo e((\App\Http\Controllers\LanguagesController::get_language_name($setting_items->language))); ?>

                  </button>
                </h2>
                <div id="flush-collapse_<?php echo e($setting_items->id); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?php echo e($setting_items->id); ?>" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <form method="POST"  action="/manage/site_settings/update/<?php echo e($setting_items->id); ?>" class="form-horizontal">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>
                      <div class="form-group">
                        <div style="text-align: left;" class="col-lg-12 control-label">
                          <label for="site_title_<?php echo e($setting_items->id); ?>" class="col-lg-2 control-label">Site Title</lable>
                        </div>
                        <div style="text-align: left;" class="col-lg-12">
                          <input type="text" id="site_title_<?php echo e($setting_items->id); ?>" name="site_title_<?php echo e($setting_items->id); ?>" value="<?php echo e($setting_items->site_title); ?>" class="form-control" />
                          <p class="description">The title of the website.</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div style="text-align: left;" class="col-lg-12 control-label">
                          <label for="site_name_<?php echo e($setting_items->id); ?>" class="col-lg-2 control-label">site name</lable>
                        </div>
                        <div style="text-align: left;" class="col-lg-12">
                          <input style="width: 50%;" type="text" id="site_name_<?php echo e($setting_items->id); ?>" name="site_name_<?php echo e($setting_items->id); ?>" value="<?php echo e($setting_items->site_name); ?>" class="form-control" />
                          <p class="description">The name of the website, this will appear on the header.</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div style="text-align: left;" class="col-lg-12 control-label">
                          <label for="site_meta_desc_<?php echo e($setting_items->id); ?>" class="col-lg-2 control-label">site meta description</lable>
                        </div>
                        <div style="text-align: left;" class="col-lg-12">
                          <input style="width: 50%;" type="text" id="site_meta_desc_<?php echo e($setting_items->id); ?>" name="site_meta_desc_<?php echo e($setting_items->id); ?>" value="<?php echo e($setting_items->site_meta_desc); ?>" class="form-control" />
                          <p class="description">A short description of the website, this will help linking to search engines.</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div style="text-align: left;" class="col-lg-12 control-label">
                          <label for="site_meta_keywords_<?php echo e($setting_items->id); ?>" class="col-lg-2 control-label">keywords</lable>
                        </div>
                        <div style="text-align: left;" class="col-lg-12">
                          <input style="width: 50%;" type="text" id="site_meta_keywords_<?php echo e($setting_items->id); ?>" name="site_meta_keywords_<?php echo e($setting_items->id); ?>" value="<?php echo e($setting_items->site_meta_keywords); ?>" class="form-control" />
                          <p class="description">A list of keywords that descripe the website, this will help linking to search engines.</p>
                        </div>
                      </div>
                      <div style="text-align: center;" class="form-group">
                          <div class="col-lg-12">
                            <input class="btn btn-primary" type="submit" name="save_<?php echo e($setting_items->id); ?>" id="save_<?php echo e($setting_items->id); ?>" value="Save">
                            <input class="btn btn-primary" type="reset" value="Reset">
                            <a class="btn btn-primary" href="<?php echo e(route('category.index')); ?>">Cancel</a>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





          </div>
        </div>

      <!-- </div>
    </div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\acdivet\resources\views/manage/site_settings/index.blade.php ENDPATH**/ ?>