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
                $slides = get_post_meta($postid, $pcsp, false);　?>
                <!--もし$slidesにpcという名のimageファイルがあるならwhile処理で吐き出させる-->
                <?php foreach($slides as $slide){
				echo "<div>";
				echo wp_get_attachment_image($slide);
				echo "</div>";
                }?>
            </div>
        </div>
<?php } ?>
<article class="work">
    <div class="container">
        <div class="row">
            <div class="twelve columns" id="work_title">
                <p>MY WORK</p>
            </div>
        </div>
        <form method="get" id="searchform" action='<?php bloginfo("url")?>'>
            <label for="s" class="assistive-text">検索</label>
            <input type="text" name="s" id="s" placeholder="検索"/>
            <input type="submit" value="検索"/>
        </form>
        <!-- url 管理画面の設定＞一般で設定されたurlを表示するものwp_optionsテーブルのhomeレコードから取得-->
        <?php /*get_searchform();*/ ?>
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
            <?php endwhile; ?>
            <?php endif; ?>

    </div>
</article>
<?php get_footer(); ?>