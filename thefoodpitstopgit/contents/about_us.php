<?php
/**
 * about_us.php
 * 
 * content for the about us page
 * 
 * @version 1.0 2018-04-19
 * @package The Food Pit Stop
 * @copyright (c) 2018, Anita Mirshahi, Suim Park, Valini Rangasamy
 * @license 
 * @since Release 1.0
 */

$items = array();

$items[0] = new Contact(array('first_name' => 'Anita',
    'last_name' => 'Mir',
    'image' => 'avatar1.jpg',
    'about' => '',
    'email' => 'anita@example.com',
    'phone' => '514-222-1235',
    'facebook' =>'https://www.facebook.com',
    'instagram' => 'https://www.instagram.com/?hl=en',
    'twitter' => 'https://twitter.com/?lang=en'));

$items[1] = new Contact(array('first_name' => 'Suim',
    'last_name' => 'Par',
    'image' => 'avatar2.jpg',
    'about' => '',
    'email' => 'suim@example.com',
    'phone' => '514-333-1335',
    'facebook' =>'https://www.facebook.com',
    'instagram' => 'https://www.instagram.com/?hl=en',
    'twitter' => 'https://twitter.com/?lang=en'));

$items[2] = new Contact(array('first_name' => 'Valini',
    'last_name' => 'Ran',
    'image' => 'avatar3.jpg',
    'about' => '',
    'email' => 'valini@example.com',
    'phone' => '514-444-1235',
    'facebook' =>'https://www.facebook.com',
    'instagram' => 'https://www.instagram.com/?hl=en',
    'twitter' => 'https://twitter.com/?lang=en'));
?>

<main class="page">
    <section class="clean-block about-us" style="background-color:rgba(184,156,132,0.28);">
        <div class="container">
            <div class="block-heading" style="margin-top:-38px;">
                <h1 style="color:#608e3a;">About Us</h1>
                <p>
                    the product information, ingredients, nutritional                    we do everything we can to make sure the information about the products we sell is always 
                    as accurate as possible. However, because products are regularly improved, 
 guides and dietary or 
                    allergy information may occasionally change. Please always read the label carefully 
                    before using or consuming any products.
                </p>
            </div>
            <!-- div contacts -->
            <div class="row justify-content-center">
                <?php foreach ($items as $i => $item) : ?>
                    <div class="col-sm-6<?php echo $i % 2; ?> col-lg-4<?php echo $i % 2; ?>">
                        <div class="card clean-card text-center">
                            <img class="card-img-top w-100 d-block" src="assets/img/avatars/<?php echo $item->getImage(); ?>">
                            <div class="card-body info">
                                <h4 class="card-title"><?php echo $item->contactName(); ?></h4>
                                <p class="card-text">
                                    About: <?php echo $item->getAbout(); ?><br />
                                    Email: <?php echo $item->getEmail(); ?><br />
                                    Phone: <?php echo $item->getPhone(); ?><br />
                                </p>
                                <div class="icons">
                                    <a href="<?php echo $item->getFacebook(); ?>"><i class="icon-social-facebook"></i></a>
                                    <a href="<?php echo $item->getInstagram(); ?>"><i class="icon-social-instagram"></i></a>
                                    <a href="<?php echo $item->getTwitter(); ?>"><i class="icon-social-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- end of div contacts -->
        </div>
    </section>
</main>
