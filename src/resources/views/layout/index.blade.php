<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    @include('comfree-theme::components.comfree-header')
</head>

<body>
    @include('comfree-theme::components.comfree-navbar')
    {{-- main content --}}
    @yield('mainContent')

    {{-- footer --}}
    @include('comfree-theme::components.comfree-footer')
</body>

</html>
