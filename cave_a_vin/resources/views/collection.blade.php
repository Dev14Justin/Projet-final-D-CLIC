<!-- Page de collection des vins (index.blade.php) -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection de Vins | Cave à Vin</title>
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .wine-card {
            transition: transform 0.3s;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
            background-color: white;
        }
        .wine-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .wine-img-container {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        .wine-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .wine-card:hover .wine-img {
            transform: scale(1.05);
        }
        .wine-price {
            font-weight: bold;
            color: #6a1b9a;
            font-size: 1.2rem;
        }
        .stock-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }
        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/wine-banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .cart-btn {
            background-color: #6a1b9a;
            border: none;
            transition: all 0.3s;
        }
        .cart-btn:hover {
            background-color: #4a148c;
            transform: scale(1.05);
        }
        .section-title {
            position: relative;
            margin-bottom: 40px;
        }
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100px;
            height: 3px;
            background-color: #6a1b9a;
        }
        .filters {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cave à Vin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-light me-2">
                        <i class="fas fa-shopping-cart"></i> Panier (0)
                    </a>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-user"></i> Compte
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Notre Collection de Vins</h1>
            <p class="lead">Découvrez notre sélection de vins exceptionnels pour toutes les occasions</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mb-5">
        <!-- Filters -->
        <div class="filters">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher un vin...">
                        <button class="btn btn-dark" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Trier par</option>
                        <option value="1">Prix croissant</option>
                        <option value="2">Prix décroissant</option>
                        <option value="3">Nouveautés</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Filtrer par prix</option>
                        <option value="1">Moins de 20€</option>
                        <option value="2">20€ - 50€</option>
                        <option value="3">50€ et plus</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark w-100">Filtrer</button>
                </div>
            </div>
        </div>

        <!-- Wine Collection -->
        <h2 class="section-title mb-4">Nos Vins</h2>
        
        <div class="row g-4">
            @forelse($vins as $vin)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="wine-card">
                    <div class="wine-img-container">
                        <img src="{{ asset('storage/'.$vin->image) }}" alt="{{ $vin->nom }}" class="wine-img">
                        @if($vin->quantite > 0)
                            <span class="stock-badge bg-success">En stock</span>
                        @else
                            <span class="stock-badge bg-danger">Rupture de stock</span>
                        @endif
                    </div>
                    <div class="card-body d-flex flex-column" style="padding:10px">
                        <h5 class="card-title">{{ $vin->nom }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($vin->description, 100) }}</p>
                        <div class="mt-auto" >
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="wine-price">{{ number_format($vin->prix, 2) }} FCFA</span>
                                <span class="text-muted small">{{ $vin->quantite }} en stock</span>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('vin.show', $vin->id) }}" class="btn btn-sm btn-outline-dark me-2">
                                    <i class="fas fa-eye"></i> Détails
                                </a>
                                @if($vin->quantite > 0)
                                <button class="btn btn-sm cart-btn text-white">
                                    <i class="fas fa-shopping-cart"></i> Ajouter
                                </button>
                                @else
                                <button class="btn btn-sm btn-secondary" disabled>
                                    <i class="fas fa-shopping-cart"></i> Indisponible
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">
                    <h4 class="text-center">Aucun vin n'est disponible pour le moment.</h4>
                    <p class="text-center">Veuillez revenir plus tard pour découvrir notre collection.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-5 d-flex justify-content-center">
            {{ $vins->links() }}
        </div>
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="footer-container">
                <div class="footer-row">
                    <div class="footer-section footer-brand">
                        <div class="footer-logo">La Cave du <span> Bourgeois</span></div>
                        <div class="footer-description">
                            <p>Fondée en 1985, La Cave du Bourgeois est devenue une référence incontournable pour les amateurs et collectionneurs de grands crus. Notre philosophie repose sur l'excellence, l'authenticité et le partage de notre passion pour l'art viticole.</p>
                            <p>Reconnue pour son expertise et sa sélection rigoureuse, notre maison offre des vins d'exception provenant des plus prestigieux terroirs du monde, dans un cadre alliant tradition et innovation.</p>
                        </div>
                    </div>
                    
                    <div class="footer-section">
                        <h3>Navigation</h3>
                        <ul class="footer-links">
                            <li><a href="#accueil">Accueil</a></li>
                            <li><a href="#collection">Notre Collection</a></li>
                            <li><a href="#apropos">Notre Histoire</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#events">Événements</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="">Conditions d'utilisation</a></li>
                            <li><a href=>Politique de confidentialité</a></li>
                            <li><a href="">Cookies</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-section">
                        <h3>Services</h3>
                        <ul class="footer-links">
                            <li><a href="#gestion-cave">Gestion de Cave</a></li>
                            <li><a href="#expertises">Expertises</a></li>
                            <li><a href="#degustations">Dégustations Privées</a></li>
                            <li><a href="#livraison">Livraison Premium</a></li>
                            <li><a href="#conseil">Conseil Personnalisé</a></li>
                            <li><a href="#conseil">Services d'achat et vente</a></li>
                            <li><a href="#conseil">Gestion d'événements</a></li>
                            <li><a href="#conseil">Formation et éducation œnologiaue</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-section footer-newsletter">
                        <div class="newsletter-content">
                            <h3 class="newsletter-title">La Lettre du Connaisseur</h3>
                            <p class="newsletter-subtitle">Recevez en exclusivité nos sélections, nos invitations aux dégustations privées et nos conseils d'experts pour sublimer votre expérience œnologique</p>
                            
                            <form class="newsletter-form" id="newsletterForm" action="" method="POST">
                                @csrf
                                <input type="email" name="email" placeholder="Votre adresse email" required>
                                <button type="submit">
                                    <i class="fas fa-wine-glass-alt"></i> S'abonner
                                </button>
                            </form>
                            
                            <div class="newsletter-options">
                                <div class="newsletter-option">
                                    <input type="checkbox" id="news_raretes" name="preferences[]" value="raretes">
                                    <label for="news_raretes">Raretés & Millésimes d'exception</label>
                                </div>
                                <div class="newsletter-option">
                                    <input type="checkbox" id="news_events" name="preferences[]" value="events">
                                    <label for="news_events">Événements & Dégustations</label>
                                </div>
                                <div class="newsletter-option">
                                    <input type="checkbox" id="news_tips" name="preferences[]" value="tips">
                                    <label for="news_tips">Conseils œnologiques</label>
                                </div>
                            </div>
                            
                            <p class="newsletter-note">En vous inscrivant, vous acceptez de recevoir nos communications par email. Vous pourrez vous désabonner à tout moment via le lien présent dans nos emails.</p>
                            
                            <div class="newsletter-status" id="newsletterStatus"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-container">
                <div class="footer-copyright">
                    &copy; 2025 La Cave du Bourgeois. Tous droits réservés.
                </div>
                
                <div class="footer-social">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                
                <div class="footer-payment">
                    <i class="fab fa-cc-visa payment-icon"></i>
                    <i class="fab fa-cc-mastercard payment-icon"></i>
                    <i class="fab fa-cc-amex payment-icon"></i>
                    <i class="fab fa-cc-paypal payment-icon"></i>
                </div>
            </div>
        </div>
        
        <div class="footer-decoration"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>