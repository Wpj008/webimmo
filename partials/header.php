<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null):?>

    <nav class="navbar navbar-expand-lg wi-navbar sticky-top py-3">
    <div class="container">
      <a class="navbar-brand wi-brand d-flex align-items-center gap-2" href="../index.php">
        <span class="brand-badge"><i class="bi bi-buildings"></i></span> Ky<span>Immo</span>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Menu">
        <i class="bi bi-list fs-2"></i>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto gap-lg-1">
          <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/properties.php">Biens</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/properties.php">Louer</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Agents</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/contact.php">Contact</a></li>
        </ul>
        <div class="d-flex align-items-center gap-2">
          <a href="../pages/dashboard.php" class="btn btn-outline-primary">Home</a>
       
        </div>
      </div>
    </div>
  </nav>

  <?php else:?>

    <nav class="navbar navbar-expand-lg wi-navbar sticky-top py-3">
    <div class="container">
      <a class="navbar-brand wi-brand d-flex align-items-center gap-2" href="../index.php"><span class="brand-badge"><i class="bi bi-buildings"></i></span> Web<span>Immo</span></a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Menu"><i class="bi bi-list fs-2"></i></button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto gap-lg-1">
          <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/properties.php">Acheter</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/properties.php">Louer</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Agents</a></li>
          <li class="nav-item"><a class="nav-link active" href="../pages/contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>



    <?php endif; ?>