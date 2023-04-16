<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-LfD3p05ZiHj9XonmAF/qN/ThTTsJGNGAQDVeOjw/N/AVAYRXZcNlOGBb9XNnSLjQ2k8yCnRzJPtJTwcKw3cqHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" integrity="sha512-x4OT19dfO5c5rn0EKtB5O5S3OWqNzEa/A/ZcbNFezN0YwccQDxGy/8SnWf0m+P5HjKXZoLQ2Qg1hzc4Kj5w5yA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <title>@yield('title')</title>
    </head>
    <body>
        <!-- Include the navigation menu here -->
        @include('partials.header')
        
        <div class="">
            <!-- Add the page content here -->
            @yield('content')
        </div>

        <!-- Include the footer here -->
        @include('partials.footer')

        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>