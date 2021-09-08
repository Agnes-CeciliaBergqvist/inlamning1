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
                    <!-- Hämtar titeln dynamsikt och permalink för att kunna bli länkad läsa hela inlägget-->
                    <a href="<?php  the_permalink(); ?>"><?php the_title();?></a>
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
                    <!-- Hämtar utdrag dynamiskt  -->
                   <?php the_excerpt(); ?>
                </p>
            </article>
            <?php } ?>
            <nav class="navigation pagination">
              
            <?php
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
                 <ul class="min-egen-class"> 
                  <!-- Menu for getting the side menu  -->
                <?php wp_nav_menu( array(
                        'theme_location' => 'side-menu', 
                        'menu_class' => "min-egen-class")); ?>
             
                <h2>Arkiv</h2>
                <?php get_archives();?>
              <li class="categories">
                <h2>Kategorier</h2>
                <ul>
                <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                    
                ) );

                foreach( $categories as $category ) {
                  echo '<li class="cat-item min-egen-class"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="text-white"> (' . $category->category_count . ')' . '</span></li>';
                } ?>
                </ul>
                
                </li>
              </ul>


          </div>
        </aside>
      </div>
    </div>
  </section>
</main>



<?php get_footer(); ?>