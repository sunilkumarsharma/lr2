<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit."> -->
<title>Demo</title>
@include("includes.Admin.head")
</head>
<body class="theme-black menu_dark">
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"></div>
        <p>Please wait...</p>        
    </div>
</div>
</aside> -->

<!-- Main Content -->
<section class="content home">
@include("includes.Admin.header")
    <div class="container-fluid">      
        @yield('content')
    </div>
</section>
@include("includes.Admin.footer")
</body>
</html>