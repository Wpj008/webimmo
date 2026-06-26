<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Créez votre compte WebImmo gratuitement.">
  <title>Inscription — WebImmo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/auth.css" rel="stylesheet">
</head>
<body>
  <div class="auth-wrap">
    <div class="container-fluid">
      <div class="row g-0 min-vh-100">
     
        <!-- Formulaire (à gauche cette fois) -->
        <div class="col-lg-6 auth-form-col bg-light-soft order-lg-1 order-2">
        
          
          <div class="auth-card">

          <div class="container-fluid py-3">
         <a href="../partials/dashboard_admin.php" class="btn btn-outline-primary">
             <i class="bi bi-arrow-left me-1"></i> Retour au dashboard
        </a>
    </div>
            <a href="../index.php" class="wi-brand auth-logo text-decoration-none d-inline-flex align-items-center gap-2 mb-4">
              <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span>
            </a>
            <h1 class="h3 mb-1">Créer un compte</h1>
        
            <div class="row g-2 mb-3">
              <div class="col-6"><button class="btn-social"><i class="bi bi-google me-2 text-danger"></i>Google</button></div>
              <div class="col-6"><button class="btn-social"><i class="bi bi-apple me-2"></i>Apple</button></div>
            </div>
            <div class="auth-divider mb-3">ou avec votre e-mail</div>

            <form action="../traitements/traitement_register.php" method="POST">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="prenom">Prénom</label>
                  <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Marie" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nom">Nom</label>
                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Dupont" required>
                </div>
                <div class="col-12">
                  <label class="form-label" for="email">Adresse e-mail</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="vous@exemple.fr" required>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label" for="role">Je suis</label>
                  <select id="role" name="role" class="form-select">
                    <option value="Admin">Administrateur</option>
                    <option value="Agent">Agent</option>
                   
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="phone">Téléphone</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                    <input type="phone" id="phone" name="phone" class="form-control" placeholder="0123456789" required>
                  </div>

                </div>
              </div>
<br><br>
              <button type="submit" class="btn btn-primary btn-lg w-100">Créer mon compte <i class="bi bi-arrow-right ms-1"></i></button>
            </form>


          </div>
        </div>

        <!-- Illustration -->
        <div class="col-lg-6 d-none d-lg-block auth-aside order-lg-2 order-1">
          <div class="auth-aside-inner">
            <a href="index.html" class="wi-brand text-white text-decoration-none d-inline-flex align-items-center gap-2 ms-auto">
              <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span style="color:var(--wi-gold)">Immo</span>
            </a>
            <div class="my-auto py-5">
              <h2>Commencez votre projet immobilier dès aujourd'hui</h2>
              <p style="color:rgba(255,255,255,.85);max-width:420px">Créez votre compte en 30 secondes et accédez à des annonces exclusives avant tout le monde.</p>
              <div class="row g-3 mt-2" style="max-width:420px">
                <div class="col-4"><div class="auth-quote text-center"><div class="h4 text-white mb-0">540+</div><small style="color:rgba(255,255,255,.7)">Biens</small></div></div>
                <div class="col-4"><div class="auth-quote text-center"><div class="h4 text-white mb-0">320+</div><small style="color:rgba(255,255,255,.7)">Agents</small></div></div>
                <div class="col-4"><div class="auth-quote text-center"><div class="h4 text-white mb-0">4,9★</div><small style="color:rgba(255,255,255,.7)">Note</small></div></div>
              </div>
            </div>
            <div class="d-grid gap-3" style="max-width:380px">
              <div class="auth-perk"><i class="bi bi-shield-check"></i><span>Vos données protégées & chiffrées</span></div>
              <div class="auth-perk"><i class="bi bi-bell"></i><span>Alertes personnalisées gratuites</span></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
