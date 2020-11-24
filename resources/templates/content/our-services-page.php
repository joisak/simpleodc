<?php
    $isUserLoggedIn = is_user_logged_in();
    $our_services = get_field('our_services');
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
</div>