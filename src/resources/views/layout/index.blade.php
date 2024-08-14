<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    @include('comfree-theme::components.comfree-header')
</head>

<body>
    <div class="" x-data="fetchAuthenticated()" x-init="userAuth()">
        @include('comfree-theme::components.comfree-navbar')
        {{-- main content --}}
        @yield('mainContent')

        {{-- footer --}}
        @include('comfree-theme::components.comfree-footer')

        {{-- modal --}}
        <div x-data="fetchAuthenticated()" >
            @include('comfree-theme::components.modal.comfree-login')
            @include('comfree-theme::components.modal.comfree-register')
            @include('comfree-theme::components.modal.comfree-verification')
            @include('comfree-theme::components.modal.comfree-logout')
            @include('comfree-theme::components.modal.comfree-forget-password')
            @include('comfree-theme::components.modal.comfree-forget-password-verify')
            @include('comfree-theme::components.modal.comfree-reset-password')
        </div>


    </div>

</body>

</html>
