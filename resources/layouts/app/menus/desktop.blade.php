<nav id="horizontal-nav" class="white hide-on-med-and-down">
    <div class="nav-wrapper">
        <ul class="left ml-1">
            <li>
                <h1 class="logo-wrapper">
                    <a href="{{ url('home') }}" class="brand-logo">
                        <img src="{{ asset('img/logo-cv.png') }}" alt="Logo {{ config('app.name') }}">
                    </a>
                </h1>
            </li>
        </ul>
        <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
            <li>
                <a class="dropdown-menu" href="#!" data-activates="administrativoSubMenu">
                    <i class="material-icons">dashboard</i>
                    <span>
                        Administrativo
                        <i class="material-icons right">keyboard_arrow_down</i>
                    </span>
                </a>
                {{-- administrativoSubMenu --}}
                <ul id="administrativoSubMenu" class="dropdown-content dropdown-horizontal-list">
                    <li>
                        <a href="{{ url('/relatorio-faturamento') }}">
                            Faturamento
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-parques/0/3') }}">
                            Equipamentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/relatorio-cliente') }}">
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/alterar-dispositivo') }}">
                            Alterar dispositivo
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-termos-uso') }}">
                            Termos de uso
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-logs') }}">
                            Logs
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-termos-uso') }}">
                            Termos de uso
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/comunicados') }}">
                            Comunicados
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-usuarios') }}">
                            Usuários
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/relatorio-subcontas') }}">
                            Subcontas
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/ajuda') }}">
                            Registro não conformidades
                        </a>
                    </li>
                </ul>
                {{-- FIM administrativoSubMenu --}}
            </li>
            <li>
                <a href="{{ url('meus-creditos/'.date('m/Y').'/0') }}">
                    <i class="material-icons">attach_money</i>
                    <span>Créditos</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/aplicativos') }}">
                    <i class="material-icons">phone_iphone</i>
                    <span>Profissionais</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/configuracoes') }}">
                    <i class="material-icons">local_shipping</i>
                    <span>Veículos</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/configuracoes') }}">
                    <i class="material-icons">playlist_add_check</i>
                    <span>Regras de PGI</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/painel-viagens') }}" class="dropdown-menu" data-activates="viagensSubMenu">
                    <i class="material-icons">map</i>
                    <span>
                        Viagens
                        <i class="material-icons right">keyboard_arrow_down</i>
                    </span>

                </a>
            </li>

            <ul id="viagensSubMenu" class="dropdown-content dropdown-horizontal-list">
                <li>
                    <a href="{{ url('/relatorio-origens') }}">
                        Endereços
                    </a>
                </li>
                <li>
                    <a href="{{ url('/entrega') }}">
                        Entregas
                    </a>
                </li>
            </ul>
            <li>
                <a href="{{ url('/seleciona-dispositivo') }}">
                    <i class="material-icons">format_list_bulleted</i>
                    <span>Relatório</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/ajuda') }}">
                    <i class="material-icons">help</i>
                    <span>Ajuda</span>
                </a>
            </li>
        </ul>
        <ul class="right">
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
