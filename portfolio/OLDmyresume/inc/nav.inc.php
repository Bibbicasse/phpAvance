<!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">
  <nav id="navbar" class="navbar nav-menu">
    <ul>
      <li><a href="index.php?id=<?= $fiche['id_user'] ?? '' ?>" class="nav-link scrollto">
          <i class="bi bi-house"></i>
          <span>Accueil</span></a>
      </li>
      <li><a href="index.php?id=<?= $fiche['id_user'] ?? '' ?>#about" class="nav-link scrollto">
          <i class="bi bi-person-lines-fill"></i>
          <span>A propos</span></a>
      </li>
      <li><a href="index.php?id=<?= $fiche['id_user'] ?? '' ?>#skills" class="nav-link scrollto">
          <i class="bi bi-sliders"></i>
          <span>Compétences</span></a>
      </li>

      <li><a href="portfolio.php?id=<?= $fiche['id_user'] ?? '' ?>#portfolio" class="nav-link scrollto">
          <i class="bi bi-folder2-open"></i>
          <span>Portfolio</span></a>
      </li>
      <li><a href="resume.php?id=<?= $fiche['id_user'] ?? '' ?>#resume" class="nav-link scrollto">
          <i class="bi bi-file-earmark-person"></i>
          <span>CV</span></a>
      </li>
      <li><a href="contact.php?id=<?= $fiche['id_user'] ?? '' ?>#contact" class="nav-link scrollto">
          <i class="bi bi-envelope-fill"></i>
          <span>Contact</span></a>
      </li>

      <?php if (!isset($_SESSION['id_user'])) { ?>
        <li>
          <a href="login.php" class="nav-link scrollto">
            <i class="bi bi-box-arrow-right"></i>
            <span>Connexion</span>

          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="modifier.php#modifier" class="nav-link scrollto">
            <i class="bi bi-wrench"></i>
            <span>Mon Compte </span>
          </a>
        </li>
        <li>
          <a href="fiches/logout.php" class="nav-link scrollto">
            <i class="bi bi-box-arrow-left"></i>
            <span>Deconexion</span>
          </a>
        </li>
      <?php } ?>

    </ul>
  </nav><!-- .nav-menu -->
</header><!-- End Header -->