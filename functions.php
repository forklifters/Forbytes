<?php

//Title
function custom_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title = get_bloginfo( 'name' ).$title;

	// Add the site description for the home/front page.
    //$site_description = get_bloginfo( 'description', 'display' );
    //if ( $site_description && ( is_home() || is_front_page() ) )
    //    $title = "$site_description $sep $title";

	// Add a page number if necessary.
    //if ( $paged >= 2 || $page >= 2 )
    //    $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'custom_wp_title', 10, 2 );

//Menu functionality
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//Email funcionality
function sendMail()
{
    $mailTo = 'mike.severa@forbytes.com, taras.demkovych@forbytes.com';
    $mailMessage = '<p>User send you an email: <a href="mailto:%1$s">%1$s</a> </p>';
    $mailSubject = "Site mail";

    $mail = ($_POST['mail']) ? $_POST['mail'] : null;
    $result = [
        'status'  => 'error',
        'message' => 'invalid email'
    ];

    if ($mail && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        if(wp_mail($mailTo, $mailSubject, sprintf($mailMessage, $mail), $headers)) {
            $result = [
                'status' => 'ok'
            ];
        }
    }

    echo json_encode($result);
    die(''); // because 'nice' WP's admin_ajax.php decided to do die('0') what breaks json response
}

add_action('wp_ajax_nopriv_send_mail', 'sendMail');

//Removing default worpress emoji functionality
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


//class WP_HTML_Compression
//{
//    // Settings
//    protected $compress_css = true;
//    protected $compress_js = true;
//    protected $info_comment = true;
//    protected $remove_comments = true;

//    // Variables
//    protected $html;
//    public function __construct($html)
//    {
//        if (!empty($html))
//        {
//            $this->parseHTML($html);
//        }
//    }
//    public function __toString()
//    {
//        return $this->html;
//    }
//    protected function bottomComment($raw, $compressed)
//    {
//        $raw = strlen($raw);
//        $compressed = strlen($compressed);
		
//        $savings = ($raw-$compressed) / $raw * 100;
		
//        $savings = round($savings, 2);
		
//        return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
//    }
//    protected function minifyHTML($html)
//    {
//        $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
//        preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
//        $overriding = false;
//        $raw_tag = false;
//        // Variable reused for output
//        $html = '';
//        foreach ($matches as $token)
//        {
//            $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
			
//            $content = $token[0];
			
//            if (is_null($tag))
//            {
//                if ( !empty($token['script']) )
//                {
//                    $strip = $this->compress_js;
//                }
//                else if ( !empty($token['style']) )
//                {
//                    $strip = $this->compress_css;
//                }
//                else if ($content == '<!--wp-html-compression no compression-->')
//                {
//                    $overriding = !$overriding;
					
//                    // Don't print the comment
//                    continue;
//                }
//                else if ($this->remove_comments)
//                {
//                    if (!$overriding && $raw_tag != 'textarea')
//                    {
//                        // Remove any HTML comments, except MSIE conditional comments
//                        $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
//                    }
//                }
//            }
//            else
//            {
//                if ($tag == 'pre' || $tag == 'textarea')
//                {
//                    $raw_tag = $tag;
//                }
//                else if ($tag == '/pre' || $tag == '/textarea')
//                {
//                    $raw_tag = false;
//                }
//                else
//                {
//                    if ($raw_tag || $overriding)
//                    {
//                        $strip = false;
//                    }
//                    else
//                    {
//                        $strip = true;
						
//                        // Remove any empty attributes, except:
//                        // action, alt, content, src
//                        $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
						
//                        // Remove any space before the end of self-closing XHTML tags
//                        // JavaScript excluded
//                        $content = str_replace(' />', '/>', $content);
//                    }
//                }
//            }
			
//            if ($strip)
//            {
//                $content = $this->removeWhiteSpace($content);
//            }
			
//            $html .= $content;
//        }
		
//        return $html;
//    }
    
//    public function parseHTML($html)
//    {
//        $this->html = $this->minifyHTML($html);
		
//        if ($this->info_comment)
//        {
//            $this->html .= "\n" . $this->bottomComment($html, $this->html);
//        }
//    }
	
//    protected function removeWhiteSpace($str)
//    {
//        $str = str_replace("\t", ' ', $str);
//        $str = str_replace("\n",  '', $str);
//        $str = str_replace("\r",  '', $str);
		
//        while (stristr($str, '  '))
//        {
//            $str = str_replace('  ', ' ', $str);
//        }
		
//        return $str;
//    }
//}

//function wp_html_compression_finish($html)
//{
//    return new WP_HTML_Compression($html);
//}

//function wp_html_compression_start()
//{
//    ob_start('wp_html_compression_finish');
//}
//add_action('get_header', 'wp_html_compression_start');


?>