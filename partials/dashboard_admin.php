<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin — WebImmo</title>
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
        <div class="dash-search">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
            <input type="search" class="form-control border-start-0" placeholder="Rechercher un utilisateur, un bien…">
          </div>
        </div>
        <div class="ms-auto d-flex align-items-center gap-2">
          <button class="btn btn-soft btn-icon position-relative" aria-label="Alertes"><i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:.55rem">7</span></button>
          <div class="d-flex align-items-center gap-2 ps-2">
            <span class="avatar-initials" style="width:38px;height:38px">AD</span>
            <div class="d-none d-md-block lh-1"><div class="fw-semibold small">Admin WebImmo</div><small class="text-muted-2">Super-administrateur</small></div>
          </div>
        </div>
      </header>

      <main class="dash-content">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
          <div>
            <h1 class="h3 mb-1">Vue d'ensemble</h1>
            <p class="text-muted-2 mb-0">Pilotage global de la plateforme — 21 juin 2026.</p>
          </div>
          <button class="btn btn-soft btn-sm"><i class="bi bi-download me-1"></i>Rapport mensuel</button>
        </div>

        <!-- KPIs -->
        <div class="row g-3 mb-4">
          <div class="col-6 col-xl-3"><div class="kpi-card"><div class="d-flex justify-content-between align-items-start"><span class="kpi-icon bg-i-blue"><i class="bi bi-houses"></i></span><span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>9%</span></div><div class="kpi-value mt-3">8 540</div><div class="kpi-label">Biens publiés</div></div></div>
          <div class="col-6 col-xl-3"><div class="kpi-card"><div class="d-flex justify-content-between align-items-start"><span class="kpi-icon bg-i-green"><i class="bi bi-people"></i></span><span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>14%</span></div><div class="kpi-value mt-3">26 312</div><div class="kpi-label">Utilisateurs</div></div></div>
          <div class="col-6 col-xl-3"><div class="kpi-card"><div class="d-flex justify-content-between align-items-start"><span class="kpi-icon bg-i-gold"><i class="bi bi-person-badge"></i></span><span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>3%</span></div><div class="kpi-value mt-3">320</div><div class="kpi-label">Agents actifs</div></div></div>
          <div class="col-6 col-xl-3"><div class="kpi-card"><div class="d-flex justify-content-between align-items-start"><span class="kpi-icon bg-i-purple"><i class="bi bi-cash-coin"></i></span><span class="kpi-trend up"><i class="bi bi-arrow-up-short"></i>21%</span></div><div class="kpi-value mt-3">1,2 M€</div><div class="kpi-label">Revenus (mois)</div></div></div>
        </div>

        <div class="row g-3 mb-4">
          <!-- Graphique transactions -->
          <div class="col-lg-8">
            <div class="card p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Transactions par mois</h5>
                <div class="d-flex gap-3 small">
                  <span><span class="status-dot" style="background:var(--wi-accent)"></span>Ventes</span>
                  <span><span class="status-dot" style="background:var(--wi-gold)"></span>Locations</span>
                </div>
              </div>
              <div class="bar-chart">
                <div class="bar" style="height:50%" data-label="Jan"></div>
                <div class="bar" style="height:65%" data-label="Fév"></div>
                <div class="bar" style="height:55%" data-label="Mar"></div>
                <div class="bar" style="height:80%" data-label="Avr"></div>
                <div class="bar" style="height:70%" data-label="Mai"></div>
                <div class="bar is-peak" style="height:100%" data-label="Juin"></div>
                <div class="bar" style="height:60%" data-label="Juil"></div>
                <div class="bar" style="height:85%" data-label="Aoû"></div>
              </div>
            </div>
          </div>
          <!-- Activité récente -->
          <div class="col-lg-4">
            <div class="card p-4 h-100">
              <h5 class="mb-3">Activité récente</h5>
              <div class="activity-item"><span class="activity-dot bg-i-green"><i class="bi bi-person-plus"></i></span><div><div class="small"><strong>Marie D.</strong> a créé un compte</div><small class="text-muted-2">Il y a 5 min</small></div></div>
              <div class="activity-item"><span class="activity-dot bg-i-blue"><i class="bi bi-house-add"></i></span><div><div class="small"><strong>Thomas R.</strong> a publié une villa</div><small class="text-muted-2">Il y a 22 min</small></div></div>
              <div class="activity-item"><span class="activity-dot bg-i-gold"><i class="bi bi-flag"></i></span><div><div class="small">Annonce <strong>#WI-8821</strong> signalée</div><small class="text-muted-2">Il y a 1 h</small></div></div>
              <div class="activity-item"><span class="activity-dot bg-i-purple"><i class="bi bi-key"></i></span><div><div class="small">Vente conclue à <strong>Lyon</strong></div><small class="text-muted-2">Il y a 3 h</small></div></div>
              <a href="#" class="btn btn-soft btn-sm w-100 mt-2">Tout voir</a>
            </div>
          </div>
        </div>

        <!-- Utilisateurs -->
        <div class="card p-4 mb-4" id="users">
          <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <h5 class="mb-0">Derniers utilisateurs</h5>
            <div class="d-flex gap-2">
              <select class="form-select form-select-sm" style="width:auto"><option>Tous les rôles</option><option>Clients</option><option>Agents</option><option>Vendeurs</option></select>
              <button class="btn btn-primary btn-sm"><i class="bi bi-person-plus me-1"></i>Inviter</button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-modern align-middle mb-0">
              <thead><tr><th>Utilisateur</th><th>Rôle</th><th>Inscription</th><th>Statut</th><th class="text-end">Actions</th></tr></thead>
              <tbody>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="avatar" width="38" height="38" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=80&q=80" alt=""><div><div class="fw-semibold">Marie Dupont</div><small class="text-muted-2">marie.d@email.fr</small></div></div></td>
                  <td><span class="badge badge-pill badge-soft">Client</span></td>
                  <td>21 juin 2026</td>
                  <td><span class="status-dot" style="background:#16a34a"></span>Actif</td>
                  <td class="text-end"><button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></button> <button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></button> <button class="btn btn-soft btn-sm btn-icon text-danger"><i class="bi bi-slash-circle"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><img class="avatar" width="38" height="38" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=80&q=80" alt=""><div><div class="fw-semibold">Thomas Renard</div><small class="text-muted-2">t.renard@webimmo.fr</small></div></div></td>
                  <td><span class="badge badge-pill badge-gold">Agent</span></td>
                  <td>18 juin 2026</td>
                  <td><span class="status-dot" style="background:#16a34a"></span>Actif</td>
                  <td class="text-end"><button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></button> <button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></button> <button class="btn btn-soft btn-sm btn-icon text-danger"><i class="bi bi-slash-circle"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><span class="avatar-initials" style="width:38px;height:38px">KB</span><div><div class="fw-semibold">Karim Benali</div><small class="text-muted-2">k.benali@email.fr</small></div></div></td>
                  <td><span class="badge badge-pill" style="background:#f1ecfe;color:#7c3aed">Vendeur</span></td>
                  <td>15 juin 2026</td>
                  <td><span class="status-dot" style="background:#d4af37"></span>En attente</td>
                  <td class="text-end"><button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></button> <button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></button> <button class="btn btn-soft btn-sm btn-icon text-danger"><i class="bi bi-slash-circle"></i></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-2"><span class="avatar-initials" style="width:38px;height:38px">SL</span><div><div class="fw-semibold">Sophie Lemoine</div><small class="text-muted-2">sophie.l@email.fr</small></div></div></td>
                  <td><span class="badge badge-pill badge-soft">Client</span></td>
                  <td>12 juin 2026</td>
                  <td><span class="status-dot" style="background:#ef4444"></span>Suspendu</td>
                  <td class="text-end"><button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-eye"></i></button> <button class="btn btn-soft btn-sm btn-icon"><i class="bi bi-pencil"></i></button> <button class="btn btn-soft btn-sm btn-icon text-danger"><i class="bi bi-slash-circle"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Biens récents + messages -->
        <div class="row g-3" id="props">
          <div class="col-lg-7">
            <div class="card p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-3"><h5 class="mb-0">Biens à modérer</h5><span class="badge badge-gold">7 en attente</span></div>
              <div class="table-responsive">
                <table class="table table-modern align-middle mb-0">
                  <thead><tr><th>Bien</th><th>Agent</th><th>Prix</th><th class="text-end">Action</th></tr></thead>
                  <tbody>
                    <tr><td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?auto=format&fit=crop&w=160&q=80" alt=""><span class="fw-semibold">Penthouse Nice</span></div></td><td>T. Renard</td><td>2,1 M€</td><td class="text-end"><button class="btn btn-sm" style="background:#e8f7f0;color:#16a34a"><i class="bi bi-check-lg"></i></button> <button class="btn btn-sm" style="background:#fdecec;color:#ef4444"><i class="bi bi-x-lg"></i></button></td></tr>
                    <tr><td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&fit=crop&w=160&q=80" alt=""><span class="fw-semibold">Studio Lille</span></div></td><td>C. Martin</td><td>980 €</td><td class="text-end"><button class="btn btn-sm" style="background:#e8f7f0;color:#16a34a"><i class="bi bi-check-lg"></i></button> <button class="btn btn-sm" style="background:#fdecec;color:#ef4444"><i class="bi bi-x-lg"></i></button></td></tr>
                    <tr><td><div class="d-flex align-items-center gap-2"><img class="table-thumb" src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=160&q=80" alt=""><span class="fw-semibold">Maison Toulouse</span></div></td><td>L. Petit</td><td>678 000 €</td><td class="text-end"><button class="btn btn-sm" style="background:#e8f7f0;color:#16a34a"><i class="bi bi-check-lg"></i></button> <button class="btn btn-sm" style="background:#fdecec;color:#ef4444"><i class="bi bi-x-lg"></i></button></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-3"><h5 class="mb-0">Messages récents</h5><a href="messages.html" class="small text-decoration-none">Ouvrir</a></div>
              <div class="d-grid gap-2">
                <a href="../pages/message.php" class="quick-action"><img class="avatar" width="40" height="40" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&q=80" alt=""><div class="flex-grow-1"><div class="d-flex justify-content-between"><span class="fw-semibold">Sophie L.</span><small class="text-muted-2">2 min</small></div><small class="text-muted-2">Bonjour, le bien est-il…</small></div></a>
                <a href="../pages/message.php" class="quick-action"><span class="avatar-initials" style="width:40px;height:40px">KB</span><div class="flex-grow-1"><div class="d-flex justify-content-between"><span class="fw-semibold">Karim B.</span><small class="text-muted-2">1 h</small></div><small class="text-muted-2">Merci pour la visite !</small></div></a>
                <a href="../pages/message.php" class="quick-action"><span class="avatar-initials" style="width:40px;height:40px">JD</span><div class="flex-grow-1"><div class="d-flex justify-content-between"><span class="fw-semibold">Julien D.</span><small class="text-muted-2">3 h</small></div><small class="text-muted-2">Une question sur le prix…</small></div></a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Offcanvas sidebar (mobile) -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" style="background:var(--wi-navy)">
    <div class="offcanvas-header">
      <a href="/new-webimmo/" class="wi-brand text-white text-decoration-none d-flex align-items-center gap-2"><span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span style="color:var(--wi-gold)">Immo</span></a>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="dash-nav mt-0">
        <a href="dashboard-admin.php" class="dash-link active"><i class="bi bi-speedometer2"></i> Vue d'ensemble</a>
        <a href="#" class="dash-link"><i class="bi bi-people"></i> Utilisateurs</a>
        <a href="../pages/properties.php" class="dash-link"><i class="bi bi-houses"></i> Biens</a>
        <a href="../pages/messages.php" class="dash-link"><i class="bi bi-chat-dots"></i> Messages</a>
        <a href="logout.php" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
