<?php
session_start();
require_once "../functions/properties.php";


if (!isset($_GET['id_property'])) {
    die("Bien introuvable.");
}

$id = $_GET['id_property'];

$property = getPropertyById($id);
$photos = getImage($id);
$features = getFeature();
$statuts = getStatus();
$featureExist = getFeatureExist($id);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier un bien — WebImmo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<body class="dash">
  <div class="dash-layout">

    <!-- ===================== SIDEBAR ===================== -->
    <?php require_once "../partials/sidebar.php"; ?>
    <!-- ===================== MAIN ===================== -->
    <div class="dash-main">
      <header class="dash-topbar">
        <button class="btn btn-soft btn-icon d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-label="Menu"><i class="bi bi-list"></i></button>
        <nav aria-label="breadcrumb" class="flex-grow-1">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="../pages/dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../pages/properties.php">Annonces</a></li>
            <li class="breadcrumb-item active">Modifier</li>
          </ol>
        </nav>
        <a href="../pages/property_detail.php" class="btn btn-soft btn-sm"><i class="bi bi-eye me-1"></i>Aperçu</a>
      </header>

      <main class="dash-content">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <div>
            <h1 class="h3 mb-1">Modifier le bien</h1>
            <p class="text-muted-2 mb-0">Réf. <strong><?= $property['reference_code'] ?>   </strong> <?= $property['title_property'] ?></p>
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-soft text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash me-1"></i>Supprimer</button>
            <a href="../pages/property_by_user.php" class="btn btn-soft"><i class="bi bi-x-lg me-1"></i>Annuler</a>
          </div>
        </div>

        <div class="alert alert-warning d-flex align-items-center gap-2">
          <i class="bi bi-pencil-square"></i> Vous modifiez une annonce <strong class="mx-1">déjà en ligne</strong>. Les changements seront visibles immédiatement après enregistrement.
        </div>

        <form action="../traitements/traitement_edit_property.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $property['id_property'] ?>">
          <div class="row g-4">
            <div class="col-lg-8">
              <!-- Informations générales -->
              <div class="card p-4 mb-4">
                <h5 class="mb-3"><i class="bi bi-info-circle me-2 text-accent"></i>Informations générales</h5>
                <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label" for="titre">Titre de l'annonce</label>
                    <input type="text" id="titre" name="titre" class="form-control" value="<?= $property['title_property'] ?>">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="type">Type de bien</label>
                    <select id="type" name="type" class="form-select">
                    <option selected><?= $property['property_type'] ?></option>
                      <option>Appartement</option><option>Maison</option><option>Villa</option><option>Studio</option><option>Terrain</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="transaction">Transaction</label>
                    <select id="transaction" name="transaction" class="form-select">
                      <option selected><?= $property['transaction_type'] ?></option>
                      <option>Vente</option>
                      <option>Location</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="prix">Prix (€)</label>
                    <div class="input-group"><input type="number" id="prix" name="prix" class="form-control" value="<?= $property['price_property'] ?>"><span class="input-group-text">€</span></div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="ref">Référence</label>
                    <input type="text" id="ref" name="ref" class="form-control" value="<?= $property['reference_code'] ?>" disabled>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="desc">Description</label>
                    <textarea id="desc" name="description" rows="5" class="form-control"><?= $property['description_property'] ?></textarea>
                  </div>
                </div>
              </div>

              <!-- Caractéristiques -->
              <div class="card p-4 mb-4">
                <h5 class="mb-3"><i class="bi bi-rulers me-2 text-accent"></i>Caractéristiques</h5>
                <div class="row g-3">
                  <div class="col-6 col-md-3"><label class="form-label" for="surface">Surface (m²)</label><input type="number" id="surface" name="surface" class="form-control" value="<?= $property['surface'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="pieces">Pièces</label><input type="number" id="pieces" name="pieces" class="form-control" value="<?= $property['nbr_rooms'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="chambres">Chambres</label><input type="number" id="chambres" name="chambres" class="form-control" value="<?= $property['nbr_bedrooms'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="sdb">Salles de bain</label><input type="number" id="sdb" name="sdb" class="form-control" value="<?= $property['nbr_bathrooms'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="annee">Année</label><input type="number" id="annee" name="annee" class="form-control" value="<?= $property['construction_year'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="terrain">Terrain (m²)</label><input type="number" id="terrain" name="terrain" class="form-control" value="<?= $property['land_surface'] ?>"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="dpe">DPE</label><select id="dpe" name="dpe" class="form-select"><option>A</option><option selected>B</option><option>C</option><option>D</option></select></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="expo">Exposition</label><select id="expo" name="exposition" class="form-select"><option>Nord</option><option selected>Sud</option><option>Est</option><option>Ouest</option></select></div>
                </div>
                <hr class="divider my-4">
                <label class="form-label">Équipements</label>
                <div class="row"> 
                   <?php foreach($features as $feature): ?>

                      <div class="col-6 col-md-4">
                          <div class="form-check">
                            <input class="form-check-input"  type="checkbox" name="equip[]"  value="<?= $feature["id_feature_property"] ?>"  id="<?= $feature["id_feature_property"] ?>" <?= in_array($feature['id_feature_property'], $featureExist) ? 'checked' : '' ?>>

                            <label class="form-check-label" for="feature<?= $feature["id_feature_property"] ?>"> <?= $feature["name_feature_property"] ?> </label>
                          </div>
                      </div>

                      <?php endforeach; ?>
                </div>
              </div>

              <!-- Localisation -->
              <div class="card p-4 mb-4">
                <h5 class="mb-3"><i class="bi bi-geo-alt me-2 text-accent"></i>Localisation</h5>
                <div class="row g-3">
                  <div class="col-12"><label class="form-label" for="adresse">Adresse</label><input type="text" id="adresse" name="adresse" class="form-control" value="<?= $property['address_property'] ?>"></div>
                  <div class="col-md-4"><label class="form-label" for="cp">Code postal</label><input type="text" id="cp" name="code_postal" class="form-control" value="13100"></div>
                  <div class="col-md-8"><label class="form-label" for="ville">Ville</label><input type="text" id="ville" name="ville" class="form-control" value="<?= $property['city'] ?>"></div>
                </div>
              </div>

              <!-- Photos existantes -->
              <div class="card p-4">
                <h5 class="mb-3"><i class="bi bi-images me-2 text-accent"></i>Photos</h5>

                <div class="row g-2 mb-3">
                  <?php foreach($photos as $photo): ?>
                  <div class="col-4 col-md-3"><div class="thumb-preview"><img src="../assets/img/<?= $photo['filename_image'] ?>" alt=""><span class="badge badge-gold thumb-cover">Couverture</span><button type="button" class="thumb-remove" aria-label="Retirer"><i class="bi bi-x"></i></button></div></div>
                  <?php endforeach ?>
                </div>


          
                <label for="photos" class="upload-zone d-block">
                  <i class="bi bi-cloud-arrow-up upload-icon"></i>
                  <p class="fw-semibold mb-1 mt-2">Ajoutez vos photos ici ou cliquez pour parcourir</p>
                  <small class="text-muted-2">JPG, PNG — 10 Mo max par image.</small>
                  <input type="file" id="photos" name="photos[]" class="d-none" multiple accept="image/*">
                </label>
                <div id="preview" class="row mt-3 g-3"></div>
              </div>
            </div>

            <!-- Colonne latérale -->
            <div class="col-lg-4">
              <div class="card p-4 mb-4" style="position:sticky;top:90px">
                <h6 class="mb-3">Publication</h6>
                <div class="mb-3">
                  <label class="form-label" for="statut">Statut</label>
                  <select id="statut" name="statut" class="form-select">
                    <option value="<?= $property['property_status'] ?>" selected><?= $property['name_statut_property'] ?></option>

                  <?php foreach($statuts as $statut): ?>
                    <option value="<?= $statut['id_statut_property']; ?>"><?= $statut['name_statut_property']; ?></option>
                    <?php  endforeach; ?>
                  </select>
                </div>
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" id="une" checked><label class="form-check-label" for="une">Mise à la une</label></div>
                <div class="form-check form-switch mb-3"><input class="form-check-input" type="checkbox" id="urgent"><label class="form-check-label" for="urgent">Marquer « urgent »</label></div>
                <hr class="divider mb-3">
                <ul class="list-unstyled small d-grid gap-2 mb-3">
                  <li class="d-flex justify-content-between"><span class="text-muted-2">Vues</span><span class="fw-semibold">2 480</span></li>
                  <li class="d-flex justify-content-between"><span class="text-muted-2">Contacts</span><span class="fw-semibold">18</span></li>
                  <li class="d-flex justify-content-between"><span class="text-muted-2">Publié le</span><span class="fw-semibold"><?= $property['created_at_property'] ?></span></li>
                </ul>
                <button type="submit" name="modification" class="btn btn-primary w-100 mb-2"><i class="bi bi-check2-circle me-2"></i>Enregistrer les modifications</button>
                <a href="property_detail.php?id_property=<?= $property['id_property'] ?>" class="btn btn-soft w-100">Voir l'annonce</a>
              </div>
            </div>
          </div>
        </form>
      </main>
    </div>
  </div>

  <!-- Offcanvas sidebar (mobile) -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" style="background:var(--wi-navy)">
    <div class="offcanvas-header">
      <a href="index.html" class="wi-brand text-white text-decoration-none d-flex align-items-center gap-2"><span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span style="color:var(--wi-gold)">Immo</span></a>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="dash-nav mt-0">
        <a href="dashboard-agent.html" class="dash-link"><i class="bi bi-grid-1x2"></i> Tableau de bord</a>
        <a href="properties.html" class="dash-link active"><i class="bi bi-houses"></i> Mes annonces</a>
        <a href="add-property.html" class="dash-link"><i class="bi bi-plus-square"></i> Ajouter un bien</a>
        <a href="messages.html" class="dash-link"><i class="bi bi-chat-dots"></i> Messages</a>
        <a href="login.html" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
    </div>
  </div>

  <!-- Modale suppression -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-body text-center p-4">
          <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width:64px;height:64px;border-radius:16px;background:#fdecec;color:#ef4444;font-size:1.8rem"><i class="bi bi-exclamation-triangle"></i></div>
          <h5>Supprimer cette annonce&nbsp;?</h5>
          <p class="text-muted-2">Cette action est définitive. L'annonce ne sera plus visible par les acheteurs.</p>
          <div class="d-flex gap-2 justify-content-center">
            <button class="btn btn-soft" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-danger">Supprimer définitivement</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
const input = document.getElementById("photos");
const preview = document.getElementById("preview");

input.addEventListener("change", function () {

    console.log(this.files);
    console.log(this.files.length);

    preview.innerHTML = "";

    Array.from(this.files).forEach((file, index) => {

        if (!file.type.startsWith("image/")) return;

        const reader = new FileReader();

        reader.onload = function (e) {

            const col = document.createElement("div");
            col.className = "col-md-3";

            col.innerHTML = `
                <div class="thumb-preview position-relative">

                    <img
                        src="${e.target.result}"
                        class="img-fluid rounded"
                        style="height:180px;width:100%;object-fit:cover;">

                    ${index === 0 ? `
                        <span class="badge badge-gold thumb-cover">
                            Couverture
                        </span>
                    ` : ""}

                    <button type="button" class="thumb-remove">
                        <i class="bi bi-x"></i>
                    </button>

                </div>
            `;

            col.querySelector(".thumb-remove").addEventListener("click", function () {
                col.remove();
            });

            preview.appendChild(col);

        };

        reader.readAsDataURL(file);

    });

});
</script>


</body>
</html>
