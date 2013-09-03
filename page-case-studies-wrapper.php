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

				<div class="span12 clearfix" role="main">

					    <article id="post-<?php echo $pageid; ?>" role="article">


                            <section id="cases_wrapper">

                                <div id="homepage">
                                   Proving Ground  <br>
                                   develops digital  <br>
                                   products where   <br>
                                   commercial success  <br>
                                   is vital.
                                   <table>
                                      <tr>
                                        <td align="center">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-contact.png" />
                                        <br>
                                        Contact Us
                                        </td>
                                        <td align="center">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-directions.png" />
                                        <br>
                                        Directions
                                        </td>
                                        <td align="center">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/img/ico-about.png" />
                                        <br>
                                        About us
                                        </td>
                                      </tr>
                                   </table>
                                   <img src="<?php bloginfo( 'template_url' ); ?>/img/homepage-arrow-case-studies.png" />
                                </div>



                                <?php $this_page_id = $pageid; ?>
                                <?php $page_count = 0; ?>



                                <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
                                    <?php ++$page_count; ?>

                                    <div class="case_item  <?php if ($page_count==1) echo 'active'; ?>">

                                      <div id="case-Content"><?php the_content(); ?></div>

                                    </div>

                                <?php } ?>


                            </section> <!-- end article section -->

                            <footer>

                                <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>

                            </footer> <!-- end article footer -->

                        </article> <!-- end article -->

				</div> <!-- end #main -->



			</div> <!-- end #content -->


<?php get_footer(); ?>

