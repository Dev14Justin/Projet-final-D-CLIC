<!-- Page de détails d'un vin (show.blade.php) -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $vin->nom }} | Cave à Vin</title>
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .wine-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .wine-image img {
            width: 100%;
            height: auto;
        }
        .wine-details {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .wine-price {
            font-size: 2rem;
            color: #6a1b9a;
            font-weight: bold;
        }
        .quantity-selector {
            width: 150px;
            margin-right: 15px;
        }
        .buy-btn {
            background-color: #6a1b9a;
            border: none;
            padding: 10px 25px;
            transition: all 0.3s;
        }
        .buy-btn:hover {
            background-color: #4a148c;
            transform: scale(1.05);
        }
        .wine-description {
            margin-top: 20px;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .stock-info {
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
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
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('collection.index') }}">Collection</a>
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

    <!-- Breadcrumb -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('collection.index') }}">Collection</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $vin->nom }}</li>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="wine-image">
                    <img src="{{ asset('storage/' . $vin->image) }}" alt="{{ $vin->nom }}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wine-details">
                    <h1 class="mb-4">{{ $vin->nom }}</h1>
                    
                    @if($vin->quantite > 0)
                        <span class="stock-info bg-success text-white">
                            <i class="fas fa-check-circle"></i> En stock ({{ $vin->quantite }} disponibles)
                        </span>
                    @else
                        <span class="stock-info bg-danger text-white">
                            <i class="fas fa-times-circle"></i> Rupture de stock
                        </span>
                    @endif
                    
                    <div class="wine-price mb-4">{{ number_format($vin->prix, 2) }} FCFA</div>
                    
                    <div class="wine-description mb-4">
                        {{ $vin->description }}
                    </div>
                    
                    @if($vin->quantite > 0)
                    <form action="#" method="POST" class="d-flex flex-wrap align-items-center">
                        @csrf
                        <div class="input-group quantity-selector mb-3 mb-md-0">
                            <button class="btn btn-outline-dark" type="button" id="minus-btn">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" class="form-control text-center" value="1" min="1" max="{{ $vin->quantite }}" name="quantity">
                            <button class="btn btn-outline-dark" type="button" id="plus-btn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <button type="submit" class="btn buy-btn text-white">
                            <i class="fas fa-shopping-cart me-2"></i> Ajouter au panier
                        </button>
                    </form>
                    @else
                    <button class="btn btn-secondary" disabled>
                        <i class="fas fa-shopping-cart me-2"></i> Indisponible
                    </button>
                    @endif
                    
                    <hr class="my-4">
                    
                    <div class="d-flex">
                        <a href="#" class="me-3 text-decoration-none text-dark">
                            <i class="fas fa-share-alt"></i> Partager
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                            <i class="far fa-heart"></i> Ajouter aux favoris
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

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
    <script>
        // Gestion des boutons plus/moins pour la quantité
        document.addEventListener('DOMContentLoaded', function() {
            const minusBtn = document.getElementById('minus-btn');
            const plusBtn = document.getElementById('plus-btn');
            const quantityInput = document.querySelector('input[name="quantity"]');
            const maxQuantity = {{ $vin->quantite }};
            
            minusBtn.addEventListener('click', function() {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });
            
            plusBtn.addEventListener('click', function() {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue < maxQuantity) {
                    quantityInput.value = currentValue + 1;
                }
            });
        });
    </script>
</body>
</html>