<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - WebImmo</title>

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

            <!-- ==================== GAUCHE ==================== -->

            <div class="col-lg-6 auth-form-col bg-light-soft">

                <!-- CORRECTION -->
                <div class="auth-card">

                    <div class="container-fluid py-3">
                        <a href="dashboard.php" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left"></i>
                            Retour au dashboard
                        </a>
                    </div>

                    <a href="../index.php"
                       class="wi-brand auth-logo text-decoration-none d-inline-flex align-items-center gap-2 mb-4">

                        <span class="brand-badge">
                            <i class="bi bi-buildings"></i>
                        </span>

                        Web<span>Immo</span>

                    </a>

                    <h2 class="mb-4">
                        <i class="bi bi-person-circle text-primary"></i>
                        Mon Profil
                    </h2>

                    <!-- ==================== INFOS ==================== -->

                    <div class="card border-0 shadow-sm rounded-4 mb-4">

                        <div class="card-header bg-white border-0 pt-4">

                            <h5 class="fw-bold mb-0">

                                <i class="bi bi-person-fill text-primary me-2"></i>

                                Informations personnelles

                            </h5>

                        </div>

                        <div class="card-body">

                            <form action="../traitements/traitement_update_profile.php" method="POST">

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label class="form-label">Prénom</label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="prenom"
                                            value="<?= $_SESSION['first_name'] ?? '' ?>">

                                    </div>

                                    <div class="col-md-6">

                                        <label class="form-label">Nom</label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nom"
                                            value="<?= $_SESSION['last_name'] ?? '' ?>">

                                    </div>

                                    <div class="col-12">

                                        <label class="form-label">Adresse e-mail</label>

                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            value="<?= $_SESSION['email'] ?? '' ?>">

                                    </div>

                                    <div class="col-md-6">

                                        <label class="form-label">Téléphone</label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="phone"
                                            value="<?= $_SESSION['phone'] ?? '' ?>">

                                    </div>

                                    <div class="col-md-6">

                                        <label class="form-label">Rôle</label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            value="<?= $_SESSION['role'] ?? '' ?>"
                                            readonly>

                                    </div>

                                </div>

                                <button class="btn btn-primary w-100 mt-4">

                                    <i class="bi bi-floppy me-2"></i>

                                    Enregistrer les modifications

                                </button>

                            </form>

                        </div>

                    </div>

                    <!-- ==================== MOT DE PASSE ==================== -->

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-header bg-white border-0 pt-4">

                            <h5 class="fw-bold mb-0">

                                <i class="bi bi-shield-lock text-danger me-2"></i>

                                Sécurité

                            </h5>

                        </div>

                        <div class="card-body">

                            <form action="../traitements/traitement_update_password.php" method="POST">

                                <div class="mb-3">

                                    <label class="form-label">

                                        Mot de passe actuel

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">

                                            <i class="bi bi-lock"></i>

                                        </span>

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="old_password"
                                            required>

                                    </div>

                                </div>

                                <div class="mb-3">

                                    <label class="form-label">

                                        Nouveau mot de passe

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">

                                            <i class="bi bi-key"></i>

                                        </span>

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="new_password"
                                            required>

                                    </div>

                                </div>

                                <div class="mb-4">

                                    <label class="form-label">

                                        Confirmer le nouveau mot de passe

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">

                                            <i class="bi bi-check-circle"></i>

                                        </span>

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="confirm_password"
                                            required>

                                    </div>

                                </div>

                                <button type="submit" name="submit" class="btn btn-danger w-100">

                                    <i class="bi bi-shield-lock me-2"></i>

                                    Modifier le mot de passe

                                </button>

                            </form>

                        </div>

                    </div>

                </div>
                <!-- FIN auth-card -->

            </div>
            <!-- FIN colonne gauche -->

            <!-- ==================== DROITE ==================== -->

            <div class="col-lg-6 d-none d-lg-block auth-aside">

                <div class="auth-aside-inner">

                    <a href="../index.php"
                       class="wi-brand text-white text-decoration-none d-inline-flex align-items-center gap-2 ms-auto">

                        <span class="brand-badge">
                            <i class="bi bi-buildings"></i>
                        </span>

                        Web<span style="color:var(--wi-gold)">Immo</span>

                    </a>

                    <div class="my-auto py-5 text-center">

                        <div class="mb-4">

                            <i class="bi bi-person-lock"
                               style="font-size:120px;color:white;"></i>

                        </div>

                        <h2>Sécurisez votre compte</h2>

                        <p style="color:rgba(255,255,255,.85);max-width:420px;margin:auto;">

                            Nous vous recommandons de modifier régulièrement votre mot de passe afin de protéger vos données et votre espace d'administration.

                        </p>

                    </div>

                    <div class="d-grid gap-3" style="max-width:380px">

                        <div class="auth-perk">
                            <i class="bi bi-shield-check"></i>
                            <span>Mot de passe chiffré</span>
                        </div>

                        <div class="auth-perk">
                            <i class="bi bi-lock-fill"></i>
                            <span>Connexion sécurisée</span>
                        </div>

                        <div class="auth-perk">
                            <i class="bi bi-person-check"></i>
                            <span>Protection de votre compte</span>
                        </div>

                    </div>

                </div>

            </div>
            <!-- FIN colonne droite -->

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>