<?php if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin" ):?>

    <aside class="dash-sidebar">
      <a href="index.html" class="wi-brand text-decoration-none d-flex align-items-center gap-2">
        <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span>
      </a>
      <span class="badge badge-gold align-self-start mt-2">Espace Admin</span>
      <nav class="dash-nav">
        <span class="nav-section">Supervision</span>
        <a href="../index.php" class="dash-link active"><i class="bi bi-speedometer2"></i> Vue d'ensemble</a>
        <a href="../pages/register.php" class="dash-link"><i class="bi bi-people"></i> Utilisateurs <span class="badge badge-soft rounded-pill">26k</span></a>
        <a href="../pages/properties.php" class="dash-link"><i class="bi bi-houses"></i> Biens</a>
        <a href="../pages/message.php" class="dash-link"><i class="bi bi-chat-dots"></i> Messages</a>
        <span class="nav-section">Gestion</span>
        <a href="#" class="dash-link"><i class="bi bi-flag"></i> Modération <span class="badge badge-gold rounded-pill">7</span></a>
        <a href="#" class="dash-link"><i class="bi bi-bar-chart"></i> Rapports</a>
        <span class="nav-section">Système</span>
        <a href="#" class="dash-link"><i class="bi bi-gear"></i> Paramètres</a>
        <a href="../pages/profil.php" class="dash-link"><i class="bi bi-gear"></i> Profil</a>
        <a href="../partials/logout.php" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
    </aside>



<?php elseif(isset($_SESSION['role']) && $_SESSION['role'] == "Agent" ): ?>

    <aside class="dash-sidebar" id="sidebar">
      <a href="../index.php" class="wi-brand text-decoration-none d-flex align-items-center gap-2">
        <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span>
      </a>
      <nav class="dash-nav">
        <span class="nav-section">Pilotage</span>
        <a href="dashboard_agent.php" class="dash-link active"><i class="bi bi-grid-1x2"></i> Tableau de bord</a>
        <a href="../pages/properties.php" class="dash-link"><i class="bi bi-houses"></i> Mes annonces <span class="badge badge-soft rounded-pill">24</span></a>
        <a href="../pages/add_property.php" class="dash-link"><i class="bi bi-plus-square"></i> Ajouter un bien</a>
        <a href="../pages/message.php" class="dash-link"><i class="bi bi-chat-dots"></i> Messages <span class="badge badge-gold rounded-pill">5</span></a>
        <span class="nav-section">Activité</span>
        <a href="#" class="dash-link"><i class="bi bi-calendar-check"></i> Visites</a>
        <a href="#" class="dash-link"><i class="bi bi-people"></i> Mes clients</a>
        <a href="#" class="dash-link"><i class="bi bi-graph-up-arrow"></i> Statistiques</a>
        <span class="nav-section">Compte</span>
        <a href="#" class="dash-link"><i class="bi bi-gear"></i> Paramètres</a>
        <a href="../pages/profil.php" class="dash-link"><i class="bi bi-gear"></i> Profil</a>
        <a href="../partials/logout.php" class="dash-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
      </nav>
   
    </aside>

    <?php else: 
        
        header("Location: ../index.php");
        ?>

<?php endif; ?>