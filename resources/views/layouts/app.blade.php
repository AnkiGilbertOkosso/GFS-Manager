<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <title>Admin Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-secondary bg-gray-100">
    <!--sidenav -->
    @include('partials.sidebar')
    <!-- end sidenav -->

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64  min-h-screen transition-all main">
        <!-- navbar -->
        @include('partials.navbar')
        <!-- end navbar -->

        <!-- Content -->
        @yield('name')
        <!-- End Content -->
    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>

</html>
