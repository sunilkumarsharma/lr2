<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>User</strong> Add</h2>
            </div>
            <div class="body">
            <div class="alert alert-danger hide ShowError" style="display:none;" role="alert">
                
            </div>
            <form method="POST" class="form_validation" id="productForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="form-group form-float">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" data-parsley-error-message="Please enter name" required />
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control addcategory" data-parsley-error-message="Please choose photo" accept="image/png, image/jpg, image/jpeg"  required />
                        <div class="imgprview addprview"></div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                       data-parsley-error-message="Please enter valid email" required />
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Phone</label>
                        <input type="text" name="author" class="form-control" placeholder="Phone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" data-parsley-error-message="Phone" required />
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Description</label>
                        <textarea name="desc" id="doc_desc" class="form-control ckeditor" placeholder="Description" data-parsley-errors-container="#dis" data-parsley-error-message="Please enter description" required></textarea>
                        <div id="dis"></div>
                    </div>                    
                    <div class="form-group form-float">
                        <label class="form-label">Role</label>
                        <select class="form-control" name="featured" data-parsley-error-message="Please choose">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
</div>
                    <button class="btn btn-raised btn-primary btn-round waves-effect" id="saveBtn" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
    <script>

        $(".form_validation").parsley();
        </script>

        
<?php /**PATH F:\xampp\htdocs\laravel\resources\views/addUsers.blade.php ENDPATH**/ ?>