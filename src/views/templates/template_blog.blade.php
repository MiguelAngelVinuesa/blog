<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->

    <head>
        @include('vendor.cloudware-studio.blog.templates.template_blog_header')
        @include('vendor.cloudware-studio.blog.templates.template_blog_css')
    </head>

    <body class="@yield('body-class')">
        @include('vendor.cloudware-studio.blog.header')
        @yield('content')
        @include('vendor.cloudware-studio.blog.footer')
        @include('vendor.cloudware-studio.blog.templates.template_blog_js')
        @stack('script')
    </body>

</html>
