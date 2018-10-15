<!DOCTYPE html>
<html>
<head>
    <!-------------------------------- Begin: Meta ----------------------------------->
@include('layouts.web.meta')
@yield('metadata')
<!-------------------------------- End: Meta ----------------------------------->

    <!-------------------------------- Begin: stylesheet ----------------------------------->
@include('layouts.web.style')
@yield('styles')
<!-------------------------------- End: stylesheet ----------------------------------->

</head>
</html>
<body>
<div class="oz-body-wrap">
@include('layouts.web.header')
</div>
@include('layouts.web.script')
</body>