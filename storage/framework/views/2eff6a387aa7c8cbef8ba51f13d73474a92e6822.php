<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
        <title>
           DIU Community
        </title>
        <meta name="description" content="Marketing Dashboard">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('frontend/css/vendors.bundle.css')); ?>">
        <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('frontend/css/app.bundle.css')); ?>">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('frontend/img/favicon/apple-touch-icon.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('frontend/img/favicon/favicon-32x32.png')); ?>">
        <link rel="mask-icon" href="<?php echo e(asset('frontend/img/favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('frontend/css/datagrid/datatables/datatables.bundle.css')); ?>">
</head>
<body>

<div class="page-wrapper">
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                        <a href="<?php echo e(url('/')); ?>" class="page-logo-link press-scale-down d-flex align-items-center">
                            <img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">DIU Community</span>
                        </a>
                    </div>
                    
                    <a href="<?php echo e(route('register')); ?>" class="btn-link text-white ml-auto">
                        Create Account
                    </a>

                </div>
            </div>


             <?php echo $__env->yieldContent('content'); ?>
             
        </div>
    </div>
</div>


    <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-141754477-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- base vendor bundle: 
             DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
                        + pace.js (recommended)
                        + jquery.js (core)
                        + jquery-ui-cust.js (core)
                        + popper.js (core)
                        + bootstrap.js (core)
                        + slimscroll.js (extension)
                        + app.navigation.js (core)
                        + ba-throttle-debounce.js (core)
                        + waves.js (extension)
                        + smartpanels.js (extension)
                        + src/../jquery-snippets.js (core) -->
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>
        <script id="dsq-count-scr" src="//disquscomment-4.disqus.com/count.js" async></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/layouts/app.blade.php ENDPATH**/ ?>