<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('layouts.header')

<body>


    @include('layouts.main')

    @yield('content')

    @include('layouts.scripts')
</body>

</html>
