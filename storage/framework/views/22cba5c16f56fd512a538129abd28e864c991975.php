
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/parsley.css')); ?>" />
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Demo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link ShowForma2" href="#">List</a></li>
      <li class="nav-item">
        <a class="nav-link ShowForma" href="#" >Add User</a>
      </li>
    </ul>
  </div>
</nav>
<div id="loading" style="display:none;"><img src="<?php echo e(URL::asset('assets/img/loader.gif')); ?>" width="100"/></div>
<div class="row clearfix ShowAllData" id="ShowAllData">
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

            </div>
        </div>
        <!-- ShowAllData -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $('.ShowForma').click(function (e) {
                    e.preventDefault();
                    
                    $.ajax({
                        beforeSend: function(){
                        $("#loading").show();
                    },
                    data: "",
                    url: "<?php echo e(route('RegisterData.create')); ?>",
                    type: "GET",
                    // dataType: 'json',
                    success: function (data) {
                        $("#loading").hide();
                            $("#ShowAllData").html(data);
                    },
                });
                });

                $('.ShowForma2').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        beforeSend: function(){
                        $("#loading").show();
                    },
                    data: "",
                    url: "<?php echo e(route('RegisterData.show',1)); ?>",
                    type: "GET",
                    // dataType: 'json',
                    success: function (data) {
                        $("#loading").hide();
                            $("#ShowAllData").html(data);
                    },
                });
                });
                
            });
        </script>
        

<script src="<?php echo e(URL::asset('assets/js/parsley.js')); ?>"></script>
<script>

        $(".form_validation").parsley();
        </script>
        <script type="text/javascript">
  $(function () {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#productForm').serialize(),
          url: "<?php echo e(route('RegisterData.store')); ?>",
          type: "POST",
        //   dataType: 'json',
          success: function (data) {
            if(data==1){
                $.ajax({
                        beforeSend: function(){
                        $("#loading").show();
                    },
                    data: "",
                    url: "<?php echo e(route('RegisterData.show',1)); ?>",
                    type: "GET",
                    // dataType: 'json',
                    success: function (data) {
                        $("#loading").hide();
                            $("#ShowAllData").html(data);
                    },
                });
            }else{
                console.log(data)
                $(".ShowError").show();
                $(".ShowError").html(data.message);
            }
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
     
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel\resources\views/ShowData.blade.php ENDPATH**/ ?>