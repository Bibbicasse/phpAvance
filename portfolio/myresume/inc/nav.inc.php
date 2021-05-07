<nav id="navbar" class="navbar nav-menu">
  <ul>
    <li><a href="index.php#hero" class="nav-link scrollto">
        <i class="bi bi-house"></i>
        <span>Accueil</span></a>
    </li>
    <li><a href="index.php#about" class="nav-link scrollto">
        <i class="bi bi-person-lines-fill"></i>
        <span>A propos</span></a>
    </li>
    <li><a href="index.php#skills" class="nav-link scrollto">
        <i class="bi bi-sliders"></i>
        <span>Compétences</span></a>
    </li>

    <li><a href="portfolio.php#portfolio" class="nav-link scrollto">
        <i class="bi bi-folder2-open"></i>
        <span>Portfolio</span></a>
    </li>
    <li><a href="resume.php#resume" class="nav-link scrollto">
        <i class="bi bi-file-earmark-person"></i>
        <span>CV</span></a>
    </li>
    <li><a href="contact.php#contact" class="nav-link scrollto">
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
          <span>Modifier </span>
        </a>
      </li>
      <li>
        <a href="logout.php" class="nav-link scrollto">
          <i class="bi bi-box-arrow-left"></i>
          <span>Deconexion</span>
        </a>
      </li>
    <?php } ?>

  </ul>
</nav><!-- .nav-menu -->