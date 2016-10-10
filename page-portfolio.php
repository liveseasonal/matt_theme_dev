<?php 

/*

Template Name: Portfolio Page

*/

?>

<p>I am page-portfolio.php</p>

<?php get_header();  ?>


  <section class="section is-medium ">
    <div class="container">
      <div class="heading how-it-works-headings">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <h1 class="title"><?php the_title(); ?></h1>
          <p>Test I am in page-portfolio</p>
        

        <?php the_content(); ?> 


      
      </div>
      <br>
      

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

        <div class="columns" id="how-it-works-images">

        <!-- <p>Am I visible????22222</p>

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

          <?php endwhile; endif; wp_reset_postdata(); ?> -->

        </div>  

        
      </div>
      <?php endwhile; endif; ?> 
    </div>


  </section>



<!-- <?php get_footer(); ?> -->