<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="/css/cms.css" rel="stylesheet">
  @yield('css')
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper"> 
   @include('components.admin-nav') 
   <div class="content-wrapper"> 
    <div class="content p-0">
      <div  style="min-height: 90vh;background-color: #3333">
        @yield('content')
      </div>
    </div>
  </div>
  @include('components.footer') 
</div>
<script
  src="https://code.jquery.com/jquery-3.1.0.js"
  integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="
  crossorigin="anonymous">
</script>
<script src="/js/cms.js" defer></script>
@yield('js')
</body>
</html>




