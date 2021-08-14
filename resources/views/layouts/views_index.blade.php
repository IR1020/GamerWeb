<!DOCTYPE html>
<html lang="ja">

@yield('head')

<body>
    <x-header />
    <main>
        @yield('content')
    </main>
    <x-footer />
</body>

</html>