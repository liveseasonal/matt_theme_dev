<?php 

/*

Template Name: Portfolio Page

*/

?>

<?php 

        $args = array(
          'post_type' => 'portfolio_tests',
          'posts_per_page' => 2
        );
        $query = new WP_Query($args);

      ?>

      <p>Am I visible????</p>

      <div class='test'>Hello

          <?php if($query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="column is-4 ">

            <p>Am I visiblecolumn is 4</p>

            <a href='<?php the_permalink(); ?>'>
              <?php the_post_thumbnail('large'); ?></a>
              <br>
              <p><strong>Browse Events</strong></p>
              <br>
              <p> We bring together a variety of events recommended by industry experts</p>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?> 


      </div>

      <?php get_template_part('content', 'portfolio'); ?>

         
      <?php get_footer(); ?>

