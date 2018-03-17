<?php
/*
Template Name: work
*/
 get_header(); ?>
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
        						<div class="pc">
                                    <div class="owl-carousel owl-theme">
                                        <?php  
                                        $slides = get_post_meta($post->ID,"pc",false);　?>
                                        <!--もし$slidesにpcという名のimageファイルがあるならwhile処理で吐き出させる-->
                                        <?php foreach($slides as $slide){
										echo "<div>";
										echo wp_get_attachment_image($slide);
										echo "</div>";
                                        }?>
                                    </div>
                                </div>
                                <div class="sp">
                                    <div class="owl-carousel owl-theme">
                                       <?php  $slide = get_post_meta($post->ID,"sp",false);?>
                                       <!--もし$slideにspという名のimageファイルがあるならwhile処理で吐き出させる-->
                                        <?php foreach($slides as $slide){
										echo "<div>";
										echo wp_get_attachment_image($slide);
										echo "</div>";
                                        }?>
                                    </div>
                                </div>
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