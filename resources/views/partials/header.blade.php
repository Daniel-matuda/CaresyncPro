<nav class="navbar navbar-expand-lg" style="background-color: #007bff;"> <!-- Azul comercial -->
  <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">CareSync</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="#">Contato</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Usuário
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('users') }}">Gerenciar Usuários</a></li>
                      <li><a class="dropdown-item" href="{{ route('user.create') }}">Criar um Usuário</a></li>
                      <li><a class="dropdown-item" href="#">Outra ação</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Mais opções</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Anamnese
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('anamneses') }}">Gerenciar fichas de Anamnese</a></li>
                      <li><a class="dropdown-item" href="{{ route('anamnese.create') }}">Criar uma ficha de Anamnese</a></li>
                      <li><a class="dropdown-item" href="#">Outra ação</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Mais opções</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                  @auth
                      <span class="nav-link" style="color: white;">
                          Olá, {{ auth()->user()->fullName }}
                          <a href="{{ route('login.destroy') }}" class="btn btn-danger btn-sm ml-4" role="button">Logout</a>
                      </span>
                  @endauth

                  @guest
                      <span class="nav-link" style="color: white;">Olá, bem-vindo visitante</span>
                  @endguest
              </li>

              <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
          </ul>

          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
      </div>
  </div>
</nav>
