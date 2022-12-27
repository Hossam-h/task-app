<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('football_match.create')}}"> Create Match </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('team.create')}}"> Create team </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('football_match.index')}}">  Match page </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('team.index')}}"> team page </a>
      </li>

      
    </ul>
  
  </div>
</nav>