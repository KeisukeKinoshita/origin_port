<?php
/*
Template Name: contact
*/ 
get_header(); ?>
<article class="contact">
    <div class="container">
        <div class="row">
            <div class="six columns">
                <p>ご連絡はこちらから</p>
                <ul>
                    <li><a href='<?php echo $mail = get_post_meta($post->ID,"mail",true); ?>'><img src='<?php echo get_template_directory_uri(); ?>/images/mail.png' srcset='<?php echo get_template_directory_uri(); ?>/images/mail@2x.png'></a></li>
                    <li><a href='https://github.com/<?php echo $git = get_post_meta($post->ID,"git", true); ?>'><img src='<?php echo get_template_directory_uri(); ?>/images/github.png' srcset='<?php echo get_template_directory_uri(); ?>/images/github@2x.png'></a></li>
                    <li><a href='<?php echo $tel = get_post_meta($post->ID,"tel",true); ?>'><img src='<?php echo get_template_directory_uri(); ?>/images/tel.png' srcset='<?php echo get_template_directory_uri(); ?>/images/tel@2x.png'></a></li>
                </ul>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>