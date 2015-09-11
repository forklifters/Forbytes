<?php
/*
Template Name: Company
*/
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title( '|', true, 'left' ); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainbundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/companybundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="company">
    <?php get_header(); ?>
    <main>
        <section class="our-team">
            <div class="content"></div>
        </section>
        <section class="our-mission">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Our <span class="accent">mission</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Delivering best solutions to improve clients business</h2>
                            <p>We are software development company, and we are working on solutions to help our clients achive the best results. Our skilled proffesionals know how to apply the best modern techologies and develop solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="company-principles">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Company <span class="accent">principles</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <article>
                                <div class="icon default">
                                    <span class="icon-reliability"></span>
                                </div>
                                <h2>Reliability</h2>
                                <p>We never compromise on quality and aim to deliver best quality in the shortest possible time. We do what we promised to do - this is the Law for us.</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article>
                                <div class="icon default">
                                    <span class="icon-partnership"></span>
                                </div>
                                <h2>Partnership</h2>
                                <p>We are confident that true aim of business relations is to help your partner become better and stronger. This allows us to build the atmosphere of trust with our client where simple word means more than dozens of contracts and documents.</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article>
                                <div class="icon default">
                                    <span class="icon-learning"></span>
                                </div>
                                <h2>Constant development</h2>
                                <p>We believe that constant learning and improvement is a key to our success. Knowledge is our main asset and it becomes outdated extremely fast. The only solution for this is learning.</p>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="quotes-carousel">
                                <blockquote>
                                    <div class="icon quotes">
                                        <span class="icon-quotes"></span>
                                    </div>
                                    &ldquo;When we think about what is most valuable for us, only two things come up - our employees and our clients.&rdquo;
                                    <footer>Don Lowe, CEO</footer>
                                </blockquote>
                                <blockquote>
                                    <div class="icon quotes">
                                        <span class="icon-quotes"></span>
                                    </div>
                                    &ldquo;Our mission is delivering best solutions to improve clients business.&rdquo;
                                    <footer>Taras Demkovych</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="story dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">The story</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>It all started in spring 2011 in Ukraine when we decided to found a company that would materialize our vision of entrepreneurship and partnership. In those warm days we have started our journey as a small team under the name I-Nova with huge desire to improve this world using our knowledge and technology.</p>
                            <p>First experience was gained from co-operation with our Scandinavian partners - biggest players in e-commerce area, which still are source of inspiration and experience for us. We continue to build our common success.</p>
                            <p>From the beginning of 2015 we decided to strengthen our presence on Scandinavian market by moving main company to Sweden and look for new challenges in US. These steps we do under new name - <span class="accent">Forbytes</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="location">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Our offices located in <span class="accent">Sweden</span> and <span class="accent">Ukraine</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article class="head-office clearfix">
                                <div class="description">
                                    <h2>Head office</h2>
                                    <div>Sweden</div>
                                    <div>Helsinborg, E-commerce Park, 25232</div>
                                    <div>Industrigatan 83</div>
                                    <div>+46 (0) 73 612 22 79</div>
                                    <a href="mailto:contact@forbytes.com">contact@forbytes.com</a>
                                </div>
                                <div class="map"></div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="dev-center clearfix">
                                <div class="description">
                                    <h2>Development center</h2>
                                    <div>Ukraine</div>
                                    <div>Lviv, Heroiv UPA 77</div>
                                    <div>+38 (0) 32 232 97 70</div>
                                    <a href="mailto:contact@forbytes.com">contact@forbytes.com</a>
                                </div>
                                <div class="map"></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Let's get in <span class="accent">touch</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Send us an email and we will contact you</p>
                            <div class="email-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only"></label>
                                        <input type="email" class="form-control input-lg inp-send-mail" placeholder="Email" />
                                        <div class="mail-error">The email address is not valid</div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-send-mail">Send</button>
                                </div>
                                <p class="mail-success accent text-center hidden">
                                    We'll follow up with you shortly                               
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/require.js"></script>
    <script>
        require(['<?php echo get_template_directory_uri(); ?>/js/requireConfig.js'], function () {
            require(['app/company'], function (company) {
                company.init();
            })
        });
    </script>
</body>
</html>
