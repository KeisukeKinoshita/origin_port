<?php get_header(); ?>
        <article class="skill">
            <div class="container">
                <div class="row">
                    <div id="skill_box" class="twelve columns">
                        <p>MY SKILL</p>
                    </div>
                </div>
                  <?php $count = 0;?>
                  <?php while(have_posts()): the_post(); ?>
                  <!--ループ -->
                    <?php $count+= 1;?>
                    <?php if($count ==1): ?>
                        <div class="row">
                    <?php endif ?>
                        <section>
                        <div id="<?php echo get_the_title(); ?>" class="five columns">
                            <div class="iconbox">
                                <?php $icon = get_post_meta($post->ID,"skill-icon",true);?>
                                <?php echo wp_get_attachment_image($icon); ?>
                            </div>
                            <div class="description">
                                <p><?php echo get_the_title(); ?></p>
                                <p><?php echo the_content();?></p>
                            </div>
                        </div>
                        </section>
                    <?php if($count == 2): ?>
                        </div>
                    <?php $count = 0;?>
                    <?php endif ?>
                    <?php endwhile ?>
				<!-- ループ -->
            </div>
        </article>
<?php get_footer(); ?>