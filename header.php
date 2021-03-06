<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labb 1</title>
	<!-- Function to fire the wp_head action to shown on the frontend -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap">
      <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-8 col-sm-6">
              <a class="logo" href="<?php site_url(' / ') ?>">Labb 1</a>
            </div>
            <div class="col-sm-6 hidden-xs">
            <!-- Getting the function for searching form -->
            <?php get_search_form(); ?>
                <div>
                  
            <div class="col-xs-4 text-right visible-xs">
              <div class="mobile-menu-wrap">
         
                <i class="fa fa-search"></i>
                <i class="fa fa-bars menu-icon"></i>
               
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="mobile-search">

        <<?php get_search_form(); ?>
      </div>

      <nav id="nav">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
             
					<!-- Function to get the menu in the header for mobile and wide screens.  -->
					<?php wp_nav_menu( array( 'container' => 'ul', 'theme_location' => 'main-menu'

                                    )); ?> 
              
            </div>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>
