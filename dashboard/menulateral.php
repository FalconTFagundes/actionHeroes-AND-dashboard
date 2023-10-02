<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../img/imgDash/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['nome_usuario'];  ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Cadastros 
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="banner">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="comentarios">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Comentarios</p>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="caracteristicas">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Caracteristicas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="init">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Init</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="produto">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="titleuniversogeek">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Titulo Universo Geek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link clickMenulateral" data-menu="universogeek">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Universo Geek</p>
                            </a>
                        </li>
                    </ul>
        </nav>
    </div>
</aside>