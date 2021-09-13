<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
          <!-- Skriver ut queryn för sökresultatet -->
          <h1>Sökresultat för:"<?php echo esc_html( get_search_query( false ) ); ?>":
          </h1>
          
              <!-- Getting the function for searching form -->
              
                
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
              <li>
                <i class="fa fa-calendar"></i>
                <?php echo the_time('j'), " ",  the_time('F'), " ",  the_time('Y'); ?>
              </li>
              <li>
                <i class="fa fa-user"></i>
                <!-- Permalink to go to author and show author, dosent work? -->
                <?php the_author_posts_link();?>
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
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
