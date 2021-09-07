<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Blogg</h1>
          <!-- Loop för att hämta alla inlägg enligt "the loop" -->
          <?php while(have_posts()){
              //   Skiver ut själva posten som den är på 
              the_post();
              
              ?>
            <article>
                <!-- Hämtar endast url till thumbnailen -->
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <h2 class="title">
                    <!-- Hämtar titeln dynamsikt -->
                    <a href="inlagg.html"><?php the_title();?> <?php the_permalink(); ?></a>
                </h2>
                <ul class="meta">
                  <!-- Geting the time, month, year -->
                    <li><i class="fa fa-calendar"></i> <?php echo the_time('j'), " ",  the_time('F'), " ",  the_time('Y'); ?></li>
                    <li>
                        <i class="fa fa-user"></i>
                        <a href="forfattare.html"><?php the_author(); ?></a>
                    </li>
                    <li>
                        <i class="fa fa-tag"></i>
                        <!-- Hämtar upp de olika kategorierna -->
                        <?php echo get_the_category_list(", ");?>
                    </li>
                </ul>
                <p>
                    <!-- Hämtar content dynamiskt  -->
                   <?php the_content(); ?>
                </p>
            </article>
        <nav class="navigation pagination">

        <?php }

        // Shows the pagination 
        echo paginate_links(); ?>

        </nav>

        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <form id="searchform" class="searchform">
                  <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                  </div>
                </form>
              </li>
            </ul>
            <ul role="navigation">
              <li class="pagenav">
                <h2>Sidor</h2>
                <ul>
                  <!-- Menu for getting the side menu  -->
                <?php wp_nav_menu( array(
                        'theme_location' => 'side-menu', 
                        'menu_class' => "side-menu")); ?>
              <li>
                <h2>Arkiv</h2>
                <!-- Getting the menu for arcive -->
                <?php wp_nav_menu( array(
                        'theme_location' =>
            			      'arcive-menu', 'menu_class' => "side-menu")); ?>
              
              <li class="categories">
                <h2>Kategorier</h2>
                <!-- Getting the menu for category -->
                <?php wp_nav_menu( array(
                        'theme_location' =>
            			      'category-menu', 'menu_class' => "side-menu")); ?>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>



<?php get_footer(); ?>