<?php get_header(); ?>
  <div class="content-area">
    <main>
      <section class="slide">
        <div class="container">
          <div class="row">
            Get Started With Akamai
          </div>
        </div>
      </section>
      <section class="middle-area">
        <div class="container">
          <div class="row">
            Middle Area
          </div>
        </div>
      </section>
      <section class="services">
        <div class="container">
          <div class="row">
            <?php 
              // If there are any posts
              if( have_posts() ):
                // while posts are found in db, show the posts to us before the endwhile
                while( have_posts() ): the_post();
            ?>

            <article>
              <h2><?php the_title(); ?></h2>
              <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
              <p>Categories: <?php the_category( ' ' ) ?></p>
              <p><?php the_tags( 'Tags: ', ', '); ?></p>
              <p><?php the_content(); ?></p>
            </article>

            <?php 
              endwhile;
              else:
            ?>

            <p>There's nothing yet to Display!</p>

            <?php endif; ?>

          </div>
        </div>
      </section>
    </main>
  </div>
 <?php get_footer(); ?>