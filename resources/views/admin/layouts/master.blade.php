<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.inc.header')
</head>
<body>
<div class="wrapper">
    @include('admin.layouts.inc.sidebar')
    <div class="main-panel">
    @include('admin.layouts.inc.navbar')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    @include('admin.layouts.inc.footer')
    </div>
</div>
@include('admin.layouts.inc.scripts')
</body>
</html>
