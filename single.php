<?php get_header(); ?>

<!-- Loop för att hämta alla inlägg enligt "the loop" -->
<?php while(have_posts()){
              //   Skiver ut själva posten som den är på 
              the_post();
              
              ?>
              <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
            <article>
                <!-- Hämtar endast url till thumbnailen -->
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <h2 class="title">
                    <!-- Hämtar titeln dynamsikt och permalink för att kunna bli länkad läsa hela inlägget-->
                    <?php the_title();?>
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
                   <?php the_content(); ?>
                </p>
            </article>
            <?php 
        } ?>
        </div>
    </div>
    </div>
    </section>
    </main>

<?php get_footer(); ?> 