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
$name ='twd';
get_header($name); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main main" role="main">
        <section id="about" class="bg-grey-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <div class="wrapper-for-hide">
                            <img class="img img-about" src="img/about-twd.png" alt="image for about digital agency of hotels">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="colomn-about">
                            <div class="text-center">
                                <i class="fa fa-3x fa-users" aria-hidden="true"></i>
                            </div>
                            <h1 class="h1-about">About us</h1>
                            <p class="p-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quod modi, voluptas ab. Atque, vel. Iure repudiandae aliquid, accusantium iste vero eligendi magni minus, fugiat repellendus consequatur blanditiis earum tempore!</p>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Quam, aut officiis dolore.</li>
                                <li>Neque voluptas perferendis itaque.</li>
                                <li>Nostrum enim rerum labore.</li>
                            </ul>
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
                    <div class="col-xs-12 col-sm-4">
                        <div class="hotel-wrapper">
                            <div class="slider">
                                <div id="carousel-hotel1-generic" class="carousel slide" data-wrap="true" data-ride="carousel" data-interval="false">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-hotel1-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-hotel1-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-hotel1-generic" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/hotels/1.jpg" alt="image of hotel">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/2.jpg" alt="image of hote">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/3.jpg" alt="image of hote">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-hotel1-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-hotel1-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="h-hotel-name">Hotel five likes</h3>
                            <p class="p-hotel-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde laudantium ratione obcaecati doloribus dignissimos ea sunt atque quibusdam sint ipsam.</p>
                            <div class="what-to-love">
                                <h5 class="h-love-hotel">What to love?</h5>
                                <table class="table">
                                    <!-- 			<caption class="caption-table-hotel">What to love?</caption> -->
                                    <tbody class="table-hotel">
                                    <tr>
                                        <td class="td-col-1">Fact 1</td>
                                        <td class="td-col-2">F1 description...</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 2</td>
                                        <td>F2 description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, dolorem.</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 3</td>
                                        <td>F3 description...</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="amenities">
                                <h5 class="h-amenities-hotel">TWD amenities</h5>
                                <ul class="ul-amenities">
                                    <li>Good</li>
                                    <li>Cool</li>
                                    <li>Best</li>
                                    <li>Greate</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil natus rerum, veritatis omnis ducimus molestias vero voluptates consequuntur quas ratione reiciendis mollitia maiores hic exercitationem est tempora, dolorum tenetur eaque.</li>
                                </ul>
                            </div>
                            <div class="contacts">
                                <h5 class="h-contact-hotel">Contacts</h5>
                                <table class="table">
                                    <tbody class="tbody table-contacts">
                                    <tr>
                                        <td>Country</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Town</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Main street 92</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>+135 125-15-54</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="hotel-wrapper">
                            <div class="slider">
                                <div id="carousel-hotel2-generic" class="carousel slide" data-wrap="true" data-ride="carousel" data-interval="false">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-hotel2-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-hotel2-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-hotel2-generic" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/hotels/1.jpg" alt="image of hotel">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/3.jpg" alt="image of hote">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/2.jpg" alt="image of hote">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-hotel2-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-hotel2-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="h-hotel-name">Hotel six likes</h3>
                            <p class="p-hotel-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde laudantium ratione obcaecati doloribus dignissimos ea sunt atque quibusdam sint ipsam.</p>
                            <div class="what-to-love">
                                <h5 class="h-love-hotel">What to love?</h5>
                                <table class="table">
                                    <!-- 			<caption class="caption-table-hotel">What to love?</caption> -->
                                    <tbody class="table-hotel">
                                    <tr>
                                        <td class="td-col-1">Fact 1</td>
                                        <td class="td-col-2">F1 description...</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 2</td>
                                        <td>F2 description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, dolorem.</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 3</td>
                                        <td>F3 description...</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="amenities">
                                <h5 class="h-amenities-hotel">TWD amenities</h5>
                                <ul class="ul-amenities">
                                    <li>Good</li>
                                    <li>Cool</li>
                                    <li>Best</li>
                                    <li>Greate</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil natus rerum, veritatis omnis ducimus molestias vero voluptates consequuntur quas ratione reiciendis mollitia maiores hic exercitationem est tempora, dolorum tenetur eaque.</li>
                                </ul>
                            </div>
                            <div class="contacts">
                                <h5 class="h-contact-hotel">Contacts</h5>
                                <table class="table">
                                    <tbody class="tbody table-contacts">
                                    <tr>
                                        <td>Country</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Town</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Main street 92</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>+135 125-15-54</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="hotel-wrapper">
                            <div class="slider">
                                <div id="carousel-hotel3-generic" class="carousel slide" data-wrap="true" data-ride="carousel" data-interval="false">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-hotel3-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-hotel3-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-hotel3-generic" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/hotels/1.jpg" alt="image of hotel">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/2.jpg" alt="image of hote">
                                        </div>
                                        <div class="item">
                                            <img src="img/hotels/3.jpg" alt="image of hote">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-hotel3-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-hotel3-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="h-hotel-name">Hotel four likes</h3>
                            <p class="p-hotel-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde laudantium ratione obcaecati doloribus dignissimos ea sunt atque quibusdam sint ipsam.</p>
                            <div class="what-to-love">
                                <h5 class="h-love-hotel">What to love?</h5>
                                <table class="table">
                                    <!-- 			<caption class="caption-table-hotel">What to love?</caption> -->
                                    <tbody class="table-hotel">
                                    <tr>
                                        <td class="td-col-1">Fact 1</td>
                                        <td class="td-col-2">F1 description...</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 2</td>
                                        <td>F2 description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, dolorem.</td>
                                    </tr>
                                    <tr>
                                        <td>Fact 3</td>
                                        <td>F3 description...</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="amenities">
                                <h5 class="h-amenities-hotel">TWD amenities</h5>
                                <ul class="ul-amenities">
                                    <li>Good</li>
                                    <li>Cool</li>
                                    <li>Best</li>
                                    <li>Greate</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil natus rerum, veritatis omnis ducimus molestias vero voluptates consequuntur quas ratione reiciendis mollitia maiores hic exercitationem est tempora, dolorum tenetur eaque.</li>
                                </ul>
                            </div>
                            <div class="contacts">
                                <h5 class="h-contact-hotel">Contacts</h5>
                                <table class="table">
                                    <tbody class="tbody table-contacts">
                                    <tr>
                                        <td>Country</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Town</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Main street 92</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>+135 125-15-54</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                        <!-- <div class="input-group group-subscribe"> -->
                            <?php echo do_shortcode('[contact-form-7 id="38" title="Sub"]');?>
<!--                             <input type="email" class="input-subscribe form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
					        	<button class="btn button-subscribe" type="button">Subscribe</button>
					      	</span> -->
                        <!-- </div>/input-group -->
                    </div>
                </div>
            </div>
        </section>
        <section id="instagram" class="bg-grey-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="text-center">
                            <i class="fa fa-3x fa-instagram" aria-hidden="true"></i>
                        </div>
                        <h1 class="h1-section">Instagram</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo do_shortcode('[instagram-feed]');?>
                    </div>
                   <!--  <div class="images-block">
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="instagram-image">
                                <img src="img/about-twd.png" alt="">
                            </div>
                        </div>
                    </div> -->
                </div> 
            </div>
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