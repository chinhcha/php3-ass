<!DOCTYPE html>
<html lang="zxx">
    <title>@yield('title','Trang chủ - Chinnn')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@include('client.layouts.partials.css')

<body>

    @include('client.layouts.partials.canvas')
    <header id="back-header" class="back-header">
        @include('client.layouts.partials.topbarstart')
        @include('client.layouts.partials.menuMain')

    </header>

    @yield('content')
    @yield('detail')
    @yield('chitiet')

    <footer id="back-footer" class="back-footer">
     @include('client.layouts.partials.footer')
    </footer>


    @include('client.layouts.partials.backscrollUp')



    @include('client.layouts.partials.js')
</body>

</html>
