<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Paperget::Ad</title>
    @yield('style')
</head>
<body id="app-layout">

@include('layouts.partial.header')

<div class="container">
    @yield('content')
</div>

@include('layouts.partial.footer')

<script src="js/app.js">

</script>
@yield('script')

</body>
</html>