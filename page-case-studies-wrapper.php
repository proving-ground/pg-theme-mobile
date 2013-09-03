<?php
/*
Template Name: Case Study Wrapper
*/
?>


<?php
  function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
  }

?>
            <?php
             $pageid = $post->ID;
            ?>

<?php get_header(); ?>
			<div id="contentwrap">

				<div class="clearfix" role="main">

					    <div id="cases_wrapper">

                                <div id="homepage">
                                   Proving Ground  <br>
                                   develops digital  <br>
                                   products where   <br>
                                   commercial success  <br>
                                   is vital.
                                   <table>
                                      <tr>
                                        <td align="center">
                                        <a href="contact-mobile/" border="0">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-contact.png" />
                                        <br>
                                        Contact Us
                                        </a>
                                        </td>
                                        <td align="center">
                                        <a href="directions-mobile/" border="0">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-directions.png" />
                                        <br>
                                        Directions
                                        </a>
                                        </td>
                                        <td align="center">
                                        <a href="about-mobile/" border="0">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-about.png" />
                                        <br>
                                        About us
                                        </a>
                                        </td>
                                      </tr>
                                   </table>
                                   <img src="<?php bloginfo( 'template_url' ); ?>/img/homepage-arrow-case-studies.png" />
                                </div>



                                <?php $this_page_id = $pageid; ?>
                                <?php $page_count = 0; ?>



                                <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
                                    <?php ++$page_count; ?>

                                    <div class="case-item">

                                      <div class="case-Content"><?php the_content(); ?></div>

                                    </div>

                                <?php } ?>


                            </div> <!-- end article section -->

				</div> <!-- end #main -->



			</div> <!-- end #content -->


<?php get_footer(); ?>

