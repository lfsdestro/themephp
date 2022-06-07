<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php 
        $highlights_query = rock_highlights_query();

      if ($highlights_query->have_posts()) {

          $i = 0;
          while ($highlights_query->have_posts()) {
              $highlights_query->the_post();

              $link = get_post_meta(get_the_ID(), 'link', true);

              ?>
        <div class="carousel-item <?php echo $i == 0 ? "active" : null ?> ">

            <?php the_post_thumbnail('highlights', array('class' => 'd-block w-100') ); ?>

            <div class="carousel-caption d-none d-md-block">
                <h5><?php the_title(); ?></h5>
                <?php the_content(); ?>

                <?php if(!empty($link)) { ?>
                <?php } ?>

                <a href="<?php echo $link ?>" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <?php
        $i++;           
        }

          wp_reset_postdata();
      } else {

      }
      ?>

    </div>
    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>