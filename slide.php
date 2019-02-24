<?php if (have_rows('home-slider')):
    while (have_rows('home-slider')): the_row();
        ?>

        <section class="pt0 pb0" id="home-slider">
            <div class="slider-all-controls">
                <ul class="slides">
                    <?php
                    // check for rows (sub repeater)
                    if (have_rows('slide')): ?>
                        <?php
                        // loop through rows (sub repeater)
                        while (have_rows('slide')): the_row();

                            // display each item as a list - with a class of completed ( if completed )
                            ?>
                            <li class="vid-bg image-bg overlay">
                                <div class="background-image-holder">
                                    <img alt="Background Image" class="background-image"
                                         src="<?php the_sub_field('image-slide'); ?>">
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <h1 class=""><?php the_sub_field('titre-slide'); ?></h1>

                                            <p class="lead">
                                                <?php the_sub_field('description-slide'); ?>
                                            </p>

                                            <a class="btn  btn-filled mt24"
                                               href="<?php the_sub_field('lien_bouton-slide'); ?>"> <i
                                                    class="ti-arrow-circle-down">
                                                    &nbsp;</i><?php the_sub_field('texte_bouton-slide'); ?></a>

                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </li>


                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </section>
    <?php endwhile; // while( has_sub_field('Slider') ):
    ?>
<?php endif; // if( get_field('Slider'') ): ?>
