<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        <nav class="navbar-color cargoviewer-color hide-on-large-only">
            <div class="nav-wrapper">
                <ul class="left ml-1 hide-on-large-only">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="{{ url('home') }}" class="brand-logo">
                                <img src="{{ asset('img/logo-cv-negativo.png') }}" alt="Logo {{ config('app.name') }}">
                            </a>
                        </h1>
                    </li>
                </ul>
                <ul class="right hide-on-large-only">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                            <i class="material-icons">notifications_none
                            <small class="notification-badge red">1</small>
                            </i>
                        </a>
                    </li>
                    <ul id="notifications-dropdown" class="dropdown-content">
                        <li>
                            <h6>NOTIFICAÇÕES</h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle red small">error</span> Alerta parada inesperada Ticket 1234
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 horas atrás</time>
                        </li>
                    </ul>
                    <li>
                        <a href="javascript:void(0);" class="profile-button" data-activates="user-dropdown">
                            <span class="avatar-status avatar-online">
                                <img avatar="{{ $user->name }}">
                                <i></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- Dropdown usuário id=user-dropdown --}}
        @include('material_admin.layouts.app.userDropdown')
        {{-- MENU PARA DESKTOP --}}
        @include('material_admin.layouts.app.menus.desktop')
    </div>
</header>
