<?php
    $isUserLoggedIn = is_user_logged_in();
    $our_services = get_field('our_services');
    $middle_segment = get_field('middle_segment');
    $our_products_presentation_text = get_field('presentation_text');
    $our_products = get_field('our_products');
    $background_image = get_field('background_image');
    $click_to_action_button_text = get_field('call_to_action_button');
    $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $call_to_action_url = get_field('click_to_action_url');
    $hero_size = get_field('hero_size');
?>



<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?> ">
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

        <div class="our-products">
           
                <?php $index = 0 ?>
                <?php if($our_services) : ?>
                    <?php foreach($our_services as $service) : ?>
                        <div class="row d-flex align-items-center py-5">
                            <div class="<?php if($index % 2 !== 0) { echo 'order-md-last'; }  ?> col-md-6">
                                <h2><?= $service['header']?></h2>
                                <div class="information-text">
                                    <?=$service['service_text']?>
                                </div>
                            </div>
                            <div class="<?php if($index % 2 !== 0) { echo 'order-md-first'; } ?> col-md-6 icon-full">
                                <div class="col-8 offset-2 col-md-6 offset-md-3 text-center">
                                    <?=$service['service_image_svg']?>
                                </div>
                            </div>
                            <?php $index++ ?>
                        </div>
                    <? endforeach ?>
                <? endif ?>
        </div>
    </div>
    <div class="container-fluid middle-segment">
    <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <?php if($middle_segment) : ?>
                    <?php echo $middle_segment ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="container our-products">
        <div class="row pb-5">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <?php if($middle_segment) : ?>
                    <?php echo $our_products_presentation_text ?>
                <?php endif ?>
            </div>
        </div>
        <div class="row our-products-information">
            <? if($our_products) :?>
                <?php foreach($our_products as $products) : ?>
                    <div class="col-md-6 d-flex pb-5">
                        <img class="img-fluid" src="<?= $products['image']['url']?>" alt="Simpledoc product">
                        <div class="pl-3">
                            <h4><?= $products['header'] ?></h4>
                            <p><?= $products['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <? endif ?>
        </div>
    </div>
</div>