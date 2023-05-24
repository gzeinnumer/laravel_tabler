<!doctype html>
<html lang="en">

@include('layouts.partials-dashboard.head')

<body class=" layout-fluid">
    <div class="page">
        @include('layouts.partials-dashboard.aside')

        <div class="page-wrapper">
            @yield('content')
            @include('layouts.partials-dashboard.footer')
        </div>
    </div>
    @yield('modal')

    @include('layouts.partials-dashboard.modals-success')
    @include('layouts.partials-dashboard.modals-failed')
    @include('layouts.partials-dashboard.modals-loading')

    @include('layouts.partials-dashboard.js')

</body>

</html>
