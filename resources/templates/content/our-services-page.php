<?php
    $isUserLoggedIn = is_user_logged_in();
    $our_services = get_field('our_services');
    $middle_segment = get_field('middle_segment');
    $our_products_presentation_text = get_field('presentation_text');
    $our_products = get_field('our_products');
?>



<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?> ">
          
            <div class="container">
                <div class="our-services">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3  text-center">
                        <?= the_content()?>    
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