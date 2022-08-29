<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Users</strong></h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Description </th>
                                <th>Role</th>
                                <th>Photo </th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($data)>0): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td scope="row"><?php echo e(($data->currentPage()-1) * $data->perPage() + $loop->index + 1); ?></td>
                                    <td><?php echo e($datas->name); ?></td>
                                    <td><?php echo e($datas->email); ?></td>                                    
                                    <td ><?php echo e($datas->phone); ?></td>
                                    <td><?php echo e($datas->description); ?></td>                                    
                                    <td ><?php echo e($datas->phone); ?></td>                                    
                                    <td ><img src="uploads/users/<?php echo e($datas->photo); ?>" width="100" /></td>
                                    <td ><?php echo e($datas->created_at); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <tr><td colspan="9">No records found.</td></tr>
                            <?php endif; ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php echo $data->appends(\Request::except('page'))->render(); ?>

            </div><?php /**PATH F:\xampp\htdocs\laravel\resources\views/table.blade.php ENDPATH**/ ?>