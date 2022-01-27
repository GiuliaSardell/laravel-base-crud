<div class="container">

  <ul class="nav nav-pills nav-fill my-5 mx-3">

    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'comics.index') ? 'active' : '' }}" href="{{route('comics.index')}}">Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
    </li>

  </ul>

</div>