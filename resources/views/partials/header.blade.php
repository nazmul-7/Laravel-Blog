<div id='MenuComponent'>

    <div class="topnav">
        <a class="active" >Laravel</a>
        <a href="{{ route('blog.index')}}">Blog</a>
        <a href="{{ route('other.about')}}">About</a> 
        @guest
            <a class="nav-link nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="nav-link nav-item " href="{{ route('register') }}">{{ __('Register') }}</a>            
            @endif
         @else
            <a class="nav-item" href="{{ route('admin.index') }}">Posts</a>
            <a class="nav-item" href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" 
            method="POST" style="display: none;"> @csrf </form>
        @endguest

   </div>