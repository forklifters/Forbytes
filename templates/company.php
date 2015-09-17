<?php
/*
Template Name: Company
*/
require('CompanyModel.php');
require('BlockArticle.php');
$companyModel = new CompanyModel();
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
        <?php if ($companyModel->ourTeam->Enabled()): ?>
        <section class="our-team">
            <div class="content"></div>
        </section>
        <?php endif ?>
        <?php if ($companyModel->companyPrinciples->Enabled()): ?>
        <section class="company-principles">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $companyModel->companyPrinciples->title ?></h1>
                        </div>
                    </div>
                    <?php foreach( array_chunk($companyModel->companyPrinciples->articles, 3) as $row)  { ?>
                        <div class="row">
                        <?php  foreach( $row as $article) { ?>
                             <div class="col-sm-4">
                                <article>
                                    <div class="icon default">
                                        <span class="<?php echo strtolower($article->iconClass) ?>"></span>
                                    </div>
                                    <h2><?php echo strtolower($article->title) ?></h2>
                                    <p><?php echo strtolower($article->description) ?></p>
                                </article>
                             </div>
                        <?php } ?>
                        </div>  
                     <?php } ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="quotes-carousel">
                             <?php  foreach( $companyModel->companyPrinciples->quotes as $quote) { ?>
                                 <blockquote>
                                    <div class="icon quotes">
                                        <span class="icon-quotes"></span>
                                    </div>
                                    &ldquo;<?php echo $quote->text ?>&rdquo;
                                    <footer><?php echo $quote->author ?></footer>
                                </blockquote>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($companyModel->story->Enabled()): ?>
        <section class="story dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $companyModel->story->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                           <?php echo $companyModel->story->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($companyModel->location->Enabled()): ?>
        <section class="location">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $companyModel->location->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article class="head-office clearfix">
                                <div class="description">
                                    <h2><?php echo $companyModel->location->headOfficeTitle ?></h2>
                                    <?php echo $companyModel->location->headOfficeDescription ?>
                                </div>
                                <div class="map"></div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="dev-center clearfix">
                                <div class="description">
                                    <h2><?php echo $companyModel->location->developmentCenterTitle ?></h2>
                                    <?php echo $companyModel->location->developmentCenterDescription ?>
                                </div>
                                <div class="map"></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($companyModel->contactUs->Enabled()): ?>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $companyModel->contactUs->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><?php echo $companyModel->contactUs->description ?></p>
                            <div class="email-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only"></label>
                                        <input type="email" class="form-control input-lg inp-send-mail" placeholder="Email" />
                                        <div class="mail-error"><?php echo $companyModel->contactUs->errorText ?></div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-send-mail"><?php echo $companyModel->contactUs->buttonText ?></button>
                                </div>
                                <p class="mail-success accent text-center hidden"><?php echo $companyModel->contactUs->successText ?></p>
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
            require(['app/company'], function (company) {
                company.init();
            })
        });
    </script>
</body>
</html>
