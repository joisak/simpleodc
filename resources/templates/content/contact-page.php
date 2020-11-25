<?php
$isUserLoggedIn = is_user_logged_in();
$phone = get_field('phone');
$email = get_field('email');
$office = get_field('office');
?>



<div class="<?php if ($isUserLoggedIn) {
                echo 'user-is-logged-in';
            } ?> ">

    <div class="container">
        <div class="contact">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3  text-center">
                    <?= the_content() ?>
                    <h4>Telefon</h4>
                    <?php if ($phone) {
                        echo $phone;
                    } ?>
                    <h4>E-post</h4>
                    <?php if ($email) : ?>
                        <a href="to:<?= $email ?>"> <?= $email ?> </a>
                    <?php endif ?>
                    <h4>Kontor</h4>
                    <?php if ($office) {
                        echo $office;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>