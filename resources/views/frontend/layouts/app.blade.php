<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>

<body>
<!-- header -->
@include('frontend.layouts.header')
<!-- end header -->

<!-- body -->
<main class="body">
    @yield('main-content')
</main>

@include('frontend.layouts.footer')

@include('frontend.components.nav_search')

@include('frontend.components.cart_fix')

</body>
@include('frontend.layouts.scripts')
@yield('scripts')
</html>
