<?php
/*
the file
*/
?>

<?php get_template_part( 'template-parts/custom', 'header' ); ?>
<!--POST-->

<section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><?php $heading_two_text = Kirki::get_option( 'saybers_options', 'text_blog' );
                            echo $heading_two_text; ?></h2>
                        <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                        <p class="sub-head"><?php $heading_two_text = Kirki::get_option( 'saybers_options', 'text_blog_dec' );
                            echo $heading_two_text; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">

        <?php
            $blog_args = array(
                'post_type'     =>  'post',
                /*NO OF POSTS ON PAGE*/
                'posts_per_page' => 9
            );
        $blog_posts = new WP_Query($blog_args);
        while($blog_posts->have_posts()) {
            $blog_posts->the_post();
        ?>
                <?php get_template_part('template-parts/small', 'content'); ?>

        <?php } ?>
        <?php wp_reset_postdata(); ?>
                
                                                    <!--INTERNAL POST-->
            </div>


            

            </div>
    </section>

<?php get_footer(); ?>
