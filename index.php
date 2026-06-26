<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="WebImmo — Trouvez le bien immobilier de vos rêves. Achat, location et estimation avec des agents premium.">
  <title>WebImmo — L'immobilier d'exception</title>

  <!-- Google Fonts : Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Design System WebImmo -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/home.css" rel="stylesheet">
</head>
<body>

  <!-- ===================== NAVBAR (transparente sur le hero) ===================== -->
  <nav class="navbar navbar-expand-lg wi-navbar wi-navbar-transparent py-3">
    <div class="container">
      <a class="navbar-brand wi-brand d-flex align-items-center gap-2" href="index.html">
        <span class="brand-badge"><i class="bi bi-buildings"></i></span>
        Web<span>Immo</span>
      </a>
      <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Menu">
        <i class="bi bi-list fs-2"></i>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto gap-lg-1">
          <li class="nav-item"><a class="nav-link active" href="index.html">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="properties.html">Acheter</a></li>
          <li class="nav-item"><a class="nav-link" href="properties.html">Louer</a></li>
          <li class="nav-item"><a class="nav-link" href="dashboard-agent.html">Agents</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
        <div class="d-flex align-items-center gap-2">
          <a href="login.html" class="btn btn-outline-light-2">Connexion</a>
          <a href="register.html" class="btn btn-gold">S'inscrire</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ===================== HERO ===================== -->
  <header class="hero">
    <div class="container hero-content">
      <div class="row">
        <div class="col-lg-9">
          <span class="hero-badge wi-animate"><span class="hero-stars"><i class="bi bi-star-fill"></i></span> Noté 4,9/5 par plus de 12 000 clients</span>
          <h1 class="mt-4 wi-animate wi-delay-1">Trouvez le bien immobilier de vos rêves</h1>
          <p class="hero-sub mt-3 wi-animate wi-delay-2">
            Des milliers d'annonces vérifiées, des agents d'exception et un accompagnement
            sur-mesure pour acheter, vendre ou louer en toute confiance.
          </p>
          <div class="d-flex flex-wrap gap-3 mt-4 wi-animate wi-delay-3">
            <a href="properties.html" class="btn btn-gold btn-lg"><i class="bi bi-houses me-2"></i>Voir les biens</a>
            <a href="contact.html" class="btn btn-outline-light-2 btn-lg"><i class="bi bi-chat-dots me-2"></i>Nous contacter</a>
          </div>
        </div>
      </div>

      <!-- Barre de recherche -->
      <div class="row">
        <div class="col-lg-11">
          <form class="hero-search wi-animate wi-delay-4" action="properties.html" method="get">
            <div class="row g-2 align-items-center">
              <div class="col-12 col-md seg">
                <label class="small fw-semibold text-muted-2 ms-1">Localisation</label>
                <input type="text" name="ville" class="form-control border-0" placeholder="Paris, Lyon, Bordeaux…">
              </div>
              <div class="col-6 col-md seg">
                <label class="small fw-semibold text-muted-2 ms-1">Type</label>
                <select name="type" class="form-select border-0">
                  <option value="">Tous types</option>
                  <option>Appartement</option>
                  <option>Maison</option>
                  <option>Villa</option>
                  <option>Studio</option>
                </select>
              </div>
              <div class="col-6 col-md seg">
                <label class="small fw-semibold text-muted-2 ms-1">Budget max</label>
                <select name="budget" class="form-select border-0">
                  <option value="">Indifférent</option>
                  <option value="200000">200 000 €</option>
                  <option value="500000">500 000 €</option>
                  <option value="1000000">1 000 000 €</option>
                  <option value="3000000">3 000 000 €+</option>
                </select>
              </div>
              <div class="col-12 col-md-auto">
                <button type="submit" class="btn btn-primary btn-lg w-100 px-4"><i class="bi bi-search me-2"></i>Rechercher</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- ===================== BANDEAU CONFIANCE ===================== -->
  <section class="py-4 bg-white">
    <div class="container">
      <p class="text-center text-muted-2 small text-uppercase fw-semibold mb-3" style="letter-spacing:.12em">Ils nous font confiance</p>
      <div class="trust-strip d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-5">
        <span><i class="bi bi-bank me-1"></i>NotaireGroup</span>
        <span><i class="bi bi-gem me-1"></i>PrestigeBank</span>
        <span><i class="bi bi-shield-check me-1"></i>SafeImmo</span>
        <span><i class="bi bi-houses me-1"></i>HabitatPlus</span>
        <span><i class="bi bi-award me-1"></i>LuxEstate</span>
      </div>
    </div>
  </section>

  <!-- ===================== STATISTIQUES ===================== -->
  <section class="section-sm">
    <div class="container">
      <div class="row g-3 g-lg-4">
        <div class="col-6 col-lg-3">
          <div class="stat-card">
            <div class="stat-value">8 540<span class="text-accent">+</span></div>
            <div class="stat-label"><i class="bi bi-houses me-1 text-accent"></i>Biens disponibles</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card">
            <div class="stat-value">320<span class="text-accent">+</span></div>
            <div class="stat-label"><i class="bi bi-person-badge me-1 text-accent"></i>Agents experts</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card">
            <div class="stat-value">26 000<span class="text-accent">+</span></div>
            <div class="stat-label"><i class="bi bi-people me-1 text-accent"></i>Clients satisfaits</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card">
            <div class="stat-value">14 200<span class="text-accent">+</span></div>
            <div class="stat-label"><i class="bi bi-key me-1 text-accent"></i>Ventes réalisées</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== POURQUOI NOUS CHOISIR ===================== -->
  <section class="section bg-light-soft">
    <div class="container">
      <div class="section-head center mb-5">
        <span class="eyebrow">Notre engagement</span>
        <h2 class="section-title mt-2">Pourquoi choisir WebImmo&nbsp;?</h2>
        <p class="lead-2 mt-2">Une approche premium pensée pour vous offrir sérénité, performance et confiance à chaque étape de votre projet.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="feature-card">
            <span class="feature-icon"><i class="bi bi-shield-lock"></i></span>
            <h5>Sécurité</h5>
            <p class="text-muted-2 mb-0">Annonces vérifiées, transactions protégées et données chiffrées. Votre tranquillité est notre priorité absolue.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-card">
            <span class="feature-icon"><i class="bi bi-people"></i></span>
            <h5>Accompagnement</h5>
            <p class="text-muted-2 mb-0">Un conseiller dédié vous guide de la première visite à la signature, 7j/7, avec réactivité et exigence.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-card">
            <span class="feature-icon"><i class="bi bi-eye"></i></span>
            <h5>Transparence</h5>
            <p class="text-muted-2 mb-0">Prix justes, diagnostics complets et historique clair. Aucune mauvaise surprise, jamais de frais cachés.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature-card">
            <span class="feature-icon"><i class="bi bi-patch-check"></i></span>
            <h5>Expertise</h5>
            <p class="text-muted-2 mb-0">Des agents certifiés, une connaissance fine du marché et des estimations fiables au juste prix.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== BIENS À LA UNE ===================== -->
  <section class="section">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-end mb-5 gap-3">
        <div class="section-head">
          <span class="eyebrow">Sélection exclusive</span>
          <h2 class="section-title mt-2">Biens à la une</h2>
          <p class="lead-2 mt-2 mb-0">Notre sélection de propriétés d'exception, choisies par nos experts.</p>
        </div>
        <a href="properties.html" class="btn btn-soft">Tout voir <i class="bi bi-arrow-right ms-1"></i></a>
      </div>

      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Villa contemporaine">
              <div class="media-top">
                <span class="badge badge-pill badge-sale">À vendre</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">1 250 000 €</span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Villa contemporaine avec piscine</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Aix-en-Provence (13)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>240 m²</span>
                <span><i class="bi bi-door-open"></i>6 pièces</span>
                <span><i class="bi bi-house-door"></i>4 ch.</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=800&q=80" alt="Appartement haussmannien">
              <div class="media-top">
                <span class="badge badge-pill badge-new">Nouveau</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">890 000 €</span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Appartement haussmannien rénové</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Paris 8e (75)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>112 m²</span>
                <span><i class="bi bi-door-open"></i>4 pièces</span>
                <span><i class="bi bi-house-door"></i>3 ch.</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Maison moderne">
              <div class="media-top">
                <span class="badge badge-pill badge-rent">À louer</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">3 200 €<small class="fw-medium">/mois</small></span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Maison familiale avec jardin</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Bordeaux (33)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>165 m²</span>
                <span><i class="bi bi-door-open"></i>5 pièces</span>
                <span><i class="bi bi-house-door"></i>4 ch.</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Card 4 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=800&q=80" alt="Loft design">
              <div class="media-top">
                <span class="badge badge-pill badge-sale">À vendre</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">560 000 €</span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Loft industriel lumineux</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Lyon 2e (69)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>98 m²</span>
                <span><i class="bi bi-door-open"></i>3 pièces</span>
                <span><i class="bi bi-house-door"></i>2 ch.</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Card 5 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=800&q=80" alt="Villa bord de mer">
              <div class="media-top">
                <span class="badge badge-pill badge-gold">Prestige</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">3 950 000 €</span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Villa d'architecte vue mer</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Cannes (06)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>410 m²</span>
                <span><i class="bi bi-door-open"></i>8 pièces</span>
                <span><i class="bi bi-house-door"></i>5 ch.</span>
              </div>
            </div>
          </article>
        </div>
        <!-- Card 6 -->
        <div class="col-md-6 col-lg-4">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80" alt="Maison de ville">
              <div class="media-top">
                <span class="badge badge-pill badge-new">Nouveau</span>
                <button type="button" class="fav-btn" aria-label="Ajouter aux favoris"><i class="bi bi-heart"></i></button>
              </div>
              <span class="property-price-tag">445 000 €</span>
            </div>
            <div class="property-body">
              <h3 class="property-title"><a href="property-details.html">Maison de ville rénovée</a></h3>
              <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Nantes (44)</p>
              <div class="property-features">
                <span><i class="bi bi-arrows-fullscreen"></i>130 m²</span>
                <span><i class="bi bi-door-open"></i>5 pièces</span>
                <span><i class="bi bi-house-door"></i>3 ch.</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PROCESS ===================== -->
  <section class="section bg-light-soft">
    <div class="container">
      <div class="section-head center mb-5">
        <span class="eyebrow">Simple & rapide</span>
        <h2 class="section-title mt-2">Votre projet en 3 étapes</h2>
      </div>
      <div class="row g-4 g-lg-5">
        <div class="col-md-4">
          <div class="step-card">
            <span class="step-num">1</span>
            <h5>Recherchez</h5>
            <p class="text-muted-2 mb-0">Filtrez parmi des milliers d'annonces vérifiées selon vos critères et votre budget.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card">
            <span class="step-num">2</span>
            <h5>Visitez</h5>
            <p class="text-muted-2 mb-0">Planifiez vos visites en ligne et échangez directement avec l'agent dédié.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card">
            <span class="step-num">3</span>
            <h5>Concrétisez</h5>
            <p class="text-muted-2 mb-0">Bénéficiez d'un accompagnement complet jusqu'à la signature en toute sérénité.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== TÉMOIGNAGES ===================== -->
  <section class="section">
    <div class="container">
      <div class="section-head center mb-5">
        <span class="eyebrow">Avis clients</span>
        <h2 class="section-title mt-2">Ils ont trouvé chez WebImmo</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimonial-card">
            <div class="quote-mark">“</div>
            <div class="testimonial-stars mb-2">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">Un accompagnement remarquable du début à la fin. Nous avons trouvé notre maison en moins de trois semaines. Service haut de gamme&nbsp;!</p>
            <div class="d-flex align-items-center gap-3">
              <img class="avatar" width="48" height="48" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="Sophie L.">
              <div>
                <div class="fw-semibold">Sophie L.</div>
                <small class="text-muted-2">Acheteuse · Bordeaux</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <div class="quote-mark">“</div>
            <div class="testimonial-stars mb-2">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">Des agents à l'écoute et de vrais professionnels. La plateforme est claire, élégante et terriblement efficace. Je recommande&nbsp;!</p>
            <div class="d-flex align-items-center gap-3">
              <img class="avatar" width="48" height="48" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Karim B.">
              <div>
                <div class="fw-semibold">Karim B.</div>
                <small class="text-muted-2">Vendeur · Paris</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <div class="quote-mark">“</div>
            <div class="testimonial-stars mb-2">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
            </div>
            <p class="mb-4">Estimation juste, photos magnifiques, et une vente conclue rapidement au bon prix. Une équipe sérieuse et bienveillante.</p>
            <div class="d-flex align-items-center gap-3">
              <img class="avatar" width="48" height="48" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=100&q=80" alt="Marie D.">
              <div>
                <div class="fw-semibold">Marie D.</div>
                <small class="text-muted-2">Acheteuse · Lyon</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== CTA FINAL ===================== -->
  <section class="pb-5">
    <div class="container">
      <div class="cta-band p-4 p-lg-5">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <h2 class="text-white mb-2">Prêt à concrétiser votre projet immobilier&nbsp;?</h2>
            <p class="mb-0" style="color:rgba(255,255,255,.85)">Créez votre compte gratuitement et accédez à des annonces exclusives avant tout le monde.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="register.html" class="btn btn-gold btn-lg me-2">Créer un compte</a>
            <a href="properties.html" class="btn btn-outline-light-2 btn-lg mt-2 mt-sm-0">Explorer</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FOOTER ===================== -->
  <footer class="wi-footer pt-5 pb-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <a href="index.html" class="footer-brand text-decoration-none d-inline-flex align-items-center gap-2">
            <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span>
          </a>
          <p class="mt-3" style="max-width:320px">La plateforme immobilière premium qui réunit acheteurs, vendeurs et agents d'exception en toute confiance.</p>
          <div class="d-flex gap-2 mt-3">
            <a href="#" class="social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-btn" aria-label="X"><i class="bi bi-twitter-x"></i></a>
          </div>
        </div>
        <div class="col-6 col-lg-2">
          <h6 class="mb-3">Explorer</h6>
          <ul class="list-unstyled d-grid gap-2">
            <li><a class="footer-link" href="properties.html">Acheter</a></li>
            <li><a class="footer-link" href="properties.html">Louer</a></li>
            <li><a class="footer-link" href="add-property.html">Vendre</a></li>
            <li><a class="footer-link" href="properties.html">Estimer</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h6 class="mb-3">Société</h6>
          <ul class="list-unstyled d-grid gap-2">
            <li><a class="footer-link" href="#">À propos</a></li>
            <li><a class="footer-link" href="dashboard-agent.html">Nos agents</a></li>
            <li><a class="footer-link" href="contact.html">Contact</a></li>
            <li><a class="footer-link" href="#">Carrières</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h6 class="mb-3">Newsletter</h6>
          <p>Recevez les nouvelles annonces exclusives chaque semaine.</p>
          <form class="input-group" action="#" method="post">
            <input type="email" name="email" class="form-control" placeholder="Votre e-mail" required>
            <button class="btn btn-gold" type="submit"><i class="bi bi-send"></i></button>
          </form>
          <div class="d-flex gap-3 mt-3 small">
            <span><i class="bi bi-telephone me-1 text-gold"></i>01 23 45 67 89</span>
            <span><i class="bi bi-envelope me-1 text-gold"></i>contact@webimmo.fr</span>
          </div>
        </div>
      </div>
      <hr class="my-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small">
        <span>© 2026 WebImmo. Tous droits réservés.</span>
        <div class="d-flex gap-3">
          <a href="#">Mentions légales</a>
          <a href="#">Confidentialité</a>
          <a href="#">CGU</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap Bundle (navbar, dropdowns, modales — fourni par Bootstrap, aucun JS personnalisé) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
