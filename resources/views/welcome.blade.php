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

        <div class=" absolute top-0 left-0">
            <div class=" absolute bg-gradient-to-br from-red-100 to-red-200 w-64 h-64 rounded-full opacity-50"></div>
            <div
                class=" absolute  ml-10 mt-10 bg-gradient-to-br from-green-100   to-green-200 w-64 h-64 rounded-full opacity-50">
            </div>
            <div
                class=" absolute ml-24 bg-gradient-to-br from-indigo-100 to-indigo-200 w-64 h-64 rounded-full opacity-50">
            </div>
        </div>
        {{-- right ciycl --}}
        <div class=" absolute top-0 right-0 transform -translate-x-64 translate-y-64">
            <div class=" absolute bg-gradient-to-br from-red-100 to-red-200 w-64 h-64 rounded-full opacity-50"></div>
            <div
                class=" absolute  ml-10 mt-10 bg-gradient-to-br from-green-100   to-green-200 w-64 h-64 rounded-full opacity-50">
            </div>
            <div
                class=" absolute ml-24 bg-gradient-to-br from-indigo-100 to-indigo-200 w-64 h-64 rounded-full opacity-50">
            </div>
        </div>
        <!-- ============================-->
        <!-- Header ============================-->
        <!-- ============================-->
        <x-header />
        <!-- ============================-->
        <!-- Hero section ============================-->
        <!-- ============================-->
        <x-hero />

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
