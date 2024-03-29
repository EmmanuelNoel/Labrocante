<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
    {{ config('app.name', 'Laravel') }}
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-shopping-basket"></i>
        <span>Orders</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-users"></i>
        <span>Utilisateurs</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="utilities-color.html">Managers</a>
            <a class="collapse-item" href="utilities-border.html">Utilisateurs</a>

        </div>
    </div>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-bars"></i>
        <span>Categories</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('categories.index') }}">Categorie</a>

        </div>
    </div>
</li>

<!-- Nav Item - Charts -->


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
        aria-expanded="true" aria-controls="collapseProducts">
        <i class="fas fa-tshirt"></i>
        <span>Produits</span></a>
    </a>
    <div id="collapseProducts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('produits.index') }}">Tous les produits</a>
            <a class="collapse-item" href="{{ route('produits.index') }}">Vos produits</a>
            <a class="collapse-item" href="{{ route('produits.index') }}">Produits valide</a>
            <a class="collapse-item" href="{{ route('produits.index') }}">Produits en attente</a>
            <a class="collapse-item" href="{{ route('produits.index') }}">Produits non valide</a>
            <a class="collapse-item" href="{{ route('produits.index') }}">Produits rejeté</a>
        </div>
    </div>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-gift"></i>
        <span>Coupons</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
