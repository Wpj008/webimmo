<?php
session_start();
require_once "../functions/properties.php";

$features = getFeature();
$statuts = getStatus();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un bien — WebImmo</title>
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
            <li class="breadcrumb-item"><a href="dashboard-agent.html">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="properties.html">Annonces</a></li>
            <li class="breadcrumb-item active">Ajouter un bien</li>
          </ol>
        </nav>
        <div class="d-flex align-items-center gap-2">
          <img class="avatar" width="38" height="38" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=80&q=80" alt="Agent">
        </div>
      </header>

      <main class="dash-content">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
          <div>
            <h1 class="h3 mb-1">Ajouter un bien</h1>
            <p class="text-muted-2 mb-0">Publiez une nouvelle annonce en quelques étapes.</p>
          </div>
          <a href="../pages/dashboard.php" class="btn btn-soft"><i class="bi bi-x-lg me-1"></i>Annuler</a>
        </div>

        <!-- Étapes -->
         <div class="form-steps mb-4">
            <a href="#info" class="form-step">
                <span class="step-circle">1</span> Informations
            </a>

            <a href="#caracteristiques" class="form-step">
                <span class="step-circle">2</span> Caractéristiques
            </a>

            <a href="#localisation" class="form-step">
                <span class="step-circle">3</span> Localisation
            </a>

            <a href="#photo" class="form-step">
                <span class="step-circle">4</span> Photo
            </a>

            <a href="#publication" class="form-step">
                <span class="step-circle">5</span> Publication
            </a>
        
        </div>

        <form action="../traitements/traitement_property.php" method="post" enctype="multipart/form-data">
          <div class="row g-4">
            <div class="col-lg-8">
              <!-- Informations générales -->
              <div class="card p-4 mb-4" id="info">
                <h5 class="mb-3"><i class="bi bi-info-circle me-2 text-accent"></i>Informations générales</h5>
                <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label" for="titre">Titre de l'annonce</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Ex : Villa contemporaine avec piscine">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="type">Type de bien</label>
                    <select id="type" name="type" class="form-select">
                      <option value="">Sélectionner…</option><option>Appartement</option><option>Maison</option><option>Villa</option><option>Studio</option><option>Terrain</option><option>Local commercial</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="transaction">Transaction</label>
                    <select id="transaction" name="transaction" class="form-select"><option>Vente</option><option>Location</option></select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="prix">Prix (€)</label>
                    <div class="input-group">
                      <input type="number" id="prix" name="prix" class="form-control" placeholder="1 250 000">
                      <span class="input-group-text">€</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="ref">Référence</label>
                    <input type="text" id="ref" name="ref" class="form-control" placeholder="WI-00000">
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="desc">Description</label>
                    <textarea id="desc" name="description" rows="5" class="form-control" placeholder="Décrivez le bien, ses atouts, son environnement…"></textarea>
                    <small class="text-muted-2">Une description détaillée augmente de 40% les contacts.</small>
                  </div>
                </div>
              </div>

              <!-- Caractéristiques -->
            <div class="card p-4 mb-4" id="caracteristique">
                <h5 class="mb-3"><i class="bi bi-rulers me-2 text-accent"></i>Caractéristiques</h5>
                <div class="row g-3">
                  <div class="col-6 col-md-3"><label class="form-label" for="surface">Surface (m²)</label><input type="number" id="surface" name="surface" class="form-control" placeholder="240"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="pieces">Pièces</label><input type="number" id="pieces" name="pieces" class="form-control" placeholder="6"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="chambres">Chambres</label><input type="number" id="chambres" name="chambres" class="form-control" placeholder="4"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="sdb">Salles de bain</label><input type="number" id="sdb" name="sdb" class="form-control" placeholder="3"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="annee">Année</label><input type="number" id="annee" name="annee" class="form-control" placeholder="2019"></div>
                  <div class="col-6 col-md-3"><label class="form-label" for="terrain">Terrain (m²)</label><input type="number" id="terrain" name="terrain" class="form-control" placeholder="1200"></div>
                  <div class="col-6 col-md-3">
                    <label class="form-label" for="floor">Etage</label><input type="number" id="floor" name="floor" class="form-control" placeholder="2"></div>
                  
                  </div>
                  <div class="col-6 col-md-3">
                    <label class="form-label" for="expo">Exposition</label>
                    <select id="expo" name="exposition" class="form-select"><option>Nord</option><option>Sud</option><option>Est</option><option>Ouest</option></select>
                  </div>
             </div>

                <hr class="divider my-4">
                <label class="form-label">Équipements</label>
                <div class="row">
                    <?php foreach($features as $feature): ?>

                     <div class="col-6 col-md-4">
                         <div class="form-check">
                           <input class="form-check-input"  type="checkbox" name="equip[]"  value="<?= $feature["id_feature_property"] ?>"  id="<?= $feature["id_feature_property"] ?>">
  
                            <label class="form-check-label" for="feature<?= $feature["id_feature_property"] ?>"> <?= $feature["name_feature_property"] ?> </label>
                          </div>
                      </div>
  
                    <?php endforeach; ?>
                </div>
              </div>

              <!-- Localisation -->
              <div class="card p-4 mb-4" id="localisation">
                <h5 class="mb-3"><i class="bi bi-geo-alt me-2 text-accent"></i>Localisation</h5>
                <div class="row g-3">
                  <div class="col-12"><label class="form-label" for="adresse">Adresse</label><input type="text" id="adresse" name="adresse" class="form-control" placeholder="12 Chemin des Oliviers"></div>
                  <div class="col-md-4"><label class="form-label" for="cp">Code postal</label><input type="text" id="cp" name="code_postal" class="form-control" placeholder="13100"></div>
                  <div class="col-md-8"><label class="form-label" for="ville">Ville</label><input type="text" id="ville" name="ville" class="form-control" placeholder="Aix-en-Provence"></div>
                </div>
              </div>

              <!-- Photos -->
              <div class="card p-4" id="photo">
                <h5 class="mb-3"><i class="bi bi-images me-2 text-accent"></i>Photos</h5>
                <label for="photos" class="upload-zone d-block">
                  <i class="bi bi-cloud-arrow-up upload-icon"></i>
                  <p class="fw-semibold mb-1 mt-2">Glissez vos photos ici ou cliquez pour parcourir</p>
                  <small class="text-muted-2">JPG, PNG — 10 Mo max par image. La première sera la photo de couverture.</small>
                  <input type="file" id="photos" name="photos[]" class="d-none" multiple accept="image/*">
                </label>
                <div id="preview" class="row mt-3 g-3"></div>
            
              </div>
          

          <br><br>
            
              <div class="card p-4 mb-4" id="publication">
                <h6 class="mb-3">Publication</h6>
                <div class="mb-3">
                  <label class="form-label" for="statut">Statut</label>
                  <select id="statut" name="statut" class="form-select">
                    <option value="">--Selectionner un statut--</option>
                  <?php foreach($statuts as $statut): ?>
                    <option value="<?= $statut['id_statut_property']; ?>"><?= $statut['name_statut_property']; ?></option>
                    <?php  endforeach; ?>
                  </select>
                </div>


                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" id="une" name="a_la_une"><label class="form-check-label" for="une">Mettre à la une</label></div>
                <div class="form-check form-switch mb-3"><input class="form-check-input" type="checkbox" id="urgent" name="urgent"><label class="form-check-label" for="urgent">Marquer « urgent »</label></div>
                <hr class="divider mb-3">
                <div class="alert alert-primary d-flex gap-2 align-items-start"><i class="bi bi-lightbulb"></i><small class="mb-0">Ajoutez au moins 5 photos de qualité pour maximiser vos contacts.</small></div>
                <button type="submit" name ="enregistrement" class="btn btn-primary w-100 mb-2"><i class="bi bi-check2-circle me-2"></i>Enregistrer l'annonce</button>
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
        <a href="../pages/dashboard.php" class="dash-link"><i class="bi bi-grid-1x2"></i> Tableau de bord</a>
        <a href="../pages/properties.php" class="dash-link"><i class="bi bi-houses"></i> Mes annonces</a>
        <a href="../pages/add_property.php" class="dash-link active"><i class="bi bi-plus-square"></i> Ajouter un bien</a>
        <a href="../pages/messages.php" class="dash-link"><i class="bi bi-chat-dots"></i> Messages</a>
        <a href="../partials/logout.php" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
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
