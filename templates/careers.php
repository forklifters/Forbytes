<?php
/*
Template Name: Careers
*/

require('CareersModel.php');
$careersModel = new CareersModel($post->ID);
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
<body class="careers">
    <?php get_header(); ?>
    <main>
    <?php if ($careersModel->vacancies->Enabled()): ?>
        <section class="vacancies">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $careersModel->vacancies->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($careersModel->vacancies->vacanciesList as $vacancie) { ?>
                        <div class="col-xs-12">
                             <article>
                                <h2 class="title"><?php echo $vacancie->title ?></h2>
                                <div>
                                    <?php echo $vacancie->description ?>
                                </div>
                             </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>  
            </div>
        </section>
        <?php endif ?>
        <?php if ($careersModel->contactUs->Enabled()): ?>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $careersModel->contactUs->title ?></span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><?php echo $careersModel->contactUs->description ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
    </main>
    <?php get_footer(); ?>
</body>
