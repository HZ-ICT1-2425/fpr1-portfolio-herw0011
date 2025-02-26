@php use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>"My website"</title>
</head>

<body>
<div class="navbar">
    <ul class="nav">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blogs') }}">Blog</a></li>
        </ul>


        <img src="assets/hz-university-of-applied-sciences.png" alt="hz" class="hz-logo">
    </ul>
</div>

{{ $slot }}
