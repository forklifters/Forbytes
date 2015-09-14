<?php
/*
Template Name: Clients
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clientsbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="clients">
    <?php get_header(); ?>



    <main>

        <section class="our-clients">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Our top <span class="accent">clients</span></h1>
                        </div>
                    </div>
                    <div class="row">
                            <?php 
                                $args = array(
            	                        'post_parent' =>  $post->ID,
	                                    'post_type'   => 'page', 
	                                    'numberposts' => -1,
	                                    'post_status' => 'publish',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC'
                                );
                                $children = get_children($args, $output); 

                                foreach ($children as $page){
                                    $short_desc_field = get_field_object('company_short_description', $page->ID);
                                    $readMoreField = get_field_object('read_more', $page->ID);
                                    $pageUrl = get_page_link($page->ID);
                                    $readMoreLink = $readMoreField['value']? '<a class="show-more" href="'.$pageUrl.'">Read more</a>': '';
                                    echo '<div class="col-sm-6 col-lg-4">
                                             <article class="'.$page->post_name.'">
                                                 <div class="company-logo">
                                                     <div class="icon-'.$page->post_name.'"></div>
                                                </div>
                                                <p><span>'.$short_desc_field["value"].'</span>'.$readMoreLink.'</p>
                                            </article>
                                        </div>';
                                }
                        ?>
                     </div>
                </div>
            </div>
        </section>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title"><span class="accent">Your company </span>can be here too</h1>
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
                                    We'll follow up with you shortly                                </p>
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
            require(['app/clients'], function (clients) {
                clients.init()
            })
        });
    </script>
</body>
</html>
