<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Connexion à votre espace WebImmo.">
  <title>Connexion — WebImmo</title>
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

        <!-- Illustration -->
        <div class="col-lg-6 d-none d-lg-block auth-aside">
          <div class="auth-aside-inner">
            <a href="index.html" class="wi-brand text-white text-decoration-none d-inline-flex align-items-center gap-2">
              <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span style="color:var(--wi-gold)">Immo</span>
            </a>
            <div class="my-auto py-5">
              <span class="hero-badge d-inline-flex align-items-center gap-2 mb-4" style="background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.22);padding:.45rem 1rem;border-radius:999px"><i class="bi bi-star-fill text-warning"></i> Plateforme n°1 de l'immobilier premium</span>
              <h2>Heureux de vous revoir sur WebImmo</h2>
              <p style="color:rgba(255,255,255,.85);max-width:420px">Accédez à vos favoris, vos alertes personnalisées et échangez avec vos agents en un clic.</p>
              <div class="d-grid gap-3 mt-4" style="max-width:380px">
                <div class="auth-perk"><i class="bi bi-check-circle-fill"></i><span>Des milliers d'annonces vérifiées</span></div>
                <div class="auth-perk"><i class="bi bi-check-circle-fill"></i><span>Alertes en temps réel</span></div>
                <div class="auth-perk"><i class="bi bi-check-circle-fill"></i><span>Accompagnement par des experts</span></div>
              </div>
            </div>
            <div class="auth-quote">
              <p class="mb-2">« Une expérience fluide et un service irréprochable. J'ai trouvé mon appartement en deux semaines. »</p>
              <div class="d-flex align-items-center gap-2">
                <img class="avatar" width="40" height="40" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&q=80" alt="Sophie">
                <div><strong>Sophie L.</strong><br><small style="color:rgba(255,255,255,.7)">Cliente WebImmo</small></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Formulaire -->
        <div class="col-lg-6 auth-form-col bg-light-soft">
          <div class="auth-card">
            <a href="index.html" class="wi-brand auth-logo text-decoration-none d-inline-flex align-items-center gap-2 d-lg-none mb-4">
              <span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span>
            </a>
            <h1 class="h3 mb-1">Connexion</h1>
            <p class="text-muted-2 mb-4">Ravi de vous revoir ! Connectez-vous à votre espace.</p>

            <div class="row g-2 mb-3">
              <div class="col-6"><button class="btn-social"><i class="bi bi-google me-2 text-danger"></i>Google</button></div>
              <div class="col-6"><button class="btn-social"><i class="bi bi-apple me-2"></i>Apple</button></div>
            </div>
            <div class="auth-divider mb-3">ou par e-mail</div>

            <form action="../traitements/traitement_login.php" method="POST">
              <div class="mb-3">
                <label class="form-label" for="email">Adresse e-mail</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  <input type="email" id="email" name="mail" class="form-control" placeholder="vous@exemple.fr" required autocomplete="email">
                </div>
              </div>
              <div class="mb-2">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Mot de passe</label>
                  <a href="#" class="small text-decoration-none">Mot de passe oublié&nbsp;?</a>
                </div>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input type="password" id="password" name="mdp" class="form-control" placeholder="••••••••" required autocomplete="current-password">
                </div>
              </div>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="remember">Rester connecté(e)</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-100">Se connecter <i class="bi bi-arrow-right ms-1"></i></button>
            </form>

            <p class="text-center text-muted-2 mt-4 mb-0">Pas encore de compte&nbsp;? <a href="register.html" class="fw-semibold text-decoration-none">Créer un compte</a></p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
