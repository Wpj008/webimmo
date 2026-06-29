<?php
session_start();

require_once "../functions/properties.php";

$properties = getProperty();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Catalogue immobilier WebImmo — appartements, maisons et villas à vendre ou à louer.">
  <title>Annonces immobilières — WebImmo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/properties.css" rel="stylesheet">
</head>
<body class="bg-light-soft">

  <!-- ===================== NAVBAR ===================== -->

  <?php require_once "../partials/header.php"; ?>
  <!-- ===================== EN-TÊTE DE PAGE ===================== -->
  <section class="page-hero">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Annonces</li>
        </ol>
      </nav>
      <h1 class="mt-2">Trouvez votre futur bien</h1>
      <p class="mb-0" style="color:rgba(255,255,255,.82)">8 540 annonces vérifiées disponibles partout en France.</p>
    </div>
  </section>

  <div class="container pb-5">
    <!-- Barre de recherche -->
    <form class="search-panel" action="properties.html" method="get">
      <div class="row g-2 align-items-end">
        <div class="col-12 col-md-3">
          <label class="form-label small">Localisation</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
            <input type="text" name="ville" class="form-control" placeholder="Ville, code postal…">
          </div>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label small">Type de bien</label>
          <select name="type" class="form-select">
            <option value="">Tous</option>
            <option>Appartement</option><option>Maison</option><option>Villa</option><option>Studio</option>
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label small">Transaction</label>
          <select name="transaction" class="form-select">
            <option value="">Toutes</option><option>Vente</option><option>Location</option>
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label small">Prix max</label>
          <select name="budget" class="form-select">
            <option value="">Indifférent</option>
            <option>200 000 €</option><option>500 000 €</option><option>1 000 000 €</option><option>3 000 000 €+</option>
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label small">Pièces</label>
          <select name="pieces" class="form-select">
            <option value="">Toutes</option><option>1+</option><option>2+</option><option>3+</option><option>4+</option><option>5+</option>
          </select>
        </div>
        <div class="col-12 col-md-1">
          <button class="btn btn-primary w-100" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </form>

    <div class="row g-4 mt-1">
      <!-- ===================== FILTRES ===================== -->
      <aside class="col-lg-3">
        <div class="card filter-card p-3 p-lg-4">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-sliders me-2 text-accent"></i>Filtres</h5>
            <a href="properties.html" class="small text-muted-2 text-decoration-none">Réinitialiser</a>
          </div>

          <div class="filter-group">
            <label class="form-label">Transaction</label>
            <div class="d-flex gap-2 flex-wrap">
              <input type="radio" class="btn-check" name="t" id="t-all" checked>
              <label class="filter-chip" for="t-all">Tout</label>
              <input type="radio" class="btn-check" name="t" id="t-buy">
              <label class="filter-chip" for="t-buy">Acheter</label>
              <input type="radio" class="btn-check" name="t" id="t-rent">
              <label class="filter-chip" for="t-rent">Louer</label>
            </div>
          </div>

          <div class="filter-group">
            <label class="form-label">Type de bien</label>
            <div class="d-grid gap-2">
              <div class="form-check"><input class="form-check-input" type="checkbox" id="ty1"><label class="form-check-label" for="ty1">Appartement</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="ty2"><label class="form-check-label" for="ty2">Maison</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="ty3"><label class="form-check-label" for="ty3">Villa</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="ty4"><label class="form-check-label" for="ty4">Studio</label></div>
            </div>
          </div>

          <div class="filter-group">
            <label class="form-label d-flex justify-content-between">Budget <span class="text-accent fw-semibold">≤ 1 000 000 €</span></label>
            <input type="range" class="form-range" min="50000" max="5000000" step="50000" value="1000000">
            <div class="d-flex gap-2 mt-2">
              <input type="number" class="form-control form-control-sm" placeholder="Min €">
              <input type="number" class="form-control form-control-sm" placeholder="Max €">
            </div>
          </div>

          <div class="filter-group">
            <label class="form-label">Pièces</label>
            <div class="d-flex gap-2 flex-wrap">
              <input type="checkbox" class="btn-check" id="p1"><label class="filter-chip" for="p1">1</label>
              <input type="checkbox" class="btn-check" id="p2"><label class="filter-chip" for="p2">2</label>
              <input type="checkbox" class="btn-check" id="p3"><label class="filter-chip" for="p3">3</label>
              <input type="checkbox" class="btn-check" id="p4"><label class="filter-chip" for="p4">4</label>
              <input type="checkbox" class="btn-check" id="p5"><label class="filter-chip" for="p5">5+</label>
            </div>
          </div>

          <div class="filter-group">
            <label class="form-label">Équipements</label>
            <div class="d-grid gap-2">
              <div class="form-check"><input class="form-check-input" type="checkbox" id="e1"><label class="form-check-label" for="e1">Balcon / Terrasse</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="e2"><label class="form-check-label" for="e2">Parking</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="e3"><label class="form-check-label" for="e3">Piscine</label></div>
              <div class="form-check"><input class="form-check-input" type="checkbox" id="e4"><label class="form-check-label" for="e4">Ascenseur</label></div>
            </div>
          </div>

          <button class="btn btn-primary w-100 mt-4"><i class="bi bi-funnel me-2"></i>Appliquer</button>
        </div>
      </aside>

      <!-- ===================== RÉSULTATS ===================== -->
      <div class="col-lg-9">
        <div class="results-bar mb-4">
          <p class="mb-0 text-muted-2"><strong class="text-dark">8 540</strong> biens trouvés</p>
          <div class="d-flex align-items-center gap-2">
            <select class="form-select form-select-sm" style="width:auto" aria-label="Trier">
              <option>Trier : Pertinence</option>
              <option>Prix croissant</option>
              <option>Prix décroissant</option>
              <option>Plus récents</option>
              <option>Surface</option>
            </select>
            <div class="btn-group view-toggle" role="group" aria-label="Affichage">
              <button class="btn btn-outline-primary active" aria-label="Grille"><i class="bi bi-grid-3x3-gap"></i></button>
              <button class="btn btn-outline-primary" aria-label="Liste"><i class="bi bi-list-ul"></i></button>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <!-- 9 cartes -->
              <?php foreach($properties as $property): ?>


              <div class="col-sm-6 col-xl-4">
                <article class="property-card">
                    <div class="property-media"><img src="../assets/img/<?= $property['filename_image']; ?>" alt="Villa">
                    <div class="media-top"><span class="badge badge-pill badge-sale"><?= $property['transaction_type'] ?></span><button class="fav-btn" aria-label="Favori"><i class="bi bi-heart"></i></button></div>
                    <span class="property-price-tag"><?= $property['price_property'] ?> €</span></div>
                    <div class="property-body"><h3 class="property-title"><a href="property_detail.php?id_property=<?= $property['id_property'] ?>"><?= $property['title_property'] ?></a></h3>
                    <p class="property-location mb-0"><i class="bi bi-geo-alt"></i> <?= $property['city'] ?></p>
                    <div class="property-features"><span><i class="bi bi-arrows-fullscreen"></i><?= $property['surface'] ?> m²</span><span><i class="bi bi-door-open"></i><?= $property['nbr_rooms'] ?> pièces</span><span><i class="bi bi-house-door"></i><?= $property['nbr_bedrooms'] ?> ch.</span></div></div>
                        <div class="property-actions mt-3 px-3 pb-3">
                            <a href="edit_property.php?id_property=<?= $property['id_property'] ?>" class="btn btn-soft btn-sm w-100">
                                <i class="bi bi-pencil-square"></i>
                                Modifier
                            </a>
                        </div>
                </article>
             </div>



              <?php endforeach ?>      

      
        </div>

        <!-- Pagination -->
        <nav class="mt-5" aria-label="Pagination des annonces">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">…</a></li>
            <li class="page-item"><a class="page-link" href="#">28</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- ===================== FOOTER ===================== -->
     <?php require_once "../partials/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
