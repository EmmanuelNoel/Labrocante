<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <!-- <img src="{{ asset('users/assets/images/logo-sm.png')}}" alt="" height="22"> -->
            </span>
            <span class="logo-lg">
                <!-- <img src="{{ asset('users/assets/images/logo-dark.png')}}" alt="" height="17"> -->
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/Logo 1.png')}}" alt="" height="45">

            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/Logo 1.png')}}" alt="" height="45">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title text-center"><span data-key="t-menu">Tableau de bord</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <span data-key="t-dashboards"><i class="fa-solid fa-rotate"></i>Historiques</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Historiques d'Achats </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> Historiques de Ventes </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-ecommerce"> Historiques de services annulés </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Historiques de service en cours</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <span data-key="t-apps"><i class="fa-solid fa-chart-simple"></i> Statistiques</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender">Statistique de service en attente </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender">Statistique de service actif </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Statistique de service vendus </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Statistique de service en attente de validation</a>
                            </li>
                        </ul>
                    </div>
                <li class="nav-item">
                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"><i class="fa-brands fa-digital-ocean"></i> Services </a>
                </li>

                <li class="nav-item">
                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"><i class="fa-solid fa-comment"></i> Chat </a>
                </li>
            </ul>
        </div>
        </li>
        </ul>
        <div class="compte">
            <h4 class="m-3">Compte</h4>
            <li class="nav-item " id="oaolink">
                <a href="#sidebarCRM" class="nav-link m-3"><i class="fas fa-bell"></i>
                    Notifications
                </a>
            </li>
            <li class="nav-item " id="oaolink">
                <a href="" class="nav-link m-3"><i class="fas fa-cog"></i>
                    Paramètre
                </a>
            </li>
            <li class="nav-item" id="oaolink">
                <a href="" class="nav-link m-3"><i class="fas fa-question-circle"></i>

                    Profil
                </a>
            </li>
        </div>
        <div class="disconnect m-3">
            <a class="nav-link inscrire col-md-1 text-center d-flex" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-power-off mx-1"></i>
                Déconnexion
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>