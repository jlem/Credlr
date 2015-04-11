<div id="nav">
    <a href="/">Passgun</a>
    <div id="auth">
        @if (Auth::check())
            {{ Auth::user()->name }} <a href="/logout"> Logout</a>
        @else
            <a href="/login">Login</a>
        @endif
    </div>
</div>