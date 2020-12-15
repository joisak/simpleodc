<?php
$isUserLoggedIn = is_user_logged_in();
$url = $_SERVER['REQUEST_URI'];
$page = basename($url);
$background_image = get_field('background_image');
$click_to_action_button_text = get_field('call_to_action_button');
$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$call_to_action_url = get_field('click_to_action_url');
$information = get_field('information');
?>

<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?>  demo-page">
   
            </div>


            </div>
    <div class="container">
        <div id="demo">
        <div id="demo-form">
            <?php echo do_shortcode("[formidable id=1 title=true description=true]"); ?>
        </div>

        <div class="information">
                <?php if($information) : ?>
                <?php $index = 0 ?>
                <?php foreach($information as $case) : ?>
                    <div class="row d-flex align-items-center py-3 py-md-5">
                        
                        <div class="<?php if($index % 2 !== 0) { echo 'order-md-last'; }  ?> col-md-6">
                            <h2><?= $case['header']?></h2>
                            <div class="<?php if($case['button_text']) { echo 'pb-3'; }?> information-text">
                                <?=$case['text']?>
                            </div>
                            <?php if($case['button_text']) :?>
                                <a class="button big cla-button my-4" href="<?=$case['button_url']?>"><?php echo $case['button_text'] ?></a>
                            <?php endif ?>
                        </div>
                        <div class="<?php if($index % 2 !== 0) { echo 'order-md-first'; } ?> col-md-6">
                            <div class="col-md-8 offset-md-2">
                                <img class="img-fluid pb-3" src="<?= $case['image']['url'] ?>">
                            </div>
                        </div>
                        <?php $index++ ?>
                    </div>
                <? endforeach ?>
                <? endif ?>
        </div>
    </div>
        </div>
        
 
</div>