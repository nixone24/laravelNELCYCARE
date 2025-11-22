<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid container">
    <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText ">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('home')) active @endif" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('news')) active @endif" href="{{route('news')}}">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('medecin')) active @endif" href="{{route('medecin')}}">Medecin</a>
        </li>
         <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('service')) active @endif" href="{{route('service')}}">Service</a>
        </li>
         <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('blog')) active @endif" href="{{route('blog')}}">Blog</a>
        </li>
         <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('apropos')) active @endif" href="{{route('apropos')}}">A propos</a>
        </li>
      </ul>
      <span class="navbar-text">
      <button type="button" class="btn btn-outline-info">Mon compte</button>
       <button class="btn btn-outline-danger" type="submit">Nouveau</button>
      </span>
    </div>
  </div>
</nav>