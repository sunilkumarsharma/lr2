<div class="menu">
    <div class="user-info">
        <div class="image">
        <a href="<?php echo e(route('dashboard/')); ?>"><img src="<?php echo e(URL::asset('assets/images/favicon.png')); ?>" alt="User" class="user-ic"></a>
        </div>
    <div class="detail">
        <!-- <h6>SHOPPERBIRD</h6> -->
            <!-- <p class="m-b-0">info@example.com</p>
            <a href="#" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
            <a href="#" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
            <a href="#" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
            <a href="#" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a> -->
        </div>
    </div>
    <ul class="list">
        <li> <a href="<?php echo e(route('dashboard/')); ?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>        
        <li class="users"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account zmd-fw"></i><span>Users</span> <span class="badge badge-default float-right"><i class="zmdi zmdi-chevron-down zmd-fw"></i></span></a>
            <ul class="ml-menu">
                <li class="custmer"><a href="<?php echo e(route('users.index')); ?>">Customers</a></li>
                <li class="designer"><a href="<?php echo e(route('designers.index')); ?>">Designers</a></li>
            </ul>
        </li>
        <li class="category" ><a href="<?php echo e(route('category.index')); ?>" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Category</span></a></li>
        <li class="material"><a href="<?php echo e(route('materials.index')); ?>"><i class="zmdi zmdi-assignment"></i><span>Material</span></a></li>        
        <li class="measurements"><a href="<?php echo e(route('measurements.index')); ?>" class="menu-toggle"><i class="zmdi zmdi-repeat zmd-fw"></i><span>Measurements</span></a></li>
        <li class="manage"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment zmd-fw"></i><span>Manage Content</span> <span class="badge badge-default float-right"><i class="zmdi zmdi-chevron-down zmd-fw"></i></a>
            <ul class="ml-menu">
                 <li class="pages"><a href="<?php echo e(route('static-page.index')); ?>"><span>Pages</span></a></li>
                <li class="faq"><a href="<?php echo e(route('faqs.index')); ?>"></i><span>FAQ's</span></a></li>
                <!-- <li class="social"><a href="<?php echo e(route('social.index')); ?>"><span>Social Links</span></a></li> -->
            </ul>
        </li>
        <li class="membership"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-add zmd-fw"></i><span>Membership</span> <span class="badge badge-default float-right"><i class="zmdi zmdi-chevron-down zmd-fw"></i></a>
            <ul class="ml-menu">
                 <li class="plan"><a href="<?php echo e(route('membership.edit','1')); ?>"><span>Plan</span></a></li>
                 <li class="customers-history"><a href="<?php echo e(route('memberships','customers')); ?>"><span>Customers History</span></a></li>
                <li class="designers-history"><a href="<?php echo e(route('memberships','designers')); ?>"><span>Designers History</span></a></li>
            </ul>
        </li>
        <li class="help"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-headset-mic zmd-fw"></i><span>Help</span> <span class="badge badge-default float-right"><i class="zmdi zmdi-chevron-down zmd-fw"></i></a>
            <ul class="ml-menu">
                 <li class="customers-help"><a href="<?php echo e(route('customer-tickets.index')); ?>"><span>Customers Help</span></a></li>
                 <li class="designers-help"><a href="<?php echo e(route('designer-tickets.index')); ?>"><span>Designers Help</span></a></li>
            </ul>
        </li>
        <li class="products"> <a href="<?php echo e(route('product.index')); ?>"><i class="zmdi fas fa-tshirt"></i><span>Products</span></a></li>
        <li class="orders"><a href="<?php echo e(route('orders.index')); ?>"><i class="zmdi zmdi-shopping-basket zmd-fw"></i><span>Orders</span></a></li>
        <li class="accounts"> <a href="<?php echo e(route('/users_accounts')); ?>"><i class="zmdi zmdi-assignment-account zmd-fw"></i><span>Accounts</span></a></li>
        <li class="chats"> <a href="<?php echo e(route('/chats')); ?>"><i class="zmdi zmdi-comment-alt zmd-fw"></i><span>Chats</span></a></li>
        <li class="web-content"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-compare zmd-fw"></i><span>Web Content</span> <span class="badge badge-default float-right"><i class="zmdi zmdi-chevron-down zmd-fw"></i></a>
            <ul class="ml-menu">
                <li class="blogs"><a href="<?php echo e(route('blogs.index')); ?>"><span>Blog</span></a></li>
                <li class="testimonials"><a href="<?php echo e(route('testimonials.index')); ?>"><span>Testimonials</span></a></li>
                <li class="widgets"><a href="<?php echo e(route('widgets.index')); ?>"><span>Widgets</span></a></li>
                <li class="banner-section"><a href="<?php echo e(route('banner-section')); ?>"><span>Banner Section</span></a></li>
                <li class="gallery"><a href="<?php echo e(route('gallery.index')); ?>"><span>Gallery</span></a></li>
                <li class="checkout"><a href="<?php echo e(route('app-to-rule')); ?>"><span>App to rule</span></a></li>
                <li class="waiting-list"><a href="<?php echo e(route('/waiting-list')); ?>"><span>Waiting List</span></a></li>
                <li class="waiting-list"><a href="<?php echo e(route('/contact-list')); ?>"><span>Contact Us List</span></a></li>
            </ul>
        </li>
        <li class="app"> <a href="<?php echo e(route('/app-versions')); ?>"><i class="zmdi fas fa-tshirt"></i><span>App Version</span></a></li>
    </ul>
</div>
<script>
$(function() {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('.list a').each(function() {
        if (this.href === path) {
            $('.list li').removeClass('active open');
            $(this).parent('li').addClass('active open');
        }
    });
    $('.ml-menu a').each(function() {
        if (this.href === path) {
            $(this).closest('ul').show();
        }         
    });  
    localStorage.removeItem("pageTypeMenu");
    localStorage.removeItem("pageTypeSubMenu");
    localStorage.removeItem("pageMenu");
    $(window).bind("load", function() {
        let menu = localStorage.getItem("pageTypeMenu");
        let submenu = localStorage.getItem("pageTypeSubMenu");
        let pageMenu = localStorage.getItem("pageMenu");
        if(menu){
            console.log(menu)
            $(menu).children("a").addClass('toggled');
            $(menu).find("ul.ml-menu").css("display","block");
            if(submenu){
                console.log(submenu)
                $(menu).find("ul.ml-menu > li"+submenu).addClass("active open");
            }
        }
        if(pageMenu){
            console.log(pageMenu)
            $(pageMenu).addClass("active open");            
        }
    });
});
</script>
<link
      rel="stylesheet"

      href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css"
    >

<?php /**PATH F:\xampp\htdocs\laravel\resources\views/includes/Admin/sidebar.blade.php ENDPATH**/ ?>