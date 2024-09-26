<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Budget-Management-System')</title>
    <meta name="description" content="A brief description of your app">

    <!-- Add Bootstrap CSS or any other styles you prefer -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="public/css/app.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css" rel="stylesheet">

    <style>
      body {
    padding-top: 56px; /* Adjust for fixed-top navbar */
    margin: 0; /* Remove default margin */
}

#sidebar-wrapper {
    width: 250px;
    height: 100vh; /* Full height sidebar */
    top: 0;
    left: 0;
    z-index: 1000;
    background-color: #343a40; /* Dark gray background for the sidebar */
}

.list-group-item {
    padding: 1.25rem 1.5rem;
}

.content-wrapper {
    margin-left: 250px; /* Push content to the right for sidebar */
    padding: 20px; /* Add padding to the content area */
}

/* Fixed-top navbar styles */
.navbar {
    background-color: #343a40; /* Dark gray background for the navbar */
    position: fixed;
    width: 100%; /* Full width navbar */
    z-index: 1030; /* Ensure the navbar is above other elements */
}

/* Sidebar toggle button (if needed for mobile view) */
@media (max-width: 992px) {
    #sidebar-wrapper {
        margin-left: -250px; /* Hide sidebar off-screen */
    }

    #sidebar-wrapper.show {
        margin-left: 0; /* Show sidebar */
    }

    .content-wrapper {
        margin-left: 0; /* Content takes full width */
    }
}

    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <div class="d-flex" id="wrapper">
        <!-- Include Sidebar -->
        @include('layouts.sidebar')

        <!-- Page Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Datatables JS -->
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
</body>
</html>
