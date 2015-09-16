<?php
/*
Template Name: Services
*/
require('ServicesModel.php');
$servicesModel = new ServicesModel();
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title( '|', true, 'left' ); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainbundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/servicesbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <style>
        .services #fullpage {
            height: 1080px;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body class="services">
    <?php get_header(); ?>
    <main>
     <?php if ($servicesModel->general->Enabled()): ?>
        <div id="fullpage">
            <section class="section home">
                <div class="slide what-we-do">
                    <div class="background">
                    </div>
                    <div class="content">
                        <div class="content-background"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 adv-small">
                                    <div class="adv">
                                        <h1><?php echo $servicesModel->general->title ?></h1>
                                        <div class="icon arrow-down">
                                            <div>
                                                <span class="icon-arrowdown"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-offset-1 col-xs-5 adv-big">
                                    <div class="adv">
                                        <h1 class="accent"><?php echo $servicesModel->general->title ?></h1>
                                        <p><?php echo $servicesModel->general->description ?></p>
                                        <button class="btn btn-success btn-lg"><?php echo $servicesModel->general->buttonText ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
         <?php endif ?>
         <?php if ($servicesModel->whatWeDo->Enabled()): ?>
        <section class="what-we-do">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $servicesModel->whatWeDo->title ?></h1>
                        </div>
                    </div>
                    <?php foreach( array_chunk($servicesModel->whatWeDo->articles, 3, true) as $row)  { ?>
                        <div class="row">
                        <?php foreach( $row as $key=>$value) { ?>
                             <div class="col-sm-4">
                                <article class="<?php echo strtolower($key) ?>">
                                    <div class="icon default">
                                        <span class="icon-<?php echo strtolower($key) ?>"></span>
                                    </div>
                                    <h2><?php echo $key ?></h2>
                                    <p><?php echo $value ?></p>
                                </article>
                             </div>
                        <?php } ?>
                        </div>  
                    <?php } ?>
                </div>
            </div>
        </section>
         <?php endif ?>
          <?php if ($servicesModel->howWeWork->Enabled()): ?>
        <section class="how-we-work dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $servicesModel->howWeWork->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article class="dedicated-team">
                                <h2><?php echo $servicesModel->howWeWork->dedicatedTeamTitle ?></h2>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <?php echo $servicesModel->howWeWork->dedicatedTeamDescription ?>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="custom-development">
                                <h2><?php echo $servicesModel->howWeWork->customDevelopmentTeamTitle ?></h2>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <?php echo $servicesModel->howWeWork->customDevelopmentTeamDescription ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <?php endif ?>
          <?php if ($servicesModel->technologiesWeUse->Enabled()): ?>
        <section class="technologies-we-use">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $servicesModel->technologiesWeUse->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <article class="clearfix dot-net">
                                <div class="row">
                                    <div class="col-md-6 left-part">
                                        <nav>
                                            <ul class="clearfix">
                                                <li data-item="dot-net" class="dot-net-item"><span></span></li>
                                                <li data-item="php" class="php-item"><span></span></li>
                                                <li data-item="front-end" class="front-end-item"><span></span></li>
                                                <li data-item="datastorage" class="datastorage-item"><span></span></li>
                                            </ul>
                                        </nav>
                                        <div class="tech-icons">
                                            <span class="icon-dotnet dot-net-img"></span><span class="icon-php php-img"></span><span class="icon-frontend front-end-img"></span><span class="icon-datastorage datastorage-img"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 right-part">
                                        <div class="dot-net-info">
                                            <h2><?php echo $servicesModel->technologiesWeUse->netTitle ?></h2>
                                            <div class="clearfix">
                                                <?php echo $servicesModel->technologiesWeUse->netTechnologies ?>
                                            </div>
                                        </div>
                                        <div class="php-info">
                                            <h2><?php echo $servicesModel->technologiesWeUse->phpTitle ?></h2>
                                            <div class="clearfix">
                                                <?php echo $servicesModel->technologiesWeUse->phpTechnologies ?>
                                            </div>
                                        </div>
                                        <div class="front-end-info">
                                            <h2><?php echo $servicesModel->technologiesWeUse->frontEndTitle ?></h2>
                                            <div class="clearfix">
                                                <?php echo $servicesModel->technologiesWeUse->frontEndTechnologies ?>
                                            </div>
                                        </div>
                                         <div class="datastorage-info">
                                            <h2><?php echo $servicesModel->technologiesWeUse->dataStorageTitle ?></h2>
                                            <div class="clearfix">
                                                <?php echo $servicesModel->technologiesWeUse->dataStorageTechnologies ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($servicesModel->technologiesWeUse->Enabled()): ?>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $servicesModel->letsWorkTogether->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><?php echo $servicesModel->letsWorkTogether->description ?></p>
                            <div class="email-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only"></label>
                                        <input type="email" class="form-control input-lg inp-send-mail" placeholder="Email" />
                                        <div class="mail-error"><?php echo $servicesModel->letsWorkTogether->errorText ?></div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-send-mail"><?php echo $servicesModel->letsWorkTogether->buttonText ?></button>
                                </div>
                                <p class="mail-success accent text-center hidden"><?php echo $servicesModel->letsWorkTogether->successText ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <?php endif ?>
    </main>

    <?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/require.js"></script>
    <script>
        require(['<?php echo get_template_directory_uri(); ?>/js/requireConfig.js'], function () {
            require(['app/services'], function (services) {
                services.init()
            })
        });
    </script>
</body>
</html>
