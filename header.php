<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
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
              <a class="logo" href="index.html">Labb 1</a>
            </div>
            <div class="col-sm-6 hidden-xs">
              <form id="searchform" class="searchform">
                <div>
                  <label class="screen-reader-text">Sök efter:</label>
                  <input type="text" />
                  <input type="submit" value="Sök" />
                </div>
              </form>
            </div>
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
        <form id="searchform" class="searchform">
          <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" />
            <input type="submit" value="Sök" />
          </div>
        </form>
      </div>

      <nav id="nav">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="menu">
                <li class="current-menu-item">
					<!-- Function to get the menu in the header -->
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => "nav"

                                    )); ?> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>
