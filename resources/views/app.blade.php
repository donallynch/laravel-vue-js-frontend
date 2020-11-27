<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{!! __('messages.inviter') !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @section('css')
        @show()
</head>
<body>
    {{-- PAGE --}}
    <div class="container page">
        <div class="content">
            @yield('content')
        </div>
    </div>

    {{-- JS --}}
    @section('js')
        @show()

        <!-- VUE JS: Development version, includes helpful console warnings -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

        <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>