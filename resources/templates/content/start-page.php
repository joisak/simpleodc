<?php
$isUserLoggedIn = is_user_logged_in();
$background_image = get_field('background_image');
$click_to_action_button_text = get_field('call_to_action_button');
$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$call_to_action_url = get_field('click_to_action_url');
$information = get_field('information');
?>



<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?>  start-page align-items-center  flex-sm-wrap-reverse">
            <div class="hero-container" style="background-image:url('<?= $background_image ?>')"> 
            <div class="container">
            <div class="hero row d-flex align-items-center">
            <div class="col-md-6">
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
            <div class="col-md-6 d-flex justify-content-center align-items-center order-first order-md-last">
                <div class="col-xs-3 col-md-8 text-center">
                    <?php if ($feat_image) : ?>
                        <img class="img-fluid" src="<?= $feat_image ?>" alt="Simpledoc logo" />
                    <?php endif ?>
                </div>
            </div>
        </div>
            </div>


            </div>
    <div class="container">

        <div class="information">
           
                <?php $index = 0 ?>
                <?php foreach($information as $case) : ?>
                    <div class="row d-flex align-items-center">
                        <div class="<?php if($index % 2 !== 0) { echo 'order-md-last'; }  ?> col-md-6">
                            <h2><?= $case['header']?></h2>
                            <div class="information-text">
                                <?=$case['text']?>
                            </div>
                        </div>
                        <div class="<?php if($index % 2 !== 0) { echo 'order-md-first'; } ?> col-md-6">
                            <img class="img-fluid" src="<?= $case['image']['url'] ?>">
                        </div>
                        <?php $index++ ?>
                    </div>
                <? endforeach ?>
        </div>
    </div>
</div>