<!DOCTYPE html>
<html>
<head>
    <!-------------------------------- Begin: Meta ----------------------------------->
@include('layouts.admin.meta')
@yield('metadata')
<!-------------------------------- End: Meta ----------------------------------->

    <!-------------------------------- Begin: stylesheet ----------------------------------->
@include('layouts.admin.style')
@yield('styles')
<!-------------------------------- End: stylesheet ----------------------------------->

</head>
</html>
<body id="welcome">
    @include('layouts.app')
    @include('layouts.admin.left_navigation')
    <div id="main-wrapper">
        <div class="main-content">
            <section id="welcome">
                <div class="content-header">
                    @yield('header')
                </div>
                <div class="welcome">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>

    @include('layouts.admin.script')
</body>
