<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Agent — WebImmo</title>
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
      <!-- Topbar -->
      <header class="dash-topbar">
        <button class="btn btn-soft btn-icon d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-label="Menu"><i class="bi bi-list"></i></button>
        <div class="dash-search">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
            <input type="search" class="form-control border-start-0" placeholder="Rechercher une annonce, un client…">
          </div>
        </div>
        <div class="ms-auto d-flex align-items-center gap-2">
          <a href="../pages/add_property.php" class="btn btn-primary d-none d-sm-inline-flex"><i class="bi bi-plus-lg me-1"></i>Nouveau bien</a>
          <button class="btn btn-soft btn-icon position-relative" aria-label="Notifications"><i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:.55rem">3</span></button>
          <div class="d-flex align-items-center gap-2 ps-2">
            <img class="avatar" width="38" height="38" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=80&q=80" alt="Agent">
            <div class="d-none d-md-block lh-1"><div class="fw-semibold small"><?= $_SESSION['first_name']; ?></div><small class="text-muted-2">Agent senior</small></div>
          </div>
        </div>
      </header>

      <main class="dash-content">
        <!-- Hero / bienvenue -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
          <div>
            <h1 class="h3 mb-1">Bonjour <?= $_SESSION['first_name']; ?></h1>
            <p class="text-muted-2 mb-0">Voici un aperçu de votre activité du 21 juin 2026.</p>
          </div>
          <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width:auto"><option>30 derniers jours</option><option>7 derniers jours</option><option>Cette année</option></select>
            <button class="btn btn-soft btn-sm"><i class="bi bi-download me-1"></i>Exporter</button>
          </div>
        </div>

        <!-- KPIs -->
        <div class="row g-3 mb-4">
          <div class="col-6 col-xl-3">
            <div class="kpi-card">
              <div class="d-flex justify-content-between align-items-start">
                <span class="kpi-icon bg-i-blue"><i class="bi bi-houses"></i></span>
                <span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>12%</span>
              </div>
              <div class="kpi-value mt-3">24</div>
              <div class="kpi-label">Annonces actives</div>
            </div>
          </div>
          <div class="col-6 col-xl-3">
            <div class="kpi-card">
              <div class="d-flex justify-content-between align-items-start">
                <span class="kpi-icon bg-i-green"><i class="bi bi-eye"></i></span>
                <span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>8%</span>
              </div>
              <div class="kpi-value mt-3">18 240</div>
              <div class="kpi-label">Vues ce mois</div>
            </div>
          </div>
          <div class="col-6 col-xl-3">
            <div class="kpi-card">
              <div class="d-flex justify-content-between align-items-start">
                <span class="kpi-icon bg-i-gold"><i class="bi bi-calendar-check"></i></span>
                <span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>5%</span>
              </div>
              <div class="kpi-value mt-3">37</div>
              <div class="kpi-label">Visites planifiées</div>
            </div>
          </div>
          <div class="col-6 col-xl-3">
            <div class="kpi-card">
              <div class="d-flex justify-content-between align-items-start">
                <span class="kpi-icon bg-i-purple"><i class="bi bi-key"></i></span>
                <span class="kpi-trend down"><i class="bi bi-arrow-down-short"></i>2%</span>
              </div>
              <div class="kpi-value mt-3">6</div>
              <div class="kpi-label">Ventes conclues</div>
            </div>
          </div>
        </div>

        <div class="row g-3 mb-4">
          <!-- Graphique -->
          <div class="col-lg-8">
            <div class="card p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Vues des annonces</h5>
                <span class="badge badge-soft">+12% vs mois dernier</span>
              </div>
              <div class="bar-chart">
                <div class="bar" style="height:45%" data-label="Jan"></div>
                <div class="bar" style="height:60%" data-label="Fév"></div>
                <div class="bar" style="height:40%" data-label="Mar"></div>
                <div class="bar" style="height:75%" data-label="Avr"></div>
                <div class="bar" style="height:55%" data-label="Mai"></div>
                <div class="bar is-peak" style="height:95%" data-label="Juin"></div>
                <div class="bar" style="height:70%" data-label="Juil"></div>
                <div class="bar" style="height:50%" data-label="Aoû"></div>
              </div>
            </div>
          </div>
          <!-- Actions rapides -->
          <div class="col-lg-4">
            <div class="card p-4 h-100">
              <h5 class="mb-3">Actions rapides</h5>
              <div class="d-grid gap-2">
                <a href="../pages/add_property.php" class="quick-action"><span class="qa-icon"><i class="bi bi-plus-lg"></i></span><div><div class="fw-semibold">Ajouter un bien</div><small class="text-muted-2">Publier une annonce</small></div></a>
                <a href="../pages/message.php" class="quick-action"><span class="qa-icon"><i class="bi bi-chat-dots"></i></span><div><div class="fw-semibold">Répondre aux messages</div><small class="text-muted-2">5 non lus</small></div></a>
                <a href="#" class="quick-action"><span class="qa-icon"><i class="bi bi-calendar-plus"></i></span><div><div class="fw-semibold">Planifier une visite</div><small class="text-muted-2">Agenda</small></div></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Gestion des annonces -->
        <div class="card p-4">
          <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <h5 class="mb-0">Mes annonces</h5>
            <div class="d-flex gap-2">
              <select class="form-select form-select-sm" style="width:auto"><option>Tous les statuts</option><option>En ligne</option><option>En attente</option><option>Vendu</option></select>
              <a href="../pages/add_property.php" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Ajouter</a>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-modern align-middle mb-0">
              <thead>
                <tr><th>Bien</th><th>Prix</th><th>Statut</th><th>Vues</th><th>Contacts</th><th class="text-end">Actions</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=160&q=80" alt=""><div><div class="fw-semibold">Villa contemporaine</div><small class="text-muted-2">Aix-en-Provence</small></div></div></td>
                  <td class="fw-semibold">1 250 000 €</td>
                  <td><span class="status-dot" style="background:#16a34a"></span>En ligne</td>
                  <td>2 480</td><td>18</td>
                  <td class="text-end"><a href="property-details.html" class="btn btn-soft btn-sm btn-icon" aria-label="Voir"><i class="bi bi-eye"></i></a> <a href="edit-property.html" class="btn btn-soft btn-sm btn-icon" aria-label="Modifier"><i class="bi bi-pencil"></i></a> <button class="btn btn-soft btn-sm btn-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-label="Supprimer"><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=160&q=80" alt=""><div><div class="fw-semibold">Appartement haussmannien</div><small class="text-muted-2">Paris 8e</small></div></div></td>
                  <td class="fw-semibold">890 000 €</td>
                  <td><span class="status-dot" style="background:#16a34a"></span>En ligne</td>
                  <td>1 920</td><td>12</td>
                  <td class="text-end"><a href="property-details.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></a> <a href="edit-property.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></a> <button class="btn btn-soft btn-sm btn-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=160&q=80" alt=""><div><div class="fw-semibold">Maison familiale</div><small class="text-muted-2">Bordeaux</small></div></div></td>
                  <td class="fw-semibold">3 200 €/mois</td>
                  <td><span class="status-dot" style="background:#d4af37"></span>En attente</td>
                  <td>640</td><td>4</td>
                  <td class="text-end"><a href="property-details.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></a> <a href="edit-property.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></a> <button class="btn btn-soft btn-sm btn-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=160&q=80" alt=""><div><div class="fw-semibold">Loft industriel</div><small class="text-muted-2">Lyon 2e</small></div></div></td>
                  <td class="fw-semibold">560 000 €</td>
                  <td><span class="status-dot" style="background:#64748b"></span>Vendu</td>
                  <td>3 110</td><td>26</td>
                  <td class="text-end"><a href="property-details.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></a> <a href="edit-property.html" class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></a> <button class="btn btn-soft btn-sm btn-icon text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <nav class="mt-3"><ul class="pagination pagination-sm justify-content-end mb-0">
            <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul></nav>
        </div>
      </main>
    </div>
  </div>

  <!-- Offcanvas sidebar (mobile) -->
  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="mobileSidebar" style="background:var(--wi-navy)">
    <div class="offcanvas-header">
      <a href="index.html" class="wi-brand text-white text-decoration-none d-flex align-items-center gap-2"><span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span style="color:var(--wi-gold)">Immo</span></a>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="dash-nav mt-0">
        <a href="dashboard-agent.php" class="dash-link active"><i class="bi bi-grid-1x2"></i> Tableau de bord</a>
        <a href="../pages/properties.php" class="dash-link"><i class="bi bi-houses"></i> Mes annonces</a>
        <a href="add-property.html" class="dash-link"><i class="bi bi-plus-square"></i> Ajouter un bien</a>
        <a href="../pages/message.php" class="dash-link"><i class="bi bi-chat-dots"></i> Messages</a>
        <a href="../partials/logout.php" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
    </div>
  </div>

  <!-- Modale suppression -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-body text-center p-4">
          <div class="kpi-icon bg-i-blue mx-auto mb-3" style="width:64px;height:64px;background:#fdecec;color:#ef4444;font-size:1.8rem"><i class="bi bi-exclamation-triangle"></i></div>
          <h5>Supprimer cette annonce&nbsp;?</h5>
          <p class="text-muted-2">Cette action est définitive. L'annonce ne sera plus visible par les acheteurs.</p>
          <div class="d-flex gap-2 justify-content-center">
            <button class="btn btn-soft" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-danger">Supprimer</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
