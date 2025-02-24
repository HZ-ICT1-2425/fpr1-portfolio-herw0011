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
        <li><a href="index.html">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="blog.html">Blog</a></li>

        <img src="assets/hz-university-of-applied-sciences.png" alt="hz" class="hz-logo">
    </ul>
</div>

{{ $slot }}
