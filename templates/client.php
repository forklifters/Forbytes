<?php
/*
Template Name: Client
*/
require('ClientModel.php');
$clientModel = new ClientModel();
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clientbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="client">
    <?php get_header(); ?>
    <main>
        <?php if ($clientModel->general->Enabled()): ?>
        <section class="general-info">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="company-logo title">
                                <div class="icon-<?php echo $post->post_name ?>"></div>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="company-description">
                                <?php echo $clientModel->general->companyFullDescription ?>
                            </p>
                             <p class="project-description">
                            	 <?php echo $clientModel->general->projectDescription ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($clientModel->technologies->Enabled()): ?>
        <section class="technologies dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="company-logo title">
                               Technologies
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($clientModel->technologies->backendTechnologies != ''): ?>
                        <div class="col-md-6">
                           <article>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h2>Back end</h2>
                                    <?php echo $clientModel->technologies->buildBackendTecnologiesList(); ?>
                                </div>
                           </article>
                        </div>
                        <?php endif ?>
                        <?php if ($clientModel->technologies->frontEndTechnologies != ''): ?>
                        <div class="col-md-6">
                           <article>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h2>Front end</h2>
                                     <?php echo $clientModel->technologies->buildFrontendTecnologiesList(); ?>
                                </div>
                           </article>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($clientModel->testimonial->Enabled()): ?>
        <section class="quote <?php echo !$clientModel->technologies->Enabled()? 'dark': ''  ?>">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                                <blockquote>
                                <div class="icon quotes">
                                    <span class="icon-quotes"></span>
                                </div>
                                &ldquo;<?php echo $clientModel->testimonial->text  ?>&rdquo;
                                <footer><?php echo $clientModel->testimonial->author  ?></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>