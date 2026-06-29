<?php

?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contactez les équipes WebImmo — coordonnées, formulaire et FAQ.">
  <title>Contact — WebImmo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/contact.css" rel="stylesheet">
</head>
<body class="bg-light-soft">

  <!-- ===================== NAVBAR ===================== -->

    <?php require_once "../partials/header.php"; ?>
  <!-- ===================== EN-TÊTE ===================== -->
  <section class="page-hero">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-lg-7">
          <span class="eyebrow text-white">Parlons de votre projet</span>
          <h1 class="mt-2">Nous sommes à votre écoute</h1>
          <p class="mb-0" style="color:rgba(255,255,255,.85)">Une question, un projet d'achat, de vente ou de location&nbsp;? Notre équipe vous répond sous 24h.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== CARTES INFOS ===================== -->
  <section class="pb-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="contact-info-card text-center">
            <span class="icon-ring mx-auto mb-3"><i class="bi bi-telephone"></i></span>
            <h6>Téléphone</h6>
            <p class="text-muted-2 mb-1">Du lundi au samedi, 9h–19h</p>
            <a href="tel:+33123456789" class="fw-semibold text-decoration-none">01 23 45 67 89</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info-card text-center">
            <span class="icon-ring mx-auto mb-3"><i class="bi bi-envelope"></i></span>
            <h6>E-mail</h6>
            <p class="text-muted-2 mb-1">Réponse sous 24h ouvrées</p>
            <a href="mailto:contact@webimmo.fr" class="fw-semibold text-decoration-none">contact@webimmo.fr</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info-card text-center">
            <span class="icon-ring mx-auto mb-3"><i class="bi bi-geo-alt"></i></span>
            <h6>Agence</h6>
            <p class="text-muted-2 mb-1">24 avenue des Champs</p>
            <span class="fw-semibold">75008 Paris, France</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FORMULAIRE + CARTE ===================== -->
  <section class="pb-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-7">
          <div class="card p-4 p-lg-5 h-100">
            <h3 class="mb-1">Envoyez-nous un message</h3>
            <p class="text-muted-2 mb-4">Remplissez le formulaire, nous revenons vers vous rapidement.</p>

            <div class="alert alert-success d-flex align-items-center gap-2 d-none" role="alert">
              <i class="bi bi-check-circle-fill"></i> Votre message a bien été envoyé.
            </div>

            <form action="contact.html" method="post">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="prenom">Prénom</label>
                  <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Marie" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="nom">Nom</label>
                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Dupont" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email">E-mail</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="vous@exemple.fr" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="telephone">Téléphone</label>
                  <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="06 12 34 56 78">
                </div>
                <div class="col-12">
                  <label class="form-label" for="sujet">Sujet</label>
                  <select id="sujet" name="sujet" class="form-select">
                    <option>Demande d'information</option>
                    <option>Achat d'un bien</option>
                    <option>Vente d'un bien</option>
                    <option>Location</option>
                    <option>Estimation gratuite</option>
                    <option>Autre</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="message">Message</label>
                  <textarea id="message" name="message" rows="5" class="form-control" placeholder="Décrivez votre projet ou votre question…" required></textarea>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                    <label class="form-check-label small" for="consent">J'accepte que mes données soient utilisées pour traiter ma demande.</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-send me-2"></i>Envoyer le message</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="contact-map" role="img" aria-label="Carte de localisation de l'agence">
            <span class="map-pin-pulse"></span>
            <i class="bi bi-geo-alt-fill map-pin"></i>
          </div>
          <div class="card p-4 mt-4">
            <h6 class="mb-3"><i class="bi bi-clock-history me-2 text-accent"></i>Horaires d'ouverture</h6>
            <ul class="list-unstyled d-grid gap-2 mb-0">
              <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Lundi – Vendredi</span><span class="fw-semibold">9h00 – 19h00</span></li>
              <li class="d-flex justify-content-between border-bottom pb-2"><span class="text-muted-2">Samedi</span><span class="fw-semibold">10h00 – 18h00</span></li>
              <li class="d-flex justify-content-between"><span class="text-muted-2">Dimanche</span><span class="fw-semibold text-danger">Fermé</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="section">
    <div class="container">
      <div class="section-head center mb-5">
        <span class="eyebrow">Questions fréquentes</span>
        <h2 class="section-title mt-2">Vous avez des questions&nbsp;?</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faq">
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">L'inscription est-elle gratuite&nbsp;?</button></h2>
              <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faq"><div class="accordion-body text-muted-2">Oui, la création d'un compte WebImmo est entièrement gratuite. Vous accédez aux annonces, aux alertes personnalisées et à la messagerie avec nos agents sans aucun frais.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">Comment obtenir une estimation de mon bien&nbsp;?</button></h2>
              <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body text-muted-2">Rendez-vous sur la page « Vendre » ou contactez-nous via ce formulaire. Un conseiller vous recontacte sous 24h pour réaliser une estimation gratuite et sans engagement.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">Les annonces sont-elles vérifiées&nbsp;?</button></h2>
              <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body text-muted-2">Chaque annonce publiée est contrôlée par nos équipes afin de garantir la fiabilité des informations et des photos. Un badge « Vérifié » est affiché sur les biens validés.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">Puis-je organiser une visite en ligne&nbsp;?</button></h2>
              <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body text-muted-2">Absolument. Depuis la fiche d'un bien, cliquez sur « Demander une visite ». Vous pourrez choisir un créneau et échanger directement avec l'agent responsable.</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FOOTER ===================== -->

  <?php require_once "../partials/footer.php" ?>
      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
