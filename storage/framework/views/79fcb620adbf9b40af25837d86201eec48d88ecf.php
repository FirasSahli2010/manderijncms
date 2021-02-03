

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title"><?php echo e(__('Categories')); ?></h3>
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
            <input type="text" class="form-control" placeholder="Filter " aria-label="Search" />
        </div>


        <div class="panel-body container col-md-12" style="text-align: left; ">
            <!-- <button type="button" class="btn btn-link"> -->
            <a role="link" class="btn btn-primary"  href="/manage/category/add/" >
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
                    <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                </svg>  &nbsp; Add Section </a><!--</button> -->

                <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="category/mycategoryDeleteAll">Delete All Selected</button>
        </div>
        <div class="table-responsive" >
        <!-- <table class="table table-striped table-sm"> -->
          <table id="data_table" class="table table-striped table-hover table-sm table table-bordered" >
          <thead>
            <tr>
              <th width="50px"><input type="checkbox" id="master"></th>
                <div class="fht-cell" style="width: 36.8px;"></div>
              </th>

              <th ><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('title'));?></th>
              <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('lang'));?></th>
              <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('shw', 'Published'));?></th>
              <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('updated_at','Last update'));?></th>
              <th colspan="4" style="text-align: center;">Operations</th>
            </tr>
          </thead>
          <tbody>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr id="tr_<?php echo e($category->id); ?>" role="row">
                <td style="text-align: center; vertical-align: middle; width:36px; ">
                  <input type="checkbox" class="sub_chk" data-id="<?php echo e($category->id); ?>">
              </td>

                <td class="card-body"><?php echo e($category->title); ?></td>
                <td><?php echo e((\App\Http\Controllers\LanguagesController::get_language_name($category->language))); ?></td>
                <td>
                  <?php if($category->shw  == 'Y'): ?>
                    <button style="background-color: #00913B;" type="button" title="Draft" class="btn btn-success" onclick="window.location.replace('/manage/category/<?php echo e($category->id); ?>/disable')"
                      <?php if($category->trashed()): ?>
                        class="form-control" disabled
                      <?php else: ?>
                        class="btn btn-xs btn-primary edit"
                      <?php endif; ?>
                      >
                                Published
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle2-on" viewBox="0 0 16 16">
                  <path d="M7 5H3a3 3 0 0 0 0 6h4a4.995 4.995 0 0 1-.584-1H3a2 2 0 1 1 0-4h3.416c.156-.357.352-.692.584-1z"></path>
                  <path d="M16 8A5 5 0 1 1 6 8a5 5 0 0 1 10 0z"></path>
                </svg>
              </button>
                  <?php else: ?>
                    <button type="button" title="Enable" class="btn btn-outline-danger" onclick="window.location.replace('/manage/category/<?php echo e($category->id); ?>/enable')"
                      <?php if($category->trashed()): ?>
                        class="form-control" disabled
                      <?php else: ?>
                        class="btn btn-xs btn-primary edit"
                      <?php endif; ?>
                      >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                      <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"></path>
                        </svg>
                        Draft
                            </button>
                  <?php endif; ?>
                </td>
                <td class="card-body"><?php echo e($category->updated_at); ?></td>

                <td style="text-align=center; width:auto;">
                  <a <?php if($category->trashed()): ?>
                    class="form-control" disabled
                  <?php else: ?>
                    class="btn btn-xs btn-primary edit"
                  <?php endif; ?> href="/manage/category/<?php echo e($category->id); ?>/">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg> Details
                  </a>
                </td>

                <td style="text-align: center; width:auto;">
                                        <!-- <a class="btn btn-primary  border" role="button" href="/category/<?php echo e($category->id); ?>/edit/"><i class="fa fa-edit white"></i> Edit </a> -->
                                        <!-- <a class="btn btn-primary  border" role="button" href="/category/<?php echo e($category->id); ?>/edit/">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a> -->

                                        <a href="/manage/category/<?php echo e($category->id); ?>/edit/"
                                            <?php if($category->trashed()): ?>
                                              class="form-control" disabled
                                            <?php else: ?>
                                              class="btn btn-xs btn-primary edit"
                                            <?php endif; ?>
                                             id="<?php echo e($category->id); ?>">
                                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          Edit
                                        </a>

                                </td>
                                <td style="text-align: center; width:auto;">
                                    <!-- <a href ="/category/<?php echo e($category->id); ?>/delete/" class="btn btn-danger"><i class="fa fa-times white"></i> Delete </a> -->
                                    <!-- <a href ="/category/<?php echo e($category->id); ?>/delete/" class="btn btn-danger">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </a> -->
                                    <?php if($category->trashed()): ?>
                                      <a onclick="return confirm('Are you sure, you want to restore?')" href="/manage/category/<?php echo e($category->id); ?>/restore" class="btn btn-success" id="<?php echo e($category->id); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202l-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg>
                                        Restore
                                      </a>
                                    <?php else: ?>
                                      <a onclick="return confirm('Are you sure you want to delete?')" href="/manage/category/<?php echo e($category->id); ?>/delete" class="btn btn-xs btn-danger delete" id="<?php echo e($category->id); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                        Delete
                                    </a>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align: center; width:auto;">
                                    <!-- <a href ="/category/<?php echo e($category->id); ?>/delete/" class="btn btn-danger"><i class="fa fa-times white"></i> Delete </a> -->
                                    <!-- <a href ="/category/<?php echo e($category->id); ?>/delete/" class="btn btn-danger">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </a> -->

                                      <a onclick="return confirm('Are you sure you want to destroy this item, this operation can not be reverted?')" href="/manage/category/<?php echo e($category->id); ?>/permdelete" class="btn btn-xs btn-danger" id="<?php echo e($category->id); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                        Destroy
                                    </a>

                                </td>

              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- <?php echo e($categories->links()); ?> -->
            <?php echo e($categories->appends(['sort' => 'title'])->links()); ?>

          </tbody>
        </table>
        </div>
      <!-- </div>
    </div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\acdivet\resources\views/manage/category/index.blade.php ENDPATH**/ ?>