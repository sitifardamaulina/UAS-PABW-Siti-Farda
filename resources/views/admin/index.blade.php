<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    @include('admin.head')

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('admin.side')

        @include('admin.header')

        @yield('container') 
    </div>
    @include('admin.footer')

</body>

</html>