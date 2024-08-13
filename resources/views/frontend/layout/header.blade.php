<!-- resources/views/partials/header.blade.php -->
<header>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/e-commerce_logo.png') }}" alt="Logo">
            </a>
        </div>
        <!-- <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul> -->
    </nav>
</header>

<style>
    header {
        background-color: #f8f9fa;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo img {
        max-height: 100px;
        max-width: 300px;
    }
    .nav-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    .nav-links li {
        margin-left: 20px;
    }
    .nav-links a {
        text-decoration: none;
        color: #343a40;
        font-weight: bold;
    }
</style>
