<?php require_once('wp-load.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noah Miller <?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?php echo esc_url(get_bloginfo('stylesheet_url')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/favicon.png'); ?>" type="image/png">
</head>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XG1FZY9711"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XG1FZY9711');
</script>
	
  <body>
    <div class="container-sm p-5" id="header">  <!--Header-->

      <div class="container-fluid text-center" >

        <a href="<?php $siteURL = home_url(); echo $siteURL; ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_NM.png" alt="Noah Miller" class="img-fluid"></a>

        <div class="container d-flex justify-content-center">
          <nav class="navbar navbar-expand">
            <div class="container text-center">
              <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center">
                  <li class="nav-item d-inline <?php if (is_page('about-me')) echo 'active'; ?>">
                    <a class="nav-link" aria-current="page" href="<?php $siteURL = home_url(); echo $siteURL; ?>/about-me">About</a>
                  </li>
                  <li class="nav-item d-inline <?php if (is_page('illustrations')) echo 'active'; ?>">
                    <a class="nav-link" href="<?php $siteURL = home_url(); echo $siteURL; ?>/illustrations">Illustrations</a>
                  </li>
                  <li class="nav-item d-inline <?php if (is_page('thoughts')) echo 'active'; ?>">
                    <a class="nav-link" href="<?php $siteURL = home_url(); echo $siteURL; ?>/thoughts">Thoughts</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>                       

      </div>

    </div> <!--End Header-->