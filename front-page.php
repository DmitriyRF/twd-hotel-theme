<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$theme_options                  = get_option('twd_opts');
$name                           = __('TWD','twd');

    global $wpdb;
    $table_name                 = $wpdb->get_blog_prefix() . 'twd_hotels';
    $table_objects              = $wpdb->get_results("SELECT * FROM $table_name LIMIT 3");


get_header($name); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main main" role="main">
        <section id="about" class="bg-grey-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <div class="wrapper-for-hide">
                            <img class="img img-about" src="<?php  if( !empty($theme_options['about_us_img']) ){echo $theme_options['about_us_img'];} ?>" alt="image for about digital agency of hotels">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="colomn-about">
                            <div class="text-center">
                                <i class="fa fa-3x fa-users" aria-hidden="true"></i>
                            </div>
                            <h1 class="h1-about">
                                <?php
                                        if( !empty($theme_options['about_us_header']) ){
                                            echo $theme_options['about_us_header'];
                                        }
                                ?>
                            </h1>
                            <p class="p-about">
                                <?php
                                    if( !empty($theme_options['about_us_text']) ){
                                                echo $theme_options['about_us_text'];
                                    } 
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="suggestions" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="text-center">
                            <i class="fa fa-3x fa-bed" aria-hidden="true"></i>
                        </div>
                        <h1 class="h1-section">Hotel suggestions</h1>
                        <p class="p-description-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                    </div>
                </div>
                <div class="row">
                <?php
                    foreach ($table_objects as $key => $hotel) {
                                    // hotel_id
                                    // hotel_name 
                                    // hotel_description
                                    // hotel_loves
                                    // hotel_image_url
                                    // hotel_amenities
                                    // hotel_contacts
                ?>    
                    <div class="col-xs-12 col-sm-4">
                        <div class="hotel-wrapper">
                            <?php
                                $any_images =  explode('| ', $hotel->hotel_image_url);
                            ?>
                            <div class="slider">
                                <div id="carousel-hotel<?php echo $key; ?>-generic" class="carousel slide" data-wrap="true" data-ride="carousel" data-interval="false">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                    <?php 
                                            $count_of_images = count($any_images);
                                            for ($i = 0; $i < $count_of_images; $i++) {
                                    ?>                                    
                                        <li data-target="#carousel-hotel<?php echo $key; ?>-generic" data-slide-to="<?php echo $i; ?>" <?php echo $i == 0 ? 'class="active"' : ''?>></li>
                                    <?php 
                                            }
                                    ?>                                        
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                    <?php 
                                        $f_num = 0;
                                        foreach ($any_images as $image) {
                                            if( $image != ''){
                                                $f_num++;
                                    ?>                                    
                                        <div class="item <?php echo $f_num == 1 ? "active" : ""?>">
                                            <img src="<?php echo $image; ?>" alt="image of hotel">
                                        </div>
                                    <?php 
                                            }
                                        }
                                    ?>                                        
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-hotel<?php echo $key; ?>-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-hotel<?php echo $key; ?>-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                            <?php

                            ?>                            
                            <h3 class="h-hotel-name"><?php _e($hotel->hotel_name,'twd') ?></h3>
                            <p class="p-hotel-description"><?php _e($hotel->hotel_description,'twd') ?></p>
                            <div class="what-to-love">
                                <h5 class="h-love-hotel">What to love?</h5>
                                <table class="table table-hotel">
                                    <?php 
                                        $any_facts =  explode('| ', $hotel->hotel_loves);
                                         $f_num = 0;
                                        foreach ($any_facts as $fact) {
                                            if( $fact != '' ){
                                                $f_num++;
                                    ?>
                                            <tr>
                                                <td class="td-col-1">Fact <?php echo $f_num; ?></td>
                                                <td class="td-col-2"><?php echo $fact; ?></td>
                                            </tr>
                                     <?php
                                            }
                                        }
                                     ?>
                                </table>
                            </div>
                            <div class="amenities">
                                <h5 class="h-amenities-hotel">TWD amenities</h5>
                                <ul class="ul-amenities">
                                    
                                    <?php 
                                        $any_amenities =  explode('| ', $hotel->hotel_amenities);
                                        $f_num = 0;
                                        foreach ($any_amenities as $amenite) {
                                            if( $amenite != '' ){
                                                $f_num++;
                                    ?>
                                            <li><?php echo $amenite; ?></li>
                                     <?php
                                            }
                                        }
                                     ?>
                                </ul>
                            </div>
                            <div class="contacts">
                                <h5 class="h-contact-hotel">Contacts</h5>
                                <?php  $any_contacts =  explode('| ', $hotel->hotel_contacts);?>
                                <table class="table">
                                    <tbody class="tbody table-contacts">
                                    <?php if ($any_contacts[0] != '') {
                                    ?>                                        
                                    <tr>
                                        <td>Country</td>
                                        <td><?php echo $any_contacts[0]; ?></td>
                                    </tr>
                                    <?php
                                    }if ($any_contacts[1] != '') {
                                    ?>                                                                            
                                    <tr>
                                        <td>Town</td>
                                        <td><?php echo $any_contacts[1]; ?></td>
                                    </tr>
                                    <?php
                                    }if ($any_contacts[2] != '') {
                                    ?>
                                    <tr>
                                        <td>Phone</td>
                                        <td><?php echo $any_contacts[2]; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php
                    }               
                ?>        
                </div>
            </div>
        </section>
        <section id="services" class="parallax-window" data-parallax="scroll" data-image-src="img/baner-bg-paralax-b.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="text-center">
                            <i class="fa fa-3x fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <h1 class="h1-section">Our services</h1>
                        <p class="p-description-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="service-wrapper">
                            <div class="icon-service">
                                <div class="icon512 icon-num-1"></div>
                            </div>
                            <h6 class="h-service-name">Content Creation</h6>
                            <ul class="ul-service-point">
                                <li>Lorem ipsum dolor.</li>
                                <li>Facere eligendi, sint.</li>
                                <li>Ipsum, totam, unde!</li>
                                <li>Hic, aperiam, quibusdam.</li>
                                <li>Eaque, dolorem, est.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="service-wrapper">
                            <div class="icon-service">
                                <div class="icon512 icon-num-2"></div>
                            </div>
                            <h6 class="h-service-name">Data and Analytics</h6>
                            <ul class="ul-service-point">
                                <li>Lorem ipsum dolor.</li>
                                <li>Corrupti, in tempore.</li>
                                <li>Sequi perferendis, delectus?</li>
                                <li>Consequuntur, velit, ipsa.</li>
                                <li>Eos consequatur, fugit!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="service-wrapper">
                            <div class="icon-service">
                                <div class="icon512 icon-num-3"></div>
                            </div>
                            <h6 class="h-service-name">Account Management</h6>
                            <ul class="ul-service-point">
                                <li>Lorem ipsum dolor.</li>
                                <li>Nam consequuntur, illo?</li>
                                <li>Totam, aperiam saepe.</li>
                                <li>Delectus, deserunt nisi.</li>
                                <li>Laborum, ipsam ullam.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="service-wrapper">
                            <div class="icon-service">
                                <div class="icon512 icon-num-4"></div>
                            </div>
                            <h6 class="h-service-name">Instagram Advertising</h6>
                            <ul class="ul-service-point">
                                <li>Lorem ipsum dolor.</li>
                                <li>Delectus, rerum, dolor.</li>
                                <li>Temporibus, doloribus, assumenda.</li>
                                <li>Id, cupiditate, omnis.</li>
                                <li>Consectetur, pariatur, sequi.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="form" class="">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <i class="fa fa-3x fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <h1 class="h1-section">Subscribe</h1>
                    <p class="p-description-subscribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus obcaecati dolor quis vel eos natus ratione cupiditate quia sapiente reprehenderit voluptas repellendus, culpa, cum provident? Tempora dolorum quam recusandae.</p>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                            <?php echo do_shortcode('[contact-form-7 id="38" title="Sub"]');?>
                    </div>
                </div>
            </div>
        </section>
        <section id="instagram" class="bg-grey-lighter">
            <?php dynamic_sidebar( 'sidebar-for-shotrcode' ); ?>
        </section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer($name);?>




<!-- <div class="input-group group-subscribe">
[email* your-email class:input-subscribe class:form-control placeholder "Enter your email"]
<span class="input-group-btn">
[submit class:btn class:button-subscribe "Subscribe"]
</span> 
</div> -->