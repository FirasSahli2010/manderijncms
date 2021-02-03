

<?php $__env->startSection('content'); ?>
<!-- <div class="container">
  <div class="row justify-content-center"> -->
    <!-- <div class="col-md-12">--><div class="well">
      <!-- if there are creation errors, they will show here -->
      <form method="POST"  action="/manage/page/<?php echo e($page->id); ?>" class="form-horizontal">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <fieldset class="uk-fieldset">
          <div class="laraberg-sidebar">
            <div class="form-group">
              <div class=" control-label">
                <label for="title" class="col-lg-2 control-label">
                  Title
                </label>
              </div>
              <div >
                <input type="text" id="title" name="title" value="<?php echo e($page->title); ?>" class="form-control <?php echo e($errors->has('title') ? 'error' : ''); ?>" />
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
                <label for="parent_category" class="col-lg-2 control-label">Category</label>
              </div>
              <div class="col-lg-10">
                <select style="width:200px; height: 30px; " name="parent_category" id="parent_category">
                  @<?php foreach ($data as $item): ?>
                    <option value="<?php echo e($item->id); ?>"
                      <?php if($item->id == $page->category): ?>
                        selected
                      <?php endif; ?>
                      >
                      <?php echo e($item->title); ?>

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
                    <option value="<?php echo e($lang->id); ?>"
                      <?php if($lang->id == $page->language ): ?>
                        Selected
                      <?php endif; ?>
                      >
                      <?php echo e($lang->name); ?>

                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="uk-margin">
                <!-- <input type="text" class="uk-input uk-form-large laraberg-sidebar <?php echo e($errors->get('title') ? 'uk-form-danger' : ''); ?>" name="title_sub" placeholder="Title" value="<?php echo e($page->title); ?>"> -->
                <textarea id="post-title-0" class="editor-post-title__input" placeholder="Add title" rows="1" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 95px;"><?php echo e($page->title); ?></textarea>
            </div>
            <div class="uk-margin">
              <textarea style="width: 100%" name="desc" id="desc" placeholder="Add desctiption" hidden=""><?php echo e($page->lb_raw_content); ?></textarea>
            </div>
          </div>
        </fieldset>

        <div class="form-group">
            <div class="col-lg-12">
              <input class="btn btn-primary" type="submit" name="save" id="save" value="Save">

              <?php if($lang->shw == 'Y'): ?>
                <input class="btn btn-primary" type="submit" name="draft" id="draft" value="Draft">
              <?php else: ?>
                <input class="btn btn-primary" type="submit" name="publish" id="publish" value="Publish">
              <?php endif; ?>

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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\acdivet\resources\views/manage/page/edit.blade.php ENDPATH**/ ?>