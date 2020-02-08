<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="/css/cms.css" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper"> 
     @include('components.admin-nav') 
     <div class="content-wrapper"> 
        <div class="content">
          <div  style="min-height: 90vh;background-color: #3333">
              @yield('content')
          </div>
       </div>
   </div>
    @include('components.footer') 
</div>
<script src="/js/cms.js" defer></script>
</body>
</html>




