<?php
/*
Template Name: Clients
*/

require('ClientsModel.php');
$clientsModel = new ClientsModel($post->ID);
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clientsbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="clients">
    <?php get_header(); ?>
    <main>
    <?php if ($clientsModel->ourClients->Enabled()): ?>
        <section class="our-clients">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $clientsModel->ourClients->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($clientsModel->ourClients->clients as $client) { ?>
                        <div class="col-sm-6 col-lg-4">
                            <article class="<?php echo $client->name ?>">
                                <div class="company-logo">
                                    <div class="icon-<?php echo $client->name ?>"></div>
                                </div>
                                <p><span><?php echo $client->shortDescription ?></span><?php echo $client->showReadMore? '<a class="show-more" href="'.$pageUrl.'">Read more</a>': '' ?></p>
                            </article>
                        </div>
                        <?php } ?>
                     </div>
                </div>
            </div>
        </section>
        <?php endif ?>
        <?php if ($clientsModel->contactUs->Enabled()): ?>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><?php echo $clientsModel->contactUs->title ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><?php echo $clientsModel->contactUs->description ?></p>
                            <div class="email-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only"></label>
                                        <input type="email" class="form-control input-lg inp-send-mail" placeholder="Email" />
                                        <div class="mail-error"><?php echo $clientsModel->contactUs->errorText ?></div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-send-mail"><?php echo $clientsModel->contactUs->buttonText ?></button>
                                </div>
                                <p class="mail-success accent text-center hidden"><?php echo $clientsModel->contactUs->successText ?></p>
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
            require(['app/clients'], function (clients) {
                clients.init()
            })
        });
    </script>
</body>
</html>
