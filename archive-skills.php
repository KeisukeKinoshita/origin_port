<?php get_header(); ?>
        <article class="skill">
            <div class="container">
                <div class="row">
                    <div id="skill_box" class="twelve columns">
                        <p>MY SKILL</p>
                    </div>
                </div>
				<!-- 投稿がなくなるまでrowクラスをループ-->
                <div class="row">
				<!-- 投稿を2つずつ表示　なくなるまでループ-->
                    <section>
                    <div id="<?php echo get_the_title(); ?>" class="five columns">
                        <div class="iconbox">
                            <img src="<?php get_template_directory_uri(); ?>/images/<?php wp_get_attachment_image($attachment_id:1,);?>" alt="html" srcset="<?php get_template_directory_uri();?>/images/<?php wp_get_attachment_image($attachment_id:2,)?>">
                            <img src="<?php get_template_directory_uri(); ?>/images/<?php wp_get_attachment_image($attachment_id:3); ?>" alt="css" srcset="<?php get_template_directory_uri(); ?>images/<?php wp_get_attachment_image($attachment_id:4);?>">
                        </div>
                        <div class="description">
                            <p><?php echo get_the_title(); ?></p>
                            <p><?php echo the_content();?></p>
                        </div>
                    </div>
					<!--ループ -->
                    </section>
				</div>
				<!-- ループ -->
            </div>
        </article>
<?php get_footer(); ?>