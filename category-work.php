<?php
/*
Template Name: work
*/
 get_header(); ?>
<?php
function myslider( $postid, $pcsp ) {
    ?>
        						<div class="<?php echo $pcsp; ?>">
                                    <div class="owl-carousel owl-theme">
                                        <?php  
                                        $slides= get_post_meta($postid, $pcsp, false);　?>
                                        <!--もし$slidesにpcという名のimageファイルがあるならwhile処理で吐き出させる-->
                                        <?php foreach($slides as $slide){
										echo "<div>";
										echo wp_get_attachment_image($slide);
										echo "</div>";
                                        }?>
                                    </div>
                                </div>
    <?php

}

?>
<article class="work">
    <div class="container">
        <div class="row">
            <div class="twelve columns" id="work_title">
                <p>MY WORK</p>
            </div>
        </div>
		    <?php if(have_posts()):
				while(have_posts()): the_post();?>
				<div class="row">
				<div  class="twelve columns">
    				    <div class="workbox">
    				        <?php
    				        myslider( $post->ID, 'pc' );
    				        myslider( $post->ID, 'sp' );
    				        ?>
        						
                        </div>
                        <div class="slide_title">
                            <p><?php echo the_title(); ?></p>
                        </div>

                    </div>
                </div>
        <?php endwhile;?>
	<?php endif; ?>
    
    </div>
</article>
<?php get_footer(); ?>