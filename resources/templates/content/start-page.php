<?php
$background_image = get_field('background_image');
$click_to_action_button_text = get_field('call_to_action_button');
$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$call_to_action_url = get_field('click_to_action_url');
?>



<div class="start-page align-items-center d-flex" style="background-image:url('<?= $background_image ?>')">
    <div class="container">
        <div class="hero row align-middle">
            <div class="col-md-6">
                <?php if (the_content()) : ?>
                    <? echo the_content() ?>
                <?php endif ?>
                <?php if ($click_to_action_button_text) : ?>
                    <a href="<?= $call_to_action_url ?>"><?= $click_to_action_button_text ?></a>
                <?php endif ?>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="col-xs-3 col-md-6 ">
                    <?php if ($feat_image) : ?>
                        <img class="img-fluid" src="<?= $feat_image ?>" alt="Simpledoc logo" />
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>