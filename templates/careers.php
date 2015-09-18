<?php
/*
Template Name: Careers
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/careersbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="career">
    <?php get_header(); ?>
    <main>
        <section class="vacancies">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Vacancies</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <article>
                                <h2 class="title">Senior level: Experienced low-level backend developer</h1>
                                <div>
                                    <ul>
                                        <li>Expert low-level PHP knowledge.</li>
                                        <li>Highly OOP orientated and well versed in its latest design patterns.</li>
                                        <li>Senior MySQL knowledge, knows how to optimize databases.</li>
                                        <li>Experience in other OOP language such as C#, Objective-C or similar C styled languages ( C style not required ).</li>
                                    </ul>

                                    <div>Highly preferable, but not required:</div>
                                    <ul>
                                        <li>Magento experience.</li>
                                        <li>Experience in other e-commerce platforms/development.</li>
                                    </ul>
                                    <div class="accent">A good understanding of English and the ability to converse easily with others</div>
                                </div>
                            </article>
                             <article>
                                <h2 class="title">Middle to senior level, Magento specialist backend</h1>
                                <div>
                                    <ul>
                                        <li>Expert <span class="accent">Magento development knowledge</span>.</li>
                                    </ul>
                                    <div>Key areas:</div>
                                    <ul>
                                        <li>Core concepts and modules.</li>
                                        <li>Best practices.</li>
                                        <li>Database structure.</li>
                                        <li>Module design.</li>
                                        <li>Configurations.</li>
                                        <li>Template system.</li>
                                    </ul>
                                    <div>Highly preferable, but not required:</div>
                                    <ul>
                                        <li>Experience in other e-commerce platforms/development.</li>
                                        <li>Experienced at using magento admin.</li>
                                    </ul>
                                    <div class="accent">A good understanding of English and the ability to converse easily with others</div>
                                </div>
                            </article>
                            <article>
                                <h2 class="title">Middle level all-round magento knowledge with a back-end focus</h1>
                                <div>
                                    <div>Your main focus will be to maintain the <span class="accent">eCommerce solution</span> and <span class="accent">implement improvements</span> on current functionality</div>
                                    <ul>
                                        <li>Mid-level Magento development knowledge.</li>
                                        <li>Experienced administrating Magento.</li>
                                        <li>Experienced setting up price rules in Magento.</li>
                                        <li>Experienced with Magento configuration files.</li>
                                    </ul>
                                    <div>Preferable, but not required:</div>
                                    <ul>
                                        <li>Experience in other e-commerce platforms.</li>
                                        <li>Experienced with Magento templating.</li>
                                        <li>Frontend knowledge.</li>
                                    </ul>
                                    <div class="accent">A good understanding of English and the ability to converse easily with others</div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>
