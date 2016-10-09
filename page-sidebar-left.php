<?php 

/*

Template Name: Left Sidebar 

*/

?>


<?php get_header();  ?>


  <section class="section is-medium ">
    <div class="container">
      <div class="heading how-it-works-headings">
        <!-- <h1 class="title">How it works</h1> -->
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <h1 class="title"><?php the_title(); ?></h1>
        <p><?php the_content(); ?> </p>
      </div>
      <br>
      <br>
      <!-- <div class="how-it-works-images"> -->
        <div class="columns" id="how-it-works-images">
          <div class="column is-4 ">


            <img src="phone_in_the_country.jpg"/>
            <br>
            <p><strong>Browse Events</strong></p>
            <br>
            <p> We bring together a variety of events recommended by industry experts</p>
          </div>
          <div class="column is-4">
            <img src="man_photos_city.jpeg"/>
            <br>
            <p><strong>Create an Itinerary</strong></p>
            <br>
            <p> Select your favourite events and create an itinerary for you and your friends<p>
          </div>
          <div class="column is-4">
          <img src="on_the_beach.jpg"/>
          <br>
            <p><strong>Enjoy your experience</strong></p>
            <br>
            <p> Meet new people, try new things and enjoy all the city has to offer</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>