<?php get_header();  ?>

   <!-- <section class="hero is-large">
    <div class="hero-body">
      <div class="container city-heading">
        <h1 class="title hero-title">
          Discover events around the city
        </h1>
        <br>
          <input class="input input-city" type="text" placeholder="Enter a city">
          <input class="input input-date" type="date" placeholder="Pick a date">
          <button class="button get-started">
            Get Started
          </button>
      </div>
    </div>
  </section> -->

  <p>I am page.php</p>

  <section class="section is-medium ">
    <div class="container">
      <div class="heading how-it-works-headings">
        <!-- <h1 class="title">How it works</h1> -->

        <h1 class="title"><?php the_title(); ?></h1>
        <?php echo do_shortcode("[huge_it_slider id='2']"); ?>

        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <!-- <h1 class="title"><?php the_title(); ?></h1> -->
        <p><?php the_content(); ?> </p>
      </div>
      <br>
      <br>
      <!-- <div class="how-it-works-images"> -->
        <!-- <div class="columns" id="how-it-works-images">
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
        </div> -->
        
      </div>
    </div>
  </section>

<?php endwhile; endif ; ?>
  

<?php get_footer(); ?>