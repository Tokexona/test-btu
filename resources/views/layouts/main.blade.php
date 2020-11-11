<!DOCTYPE html>
<html lang="en">
    @include('components.head')

    <body>

    @include('components.menu')


    @yield('content')


    @if(footer_text_1)
        <footer style="position: absolute; bottom: 0; background: #00ff00; color: black; height: 50px; width: 100%;">
        This is footer

        {{ $footer_text_1 }}

        </footer>
    @endif
</body>
</html>