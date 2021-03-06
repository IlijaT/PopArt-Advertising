<header class="popart-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">

    <div class="col-4 pt-1">
      <a class="text-muted" href="/adverts/create">Create an Advert</a>
    </div>

    <div class="col-4 text-center">
      <a class="popart-header-logo text-dark" href="/">PopArt Advertising</a>
    </div>

    @if(Auth::check())

      <div class="col-4 d-flex justify-content-end align-items-center">

        <li style="list-style: none;" class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            {{-- "/users/{{ Auth::user()->id }}" --}}
            <a href="/users/{{ Auth::user()->id }}" class="dropdown-item m-1">Profile</a>
            <a class="dropdown-item m-1" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>

      </div>

    @else
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary mr-2" href="/login">Log in</a>
        <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a>
      </div>
    @endif

  </div>
</header>

<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-center">
    @foreach($categories as $category)
      @if($category->parent_id === null)
        <a class="p-2 text-muted" href="/?category_id={{ $category->id }}">{{$category->name}}</a>
      @endif
    @endforeach
  </nav>
</div>