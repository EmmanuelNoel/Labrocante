<section class="col-md-1" id="menuslateral">
    <ul>
        <!-- Home -->
        <li><a href=""><i class="fas fa-home" data-title="Accueil"></i></a></li>
        <li><a href="{{ route('dashboard') }}"><i class="fas fa-dashboard" data-title="Dashboard"></i></a></li>
        <!-- Produits / Services -->
        <li><a href="{{ route('detailproduit') }}"><i class="fa-solid fa-bag-shopping" data-title="Produit"></i></a>
        </li>
        <!-- Nouveautés  -->
        <li><a href=""><i class="fa-solid fa-newspaper" data-title="Nouveautés"></i></a></li>
        <!-- Promotions / Offres spéciales  -->
        <li><a href=""><i class="fas fa-tags" data-title="Promotions"></i></a></li>
        <!-- Blog / Actualités -->
        <li><a href=""><i class="fas fa-feather-alt" data-title="Actualités"></i></a></li>
        <!-- À Propos -->
        <li><a href=""><i class="fas fa-book-open" data-title="À propos"></i></a></li>
        <!-- Support -->
        <li><a href=""><i class="fas fa-question-circle" data-title="Support"></i></a></li>
        <!-- Login -->
        <li class="d-none d-lg-block "><a href="{{ route('bienvenue') }}"><i class="fa-solid fa-user"
                    data-title="S'inscrire"></i></a></li>
    </ul>
</section>
