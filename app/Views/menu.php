<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6511a5;">

  <div class="container-fluid" style="justify-content: flex-end; align-content: end; padding: 0; margin: 0;">
        
  <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      
      <div style="justify-content: flex-end; align-content: end; display: inline-block;">
        <a class="navbar-brand text-white" href="<?= base_url('Home/index') ?>">
        <img src="/img/faviconx.png" alt="" width="40" height="40"> 
           Book Solution
        </a>
      </div>

  </div>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="text-white btn" aria-current="page" href="<?= base_url('Home/index') ?>">Home</a>

              <li class="nav-item dropdown">
                <a class=" text-white btn" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastros
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item text-black" href="<?= base_url('auth/cadastro_funcionario') ?>">Funcionário</a>
                  <a class="dropdown-item text-black" href="<?= base_url('clientecontroller/cadastro_cliente') ?>">Clientes</a>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown text-white btn" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Livros
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('livrocontroller/livros') ?>">Consulta</a>
                  <a class="dropdown-item" href="<?= base_url('livrocontroller/cadastro_livro') ?>">Cadastro</a>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown text-white btn"   id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reservas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('reservacontroller/reservas') ?>">Consulta</a>
                  <a class="dropdown-item" href="<?= base_url('reservacontroller/cadastro_reserva') ?>">Reservar</a>
                </ul>
              </li>
              <li class="nav-item">
                <a class="text-white btn"  href="<?= site_url('auth/logout'); ?>">
                  Sair
                </a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</header>