<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.slider.index') }}" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Samartteck</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        {{-- {{ echo Request::segment(2) == 'contas/pagas' ? 'verdadeiro' : 'falso' }} --}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.slider.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.mensagem') }}" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Mensagem
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.clientes') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.noticias') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Noticias
                        </p>
                        {{-- <i class="fas fa-angle-left right"></i> --}}

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.quem-somos') }}" class="nav-link">
                        <i class="nav-icon fa fa-clock"></i>
                        <p>
                            Quem somos
                        </p>
                        {{-- <i class="fas fa-angle-left right"></i> --}}

                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">
                        <a href="route('logout')" class="nav-link"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="nav-icon far fa-clock"></i>
                            Sair
                        </a>
                    </li>
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
