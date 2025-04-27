<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Cave du Bourgeois - Gestion de Cave à Vin</title>
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="hederContainer">
        <header>
            <div class="header-container">
                <div class="logo">La Cave du <span>Bourgeois</span></div>
                <nav>
                    <ul>
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="{{ route('collection.index') }}">Notre Collection</a></li>
                        <li><a href="#apropos">À Propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#connexion">Connexion</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hero" id="accueil">
            <h1>Bienvenue à La Cave du Bourgeois</h1>
            <p>Découvrez l'excellence des vins dans notre sélection premium soigneusement choisie pour les connaisseurs
                et amateurs de grands crus.</p>
            <a href="#collection" class="btn">Explorer Notre Collection</a>
        </section>
    </section>

    <section class="features">
        <h2 class="section-title">Pourquoi Nous Choisir</h2>
        <div class="features-container">
            <div class="feature">
                <i class="fas fa-wine-bottle"></i>
                <h3>Sélection Premium</h3>
                <p>Des vins d'exception sélectionnés par nos experts sommeliers pour garantir une qualité
                    exceptionnelle.</p>
            </div>
            <div class="feature">
                <i class="fas fa-cloud"></i>
                <h3>Gestion de Cave</h3>
                <p>Notre plateforme vous permet de gérer votre collection de vins avec précision et simplicité.</p>
            </div>
            <div class="feature">
                <i class="fas fa-shipping-fast"></i>
                <h3>Livraison Soignée</h3>
                <p>Nous assurons une livraison dans des conditions optimales pour préserver toutes les qualités de vos
                    vins.</p>
            </div>
        </div>
    </section>

    <section class="collection" id="collection">
        <h2 class="section-title" style="color: white;">Notre Collection</h2>
        <div class="collection-container">
            <div class="wine-card">
                <div class="wine-img">
                    <img src="{{ asset('asset/image/ima2.jpg') }}" alt="" height="300px" width="300px"
                        background-size= "cover">
                </div>
                <div class="wine-info">

                    <h3>Château Margaux 2015</h3>
                    <p>Bordeaux, France</p>
                    <p>Un grand cru classé aux notes délicates de fruits noirs et d'épices.</p>
                    <h2 class="wine-price">20.000FCFA</h2><br>
                    <a href="" class="commende">Commender</a><br><br>
                    <a href="{{ route('collection.index') }}">Voir la collection</a>
                </div>
            </div>
            <div class="wine-card">
                <div class="wine-img">
                    <img src="{{ asset('asset/image/ima3.jpg') }}" alt="" height="300px" width="300px"
                        background-size= "cover" />
                </div>
                <div class="wine-info">
                    <h3>Romanée-Conti 2018</h3>
                    <p>Bourgogne, France</p>
                    <p>L'excellence de la Bourgogne, puissant et élégant à la fois.</p>
                    <h2 class="wine-price">20.000FCFA</h2><br>
                    <a href="" class="commende">Commender</a><br><br>
                    <a href="{{ route('collection.index') }}">Voir la collection</a>
                </div>
            </div>
            <div class="wine-card">
                <div class="wine-img">
                    <img src="{{ asset('asset/image/ima4.jpg') }}" alt="" height="300px" width="300px"
                        background-size= "cover" />
                </div>
                <div class="wine-info">
                    <h3>Barolo Riserva 2016</h3>
                    <p>Piémont, Italie</p>
                    <p>Intense et structuré, avec des tanins nobles et une longue finale.</p>
                    <h2 class="wine-price">20.000FCFA</h2><br>
                    <a href="" class="commende">Commender</a><br><br>
                    <a href="{{ route('collection.index') }}">Voir la collection</a>
                </div>
            </div>
            <div class="wine-card">
                <div class="wine-img">
                    <img src="{{ asset('asset/image/ima5.jpg') }}" alt="" height="300px" width="300px"
                        background-size= "cover" />
                </div>
                <div class="wine-info">
                    <h3>Dom Pérignon 2012</h3>
                    <p>Champagne, France</p>
                    <p>Finesse et élégance, un champagne d'exception pour les grandes occasions.</p>
                    <h2 class="wine-price">20.000FCFA</h2><br>
                    <a href="" class="commende">Commender</a><br><br>
                    <a href="{{ route('collection.index') }}">Voir la collection</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="apropos">
        <div class="about-container">
            <div class="about-img">
                <img src="{{ asset('asset/image/ima6.jpg') }}" alt="La Cave du Bourgeois" />
            </div>
            <div class="about-text">
                <h2>Notre Histoire</h2>
                <p>Fondée en 1985 par Jean-Pierre Bourgeois, La Cave du Bourgeois est née d'une passion pour
                    l'excellence viticole et d'un désir de partager cette passion avec les amateurs de grands vins.</p>
                <p>Aujourd'hui, notre cave propose une sélection rigoureuse de plus de 1200 références issues des plus
                    grands vignobles du monde. Notre équipe d'experts sommeliers parcourt le globe à la recherche des
                    meilleurs crus pour vous offrir une expérience gustative inégalée.</p>
                <p>Notre plateforme de gestion de cave à vin vous permet de gérer votre collection personnelle, de
                    suivre la maturité de vos bouteilles et de découvrir des recommandations personnalisées selon vos
                    préférences.</p>

                    <a href="">Voir plus</a>ddd
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2 class="section-title">Ce Que Disent Nos Clients</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <img src="{{ asset('asset/image/per3.jpeg') }}" alt="" height="100px" width="100px">
                <p>"La Cave du Bourgeois a transformé ma façon de gérer ma collection de vins. L'interface est intuitive
                    et les recommandations sont toujours parfaites."</p>
                <div class="testimonial-author">- Michel D., Collectionneur</div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('asset/image/per1.png') }}" alt="" height="100px" width="100px">
                <p>"En tant que restaurateur, j'apprécie la qualité exceptionnelle de leur sélection et la fiabilité de
                    leur service. Un partenaire indispensable."</p>
                <div class="testimonial-author">- Sophie M., Chef Sommelier</div>
            </div>
            <div class="testimonial">
                <img src="{{ asset('asset/image/per2.jpeg') }}" alt="" height="100px" width="100px">
                <p>"Grâce à leur plateforme, je peux suivre l'évolution de ma cave et partager mes découvertes avec
                    d'autres passionnés. Une communauté incroyable!"</p>
                <div class="testimonial-author">- Pierre L., Œnologue</div>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contactez-nous</h2>
                <p>Vous avez des questions sur nos vins, nos services ou vous souhaitez simplement en savoir plus sur
                    notre plateforme de gestion de cave à vin ? N'hésitez pas à nous contacter.</p>

                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Notre Adresse</h3>
                        <p>15 Rue des Grands Crus<br>75008 Paris, France</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h3>Téléphone</h3>
                        <p>+33 1 42 68 75 00</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>contact@cavedubourgois.fr</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h3>Horaires d'Ouverture</h3>
                        <p>Lundi - Vendredi: 10h - 19h<br>
                            Samedi: 10h - 20h<br>
                            Dimanche: Fermé</p>
                    </div>
                </div>

                
            </div>

            <div class="contact-form">
                <h2>Envoyez-nous un Message</h2>
                <form id="contactForm" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom Complet *</label>
                        <input type="text" id="name" name="name" required>
                        <div class="error" id="nameError"></div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                        <div class="error" id="emailError"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet *</label>
                        <select id="subject" name="subject" required>
                            <option value="">-- Sélectionnez un sujet --</option>
                            <option value="information">Demande d'information</option>
                            <option value="reservation">Réservation de dégustation</option>
                            <option value="commande">Question sur une commande</option>
                            <option value="plateforme">Support technique plateforme</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div class="error" id="subjectError"></div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                        <div class="error" id="messageError"></div>
                    </div>

                    <button type="submit" class="btn-submit">Envoyer</button>

                    <div class="form-status" id="formStatus"></div>
                </form>
            </div>
        </div>

        <div class="map-container">
            <!-- Dans un environnement Laravel réel, vous intégreriez ici une carte Google Maps ou OpenStreetMap -->
            <h2>Notre emplacement</h2><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d294.8133133981983!2d1.2020114494612106!3d6.194997681543719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159d22ac54d11%3A0xd128312301cab30f!2sLa%20Cave%20du%20Bourgeois!5e0!3m2!1sfr!2stg!4v1744965506759!5m2!1sfr!2stg" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

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

    <script>
        // Script pour le défilement fluide
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Script pour l'animation du header au défilement
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(30, 30, 30, 0.98)';
                header.style.padding = '0.8rem';
            } else {
                header.style.backgroundColor = 'rgba(30, 30, 30, 0.95)';
                header.style.padding = '1rem';
            }
        });
    </script>
</body>

</html>
