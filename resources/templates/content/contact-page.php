<?php
$isUserLoggedIn = is_user_logged_in();
$phone = get_field('phone');
$email = get_field('email');
$office = get_field('office');
$background_image = get_field('background_image');
$click_to_action_button_text = get_field('call_to_action_button');
$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$call_to_action_url = get_field('click_to_action_url');
$hero_size = get_field('hero_size');
?>

<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?>  demo-page">

    <div class="hero-container" style="background-image:url('<?= $background_image ?>')">
        <div class="container">
            <div class="hero row align-items-center text-center <? if($hero_size) echo 'half-size'?>">
                <div class="col-md-8  col-lg-6 offset-lg-3">
                    <div class="text">
                        <?php if (the_content()) : ?>
                            <? echo the_content() ?>
                        <?php endif ?>
                    </div>
                    <?php if ($click_to_action_button_text) : ?>
                        <div class="buttons">
                            <a class="button big cla-button" href="<?= $call_to_action_url ?>"><?= $click_to_action_button_text ?></a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-12 map-box">
                    <div class="contact-info-box">


                        <div class="contact-image">
                            <a href=""><img class="img-fluid" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_blue_logo_inc-xspace.png" alt="simpledoc" /></a>
                        </div>
                        <div>
                            <? if ($phone) : ?>
                            <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                            <? endif ?>
                            <?php if ($email) : ?>
                                <a href="to:<?= $email ?>"> <?= $email ?> </a>
                            <?php endif ?>
                            <?php if ($office) {
                                echo $office;
                            } ?>
                        </div>

                    </div>
                    <div id="map">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>