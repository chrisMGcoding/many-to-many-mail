<div class="">

    @if (Route::has('login'))
        <div class="hidden">
            @auth
                <a href="{{ url('/home') }}" class="">Home</a>
            @else
                <a href="{{ route('login') }}" class="">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
</div>