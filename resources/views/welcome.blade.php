<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class=" bg-gradient-to-br from-white to-gray-300">

        {{-- left circle --}}

        <div class=" absolute top-0 left-0 transform translate-x-4 translate-y-4">
            <x-circles />
        </div>
        {{-- right ciycl --}}
        <div class="absolute hidden lg:block overflow-hidden  top-0 right-0 transform -translate-x-64 translate-y-64">
            <x-circles />
        </div>
        <!-- ============================-->
        <!-- Header ============================-->
        <!-- ============================-->
        <x-header />
        <!-- ============================-->
        <!-- Hero section ============================-->
        <!-- ============================-->
        <x-hero />
        <!-- ============================-->
        <!-- overview section ============================-->
        <!-- ============================-->
        <x-overview />
        <!-- ============================-->
        <!-- about section ============================-->
        <!-- ============================-->
        <x-about />
        <!-- ============================-->
        <!-- what you will learn section ============================-->
        <!-- ============================-->
        <x-learn />
        <!-- ============================-->
        <!-- build section ============================-->
        <!-- ============================-->
        <x-build />
        <!-- ============================-->
        <!-- pricing section ============================-->
        <!-- ============================-->
        <x-pricing />
        <!-- ============================-->
        <!-- faq section ============================-->
        <!-- ============================-->
        <x-faq />
        <!-- ============================-->
        <!-- footer section ============================-->
        <!-- ============================-->
        <x-footer />

    </div>












    @if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">
        //<![CDATA[
            document.write(
                "<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
            //]]>

    </script>
    @endif
</body>

</html>
