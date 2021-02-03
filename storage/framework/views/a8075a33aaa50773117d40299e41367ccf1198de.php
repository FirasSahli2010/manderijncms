

<?php $__env->startSection('content'); ?>
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <form method="POST"  action="/manage/category/update/<?php echo e($category->id); ?>" class="form-horizontal">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
          <div class="col-lg-2 control-label">
            <label for="title" class="col-lg-2 control-label">Title</lable>
          </div>
          <div class="col-lg-10">
            <input type="text" id="title" name="title" value="<?php echo e($category->title); ?>" class="form-control <?php echo e($errors->has('title') ? 'error' : ''); ?>" />
            <p class="description">The name is how it appears on your site.</p>
          </div>
            <!-- Error -->
               <?php if($errors->has('title')): ?>
               <div class="error">
                   <?php echo e($errors->first('title')); ?>

               </div>
               <?php endif; ?>
        </div>

        <div class="form-group">
          <div class="col-lg-2 control-label">
            <label for="desc" class="col-lg-2 control-label">Description</lable>
          </div>
          <div class="col-lg-10">
            <textarea name="desc" id="desc" rows="5" cols="50" class="form-control large-text" placeholder="Add desctiption" ><?php echo e($category->desc); ?></textarea>
            <p class="description">The description is not prominent by default, it will not be shown.</p>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-2 control-label">
            <label for="parent_category" class="col-lg-2 control-label">Parent</label>
          </div>
            <div class="col-lg-10">
          <select style="width:200px; height: 30px; " name="parent_category" id="parent_category">
              @<?php foreach ($data as $item): ?>
                <option value="<?php echo e($item->id); ?>"
                  <?php if($item->id == $category->parent_category): ?>
                    selected
                  <?php endif; ?>
                  >
                  <?php echo e($item->title); ?>

                </option>
              <?php endforeach; ?>
            </select>
            <p class="description">Categories can have a hierarchy. You might have a parent category, and under that have children categories. Totally optional</p>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-2 control-label">
            <label for="lang" class="col-lg-2 control-label">Langauge</label>
          </div>
            <div class="col-lg-10">
          <select style="width:200px; height: 30px; " class="custom-select" name="lang" id="lang">
              @<?php foreach ($langArray as $lang): ?>
                <option value="<?php echo e($lang->id); ?>"
                  <?php if($lang->id == $category->language ): ?>
                    Selected
                  <?php endif; ?>
                  >
                  <?php echo e($lang->name); ?>

                </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
            <div class="col-lg-12">
              <input class="btn btn-primary" type="submit" name="save" id="save" value="Save">

              <?php if($category->shw == 'Y'): ?>
                <input class="btn btn-primary" type="submit" name="draft" id="draft" value="Draft">
              <?php else: ?>
                <input class="btn btn-primary" type="submit" name="publish" id="publish" value="Publish">
              <?php endif; ?>
              <input class="btn btn-primary" type="reset" value="Reset">
              <a class="btn btn-primary" href="<?php echo e(route('category.index')); ?>">Cancel</a>
            </div>
        </div>

      </form>
    <!-- </div>
  </div> -->
</div>
<?php $__env->stopSection(); ?>
<!--  -->

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\acdivet\resources\views/manage/category/edit.blade.php ENDPATH**/ ?>