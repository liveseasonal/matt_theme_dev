<?php 

/*

Template Name: Single Blog

*/

?>

<p>I am home.php </p>


<?php get_header();  ?>


  <section class="section is-medium ">
    <div class="container">
      <div class="heading how-it-works-headings">
        <!-- <h1 class="title">How it works</h1> -->


        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
      
          <article class="post">
            
            <h1 class="title"><a href="the_permalink(); ?>"><?php the_title(); ?></a></h1>
            
            <ul class="post-meta no-bullet">
              <li class="author">
                  <span class="wpt-avatar small">
                    <?php echo get_avatar( get_the_author_metal('ID'), 24); ?>
                  </span>
                  by <?php the_author_posts_link(); ?>
              </li>
              <li class="cat">in <?php the_category(); ?></li>
              <li class="date">in <?php the_date(); ?></li>
            </ul>  

            <?php if(get_the_post_thumbnail() ): ?>
            <div class="img-container">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>  

            <?php comments_template(); ?>

            <?php the_content(); ?>

          </article>
      </div>  
    </div>
    <br>
    <br>
      
        
     
  </section>

  <?php endwhile; else : ?> 
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>