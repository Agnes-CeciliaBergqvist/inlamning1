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
                    <a href="inlagg.html"><?php the_title();?></a>
                </h2>
                <ul class="meta">
                    <li><i class="fa fa-calendar"></i> <?php echo the_time('j'), " ",  the_time('F'), " ",  the_time('Y'); ?></li>
                    <li>
                        <i class="fa fa-user"></i>
                        <a href="forfattare.html"><?php the_author(); ?></a>
                    </li>
                    <li>
                        <i class="fa fa-tag"></i>
                        <?php echo get_the_category_list(", ");?>
                    </li>
                </ul>
                <p>
                    <!-- Hämtar content dynamiskt  -->
                   <?php the_content(); ?>
                </p>
            </article>
        <nav class="navigation pagination">


            <!-- 
            <h2 class="screen-reader-text">Inläggsnavigering</h2>
            <a class="prev page-numbers" href="">Föregående</a>
            <span class="page-numbers current">1</span>
            <a class="page-numbers" href="">2</a>
            <a class="next page-numbers" href="">Nästa</a> -->

        <?php }

        echo paginate_links(); 
        
        ?>

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
                  <li class="page_item current_page_item">
                    <a href="">Blogg</a>
                  </li>
                  <li class="page_item">
                    <a href="">Exempelsida</a>
                  </li>
                  <li class="page_item">
                    <a href="">Kontakt</a>
                  </li>
                  <li class="page_item page_item_has_children">
                    <a href="">Om mig</a>
                    <ul class="children">
                      <li class="page_item">
                        <a href="">Intressen</a>
                      </li>
                      <li class="page_item page_item_has_children">
                        <a href="">Portfolio</a>
                        <ul class="children">
                          <li class="page_item">
                            <a href="">Projekt 1</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="page_item">
                    <a href="">Startsida</a>
                  </li>
                </ul>
              </li>
              <li>
                <h2>Arkiv</h2>
                <ul>
                  <li>
                    <a href="arkiv.html">oktober 2016</a>
                  </li>
                </ul>
              </li>
              <li class="categories">
                <h2>Kategorier</h2>
                <ul>
                  <li class="cat-item"><a href="">Natur</a> (1)</li>
                  <li class="cat-item"><a href="">Okategoriserade</a> (3)</li>
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