<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <meta
      name="description"
      content="Discover flexible learning opportunities from Continence Learning, the premier online platform developed by Australia's peak body for bladder and bowel health. Explore evidence-based courses and resources to enhance your knowledge and skills in continence management. Start your educational journey today."
    />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/navbar-logo.webp" alt="Continence-Learning Logo" width="413" height="232">
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <a href="#" class="nav-item nav-link ps-lg-5">About</a>
            <a href="#" class="nav-item nav-link">Learning Options</a>
            <a href="#" class="nav-item nav-link">For Employers</a>
            <a href="#" class="nav-item nav-link">Contact</a>
          </div>
          <div class="navbar-nav ms-auto">
            <div class="navbar__loginbtn__container">
              <p class="d-none d-lg-flex">Already have an account?</p>
              <a href="#" class="nav-item nav-link isLoginLink">Login</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->
