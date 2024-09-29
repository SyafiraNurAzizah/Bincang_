{{-- @push('styles')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush --}}

<nav class="navbar">
    <h1 class="talkgether"><a class="t">B</a>incang<a class="line">_</a></h1>

    <div class="menu">
        <p><a href="{{ route('index') }}">Beranda</a></p>
        <p><a href="#">Kategori</a></p>
        <p><a href="#">International Books</a></p>
    </div>
    
    <div class="search-container">
        <input id="search-submit" type="text" placeholder="Cari..." autocomplete="off">
        <div class="search-button" onclick="searchFunction()">
            <i class="fa fa-search"></i>
        </div>
        <div class="clear-button" onclick="clearSearch()">
            <i class="fa fa-times"></i>
        </div>
    </div>

    <div class="login-button">
        <a href="{{ route('login') }}"><i class="fa fa-user"></i></a>
    </div>
</nav>

@push('scripts')
    <script src="{{ asset('js/nav.js') }}"></script>
@endpush