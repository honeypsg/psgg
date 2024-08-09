<!DOCTYPE html>
<html lang="en" class="m-0">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Syne&display=swap" rel="stylesheet">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head() ?> 
  <link />
</head>

<body <?php body_class(); ?>>
  <div class="headerWrap d-flex justify-content-center" >
    <header class="header">
      <div class= "row align-items-center w-100">
        <div class="col-md-2">  
          <div class="header--headerLogo">
            <a href="<?php echo home_url(); ?>" class="logo">
					    <?php echo wp_get_attachment_image(get_theme_mod( 'custom_logo' ),'full',false,array('class'=>'img-fluid header-logo'))?>
				    </a>
          </div>
        </div>
        <div class="col-md-7"> 
          <div class="header--headerMenu">
						<ul>
							<?php echo wp_nav_menu( array( 'items_wrap' => '%3$s', 'menu' => 17, 'container' => '' ) ); ?>
					  </ul>
          </div>
        </div>
        <div class="col-md-3 p-0">
          <div class="d-flex justify-content-end"> 
            <div class="header--headerContact">
              Contact Us
            </div>
          </div>
        </div>
      </div>
    </div>
 
    </header>
</div>
 