<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    {{-- style css --}}
    <link href={{asset("css/style.css")}} rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('layouts.header')

    <div class="panel-body">
        @if (session('notice'))
            <div class="alert alert-success">
                {{ session('notice') }}
            </div>
        @endif
    </div>

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>