<!DOCTYPE html>
<html lang="fr">

<head>
    @include('composent.head')
</head>

<body class="bg-[#395558]"
    <header>
        @include('composent.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @include('composent.footer')
    </footer>
	
  @vite('resources/js/app.js')
</body>

</html>
