

<?php $__env->startSection('content'); ?>
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <form method="POST" action="/manage/page" class="form-horizontal">
        <?php echo csrf_field(); ?>
         <fieldset class="uk-fieldset">
          <div class="laraberg-sidebar">
     <!--  <div class="col-lg-4"> -->
            <div class="form-group">
              <div >
                <div class="control-label">
                  <label for="title" class="control-label">Title</label>
                </div>
                <input type="text" placeholder="Title" id="title" name="title" class=" form-control <?php echo e($errors->has('title') ? 'error' : ''); ?>" />
              </div>
              
            </div>

            <div class="form-group">
              <div class="control-label">
                <label for="parent_category" class="col-lg-2 control-label">Parent</label>
              </div>
              <select style="width:200px; height: 30px; " class="custom-select" name="parent_category" id="parent_category">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>: ?>
                  <option value="<?php echo e($item->id); ?>">
                    <?php echo e($item->title); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
              </select>
              
            </div>
            <div class="form-group">
              <div class="control-label">
                <label for="lang" class="control-label">Langauge</label>
              </div>
              <select style="width:200px; height: 30px; " class="custom-select" name="lang" id="lang">
                <?php $__currentLoopData = $langArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>: ?>
                  <option value="<?php echo e($lang->id); ?>">
                    <?php echo e($lang->name); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
              </select>
            </div>
          </div>
          <div class="uk-margin">
                <!-- <input type="text" class="uk-input uk-form-large laraberg-sidebar <?php echo e($errors->get('title') ? 'uk-form-danger' : ''); ?>" name="title_sub" placeholder="Title" value=""> -->
                <textarea id="post-title-0" class="uk-input uk-form-large laraberg-sidebar <?php echo e($errors->get('title') ? 'uk-form-danger' : ''); ?> editor-post-title__input" placeholder="Add title" cols="80" rows="1" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 95px;"></textarea>
            </div>
          <div class="uk-margin">
            <textarea id="desc" placeholder="Add desctiption" name="desc" hidden></textarea>
          </div>
        <!-- </div> -->
            
        </fieldset>

        <div class="form-group">
              <div style="text-align: center;">
                <input class="btn btn-primary" type="submit" name="save" id="saqve" value="Save">
                <input class="btn btn-primary" type="submit" name="publish" id="publish" value="Publish">
                <input class="btn btn-primary" type="reset" value="Reset">
                <a class="btn btn-primary" href="<?php echo e(route('page.index')); ?>">Cancel</a>
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
         

<?php $__env->stopSection(); ?>
<!--  -->
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\acdivet\resources\views/manage/page/add.blade.php ENDPATH**/ ?>