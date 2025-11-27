<nav class="nav" arial-label="Main navigation" >
  <a href="{{route('home') }}" class="{{request()->route('home') ? 'active' : '' }}">
  home 
  </a>

  @auth
    <a href="{{route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"> Dashboard
    </a>
    <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.index') ? 'active' : '' }}"> Article
    </a>

    <span class="muted">Hi, {{ auth()->user()->name}}</span>

    <form method="POST" action="{{ route('logout') }}" class="inline"> 
      @csrf
      <button type="submit">logout</button>
    </form>
  @endauth
  
  @guest
    <div class="right">
      <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}"> Login </a>
      <a href="{{ route('register') }}" class="{{ request()-> routeIs('register') ? 'active' : '' }}">Register</a>

    </div>
  @endguest 
</nav>
<hr>