<?php
session_start();
require_once "../functions/properties.php";


if (!isset($_GET['id_property'])) {
    die("Bien introuvable.");
}

$id = $_GET['id_property'];

$property = getPropertyById($id);


?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Villa contemporaine avec piscine à Aix-en-Provence — 240 m², 6 pièces. Détail de l'annonce WebImmo.">
  <title><?= $property['title_property'] ?> — WebImmo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/property-details.css" rel="stylesheet">
</head>
<body class="bg-light-soft">

  <!-- ===================== NAVBAR ===================== -->

  <?php require_once "../partials/header.php"; ?>


  <div class="container detail-top">
    <!-- Fil d'ariane + titre -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
        <li class="breadcrumb-item"><a href="../pages/properties.php">Annonces</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $property['title_property'] ?></li>
      </ol>
    </nav>

    <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-3">
      <div>
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="badge badge-pill badge-sale">À vendre</span>
          <span class="badge badge-pill badge-gold">Coup de cœur</span>
        </div>
        <h1 class="h2 mb-1"><?= $property['title_property'] ?></h1>
        <p class="text-muted-2 mb-0"><i class="bi bi-geo-alt-fill text-accent"></i><?= $property['address_property'] ?></p>
      </div>
      <div class="text-lg-end">
        <div class="detail-price"><?= $property['price_property'] ?> €</div>
        <small class="text-muted-2">soit <?= (int) $result = $property['price_property']/ $property['surface'] ?> €/m²</small>
        <div class="d-flex gap-2 mt-2">
          <button class="btn btn-soft btn-icon" aria-label="Partager"><i class="bi bi-share"></i></button>
          <button class="btn btn-soft btn-icon" aria-label="Favori"><i class="bi bi-heart"></i></button>
          <button class="btn btn-navy"><i class="bi bi-printer me-2"></i>Imprimer</button>
        </div>
      </div>
    </div>

    <!-- ===================== GALERIE ===================== -->
    <div class="gallery-grid mb-4">
      <div class="g-item g-main"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=80" alt="Façade de la villa"></div>
      <div class="g-item"><img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=600&q=80" alt="Salon"></div>
      <div class="g-item"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=600&q=80" alt="Chambre"></div>
      <div class="g-item"><img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80" alt="Cuisine"></div>
      <div class="g-item">
        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?auto=format&fit=crop&w=600&q=80" alt="Piscine">
        <button class="gallery-more border-0" data-bs-toggle="modal" data-bs-target="#galleryModal">
          <i class="bi bi-images"></i> +18 photos
        </button>
      </div>
    </div>

    <div class="row g-4">
      <!-- ===================== COLONNE PRINCIPALE ===================== -->
      <div class="col-lg-8">
        <!-- Caractéristiques clés -->
        <div class="row g-3 mb-4">
          <div class="col-6 col-md-3"><div class="spec-item"><span class="icon-ring"><i class="bi bi-arrows-fullscreen"></i></span><div><div class="spec-label">Surface</div><div class="spec-value"><?= $property['surface'] ?> m²</div></div></div></div>
          <div class="col-6 col-md-3"><div class="spec-item"><span class="icon-ring"><i class="bi bi-door-open"></i></span><div><div class="spec-label">Pièces</div><div class="spec-value"><?= $property['nbr_rooms'] ?> pièces</div></div></div></div>
          <div class="col-6 col-md-3"><div class="spec-item"><span class="icon-ring"><i class="bi bi-house-door"></i></span><div><div class="spec-label">Chambres</div><div class="spec-value"><?= $property['nbr_bedrooms'] ?> ch.</div></div></div></div>
          <div class="col-6 col-md-3"><div class="spec-item"><span class="icon-ring"><i class="bi bi-droplet"></i></span><div><div class="spec-label">Salles d'eau</div><div class="spec-value"><?= $property['nbr_bathrooms'] ?></div></div></div></div>
        </div>

        <!-- Description -->
        <div class="card p-4 p-lg-4 mb-4">
          <h4 class="mb-3">Description</h4>
          <p class="text-muted-2"><?= $property['description_property'] ?></p>
         
        </div>

        <!-- Informations détaillées -->
        <div class="card p-4 mb-4">
          <h4 class="mb-3">Informations</h4>
          <div class="row">
            <div class="col-md-6">
              <ul class="list-unstyled d-grid gap-2 mb-0">
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Type de bien</span><span class="fw-semibold"><?= $property['property_type'] ?></span></li>
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Année</span><span class="fw-semibold"><?= $property['construction_year'] ?></span></li>
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Surface terrain</span><span class="fw-semibold"><?= $property['land_surface'] ?> m²</span></li>
                <li class="d-flex justify-content-between"><span class="text-muted-2">Étages</span><span class="fw-semibold"><?= $property['floor_number'] ?></span></li>
              </ul>
            </div>
            <div class="col-md-6 mt-2 mt-md-0">
              <ul class="list-unstyled d-grid gap-2 mb-0">
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Chauffage</span><span class="fw-semibold">Pompe à chaleur</span></li>
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Stationnement</span><span class="fw-semibold">Garage 2 places</span></li>
                <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Exposition</span><span class="fw-semibold">Sud</span></li>
                <li class="d-flex justify-content-between"><span class="text-muted-2">Réf. annonce</span><span class="fw-semibold"><?= $property['reference_code'] ?></span></li>
              </ul>
            </div>
          </div>

          <h6 class="mt-4 mb-2">Diagnostic de performance énergétique</h6>
          <div class="d-flex align-items-center gap-2">
            <span class="badge badge-pill" style="background:#16a34a;color:#fff">DPE&nbsp;: B</span>
            <span class="badge badge-pill" style="background:#84cc16;color:#0F172A">GES&nbsp;: B</span>
          </div>
        </div>

        <!-- Équipements -->
        <div class="card p-4 mb-4">
          <h4 class="mb-3">Équipements & atouts</h4>
          <div class="row">
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Piscine chauffée</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Terrasse plein sud</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Cuisine équipée</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Climatisation</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Garage double</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Alarme & vidéo</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Jardin paysager</div></div>
            <div class="col-sm-6"><div class="amenity"><i class="bi bi-check-circle-fill"></i>Domotique</div></div>
          </div>
        </div>

        <!-- Localisation -->
        <div class="card p-4">
          <h4 class="mb-3">Localisation</h4>
          <div class="map-placeholder">
            <span class="map-pin-pulse"></span>
            <i class="bi bi-geo-alt-fill map-pin"></i>
          </div>
          <p class="text-muted-2 small mt-3 mb-0"><i class="bi bi-info-circle me-1"></i>L'adresse exacte est communiquée sur demande lors de la prise de contact.</p>
        </div>
      </div>

      <!-- ===================== COLONNE AGENT ===================== -->
      <div class="col-lg-4">
        <div class="agent-card">
          <div class="card border-0 shadow-soft overflow-hidden mb-3">
            <div class="agent-banner">
              <img class="avatar mb-2" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=160&q=80" alt="Thomas Renard">
              <h5 class="text-white mb-0">Thomas Renard</h5>
              <small style="color:rgba(255,255,255,.8)">Conseiller WebImmo · Aix</small>
              <div class="testimonial-stars mt-1 text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <small>(128)</small></div>
            </div>
            <div class="card-body p-4">
              <form action="contact.html" method="post">
                <h6 class="mb-3">Contacter l'agent</h6>
                <div class="mb-2">
                  <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
                </div>
                <div class="mb-2">
                  <input type="email" name="email" class="form-control" placeholder="Votre e-mail" required>
                </div>
                <div class="mb-2">
                  <input type="tel" name="telephone" class="form-control" placeholder="Votre téléphone">
                </div>
                <div class="mb-3">
                  <textarea name="message" rows="3" class="form-control" placeholder="Bonjour, je suis intéressé(e) par cette villa (réf. WI-13042)…"></textarea>
                </div>
                <button class="btn btn-primary w-100 mb-2" type="submit"><i class="bi bi-send me-2"></i>Envoyer le message</button>
                <a href="tel:+33123456789" class="btn btn-navy w-100 mb-2"><i class="bi bi-telephone me-2"></i>06 12 34 56 78</a>
                <a href="messages.html" class="btn btn-soft w-100"><i class="bi bi-calendar-check me-2"></i>Demander une visite</a>
              </form>
            </div>
          </div>
          <div class="alert alert-primary d-flex gap-2 align-items-start">
            <i class="bi bi-shield-check fs-5"></i>
            <small class="mb-0">Annonce vérifiée par WebImmo. Ne réglez jamais d'acompte avant la visite.</small>
          </div>
        </div>
      </div>
    </div>

    <!-- ===================== BIENS SIMILAIRES ===================== -->
    <section class="section">
      <div class="d-flex justify-content-between align-items-end mb-4">
        <div><span class="eyebrow">À découvrir</span><h2 class="section-title mt-2 mb-0">Biens similaires</h2></div>
        <a href="../pages/properties.php" class="btn btn-soft d-none d-sm-inline-flex">Voir plus <i class="bi bi-arrow-right ms-1"></i></a>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4"><article class="property-card">
          <div class="property-media"><img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=800&q=80" alt="Villa">
            <div class="media-top"><span class="badge badge-pill badge-sale">À vendre</span><button class="fav-btn" aria-label="Favori"><i class="bi bi-heart"></i></button></div>
            <span class="property-price-tag">980 000 €</span></div>
          <div class="property-body"><h3 class="property-title"><a href="property-details.html">Villa avec jardin paysager</a></h3>
            <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Aix-en-Provence (13)</p>
            <div class="property-features"><span><i class="bi bi-arrows-fullscreen"></i>210 m²</span><span><i class="bi bi-door-open"></i>5 p.</span><span><i class="bi bi-house-door"></i>4 ch.</span></div></div>
        </article></div>
        <div class="col-md-6 col-lg-4"><article class="property-card">
          <div class="property-media"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Maison">
            <div class="media-top"><span class="badge badge-pill badge-new">Nouveau</span><button class="fav-btn" aria-label="Favori"><i class="bi bi-heart"></i></button></div>
            <span class="property-price-tag">1 150 000 €</span></div>
          <div class="property-body"><h3 class="property-title"><a href="property-details.html">Maison d'architecte</a></h3>
            <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Marseille (13)</p>
            <div class="property-features"><span><i class="bi bi-arrows-fullscreen"></i>225 m²</span><span><i class="bi bi-door-open"></i>6 p.</span><span><i class="bi bi-house-door"></i>4 ch.</span></div></div>
        </article></div>
        <div class="col-md-6 col-lg-4"><article class="property-card">
          <div class="property-media"><img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=80" alt="Maison moderne">
            <div class="media-top"><span class="badge badge-pill badge-gold">Prestige</span><button class="fav-btn" aria-label="Favori"><i class="bi bi-heart"></i></button></div>
            <span class="property-price-tag">1 380 000 €</span></div>
          <div class="property-body"><h3 class="property-title"><a href="property-details.html">Propriété contemporaine</a></h3>
            <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> Aix-en-Provence (13)</p>
            <div class="property-features"><span><i class="bi bi-arrows-fullscreen"></i>260 m²</span><span><i class="bi bi-door-open"></i>7 p.</span><span><i class="bi bi-house-door"></i>5 ch.</span></div></div>
        </article></div>
      </div>
    </section>
  </div>

  <!-- ===================== MODALE GALERIE ===================== -->
  <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-header border-0">
          <h5 class="modal-title">Galerie photos — Villa contemporaine</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
          <div class="row g-2">
            <div class="col-12"><img class="w-100 rounded-3" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Façade"></div>
            <div class="col-6"><img class="w-100 rounded-3" src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=800&q=80" alt="Salon"></div>
            <div class="col-6"><img class="w-100 rounded-3" src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80" alt="Chambre"></div>
            <div class="col-6"><img class="w-100 rounded-3" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80" alt="Cuisine"></div>
            <div class="col-6"><img class="w-100 rounded-3" src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?auto=format&fit=crop&w=800&q=80" alt="Piscine"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== FOOTER ===================== -->
  <?php require_once "../partials/footer.php"; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
