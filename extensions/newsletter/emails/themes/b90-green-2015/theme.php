<?php
global $newsletter, $post;

if (!defined('ABSPATH')) exit;

require_once(WP_CONTENT_DIR . '/extensions/newsletter/emails/themes/b90-green-2015/theme-helper.php');

$theme_subject = $theme_options['theme_subject'];
$public_display = geskill_get_public_display();

$hosted_picture = get_site_url() . '/newsletter/img/' . $public_display['display_username'] . '-80x80.jpg';
$picture = get_avatar_url(get_current_user_id(), array('default' => hosted_picture));

if (isset($theme_options['theme_posts'])) {
    $filters = array();
    
    if (empty($theme_options['theme_max_posts'])) $filters['posts_per_page'] = 10;
    else $filters['posts_per_page'] = (int)$theme_options['theme_max_posts'];
    
    if (!empty($theme_options['theme_categories'])) {
        $filters['category__in'] = $theme_options['theme_categories'];
    }
    
    if (!empty($theme_options['theme_tags'])) {
        $filters['tag'] = $theme_options['theme_tags'];
    }
    
    if (!empty($theme_options['theme_post_types'])) {
        $filters['post_type'] = $theme_options['theme_post_types'];
    }    
    
    $posts = get_posts($filters);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php echo $theme_options['main_header_title'] ?></title>
<style type="text/css">
/* Client-specific Styles */
div, p, a, li, td {
	-webkit-text-size-adjust: none;
}
#outlook a {
	padding: 0;
} /* Force Outlook to provide a "view in browser" menu link. */
html {
	width: 100%;
}
body {
	width: 100% !important;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	margin: 0;
	padding: 0;
}
/* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
.ExternalClass {
	width: 100%;
} /* Force Hotmail to display emails at full width */
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
	line-height: 100%;
} /* Force Hotmail to display normal line spacing. */
.backgroundTable {
	margin: 0;
	padding: 0;
	width: 100% !important;
	line-height: 100% !important;
}
img {
	outline: none;
	text-decoration: none;
	border: none;
	-ms-interpolation-mode: bicubic;
}
a img {
	border: none;
}
.image_fix {
	display: block;
}
p {
	margin: 0px 0px !important;
}
table td {
	border-collapse: collapse;
}
table {
	border-collapse: collapse;
	mso-table-lspace: 0pt;
	mso-table-rspace: 0pt;
}
a {
	color: #46962b;
	text-decoration: none;
	text-decoration: none!important;
}
/*STYLES*/
table[class=full] {
	width: 100%;
	clear: both;
}
/*Fonts*/

@font-face {
	font-family: 'Arvo Gruen';
	font-style: normal;
	src: url('http://www.gruene.de/arvo_gruen.svg#Customfont-Regular') format('svg'), url('http://www.gruene.de/arvo_gruen.eot?#iefix') format('embedded-opentype'), url('http://www.gruene.de/arvo_gruen.woff') format('woff'), url('http://www.gruene.de/arvo_gruen.ttf') format('truetype');
}
@font-face {
	font-family: 'Arvo Regular';
	font-style: normal;
	src: url('http://www.gruene.de/arvo_regular.svg#Customfont-Regular') format('svg'), url('http://www.gruene.de/arvo_regular.eot?#iefix') format('embedded-opentype'), url('http://www.gruene.de/arvo_regular.woff') format('woff'), url('http://www.gruene.de/arvo_regular.ttf') format('truetype');
}
@font-face {
	font-family: 'PT Sans';
	font-style: normal;
	src: url('http://www.gruene.de/ptsans_regular.svg#Customfont-Regular') format('svg'), url('http://www.gruene.de/ptsans_regular.eot?#iefix') format('embedded-opentype'), url('http://www.gruene.de/ptsans_regular.woff') format('woff'), url('http://www.gruene.de/ptsans_regular.ttf') format('truetype');
}
@font-face {
	font-family: 'PT Sans Bold';
	font-style: normal;
	src: url('http://www.gruene.de/ptsans_bold.svg#Customfont-Regular') format('svg'), url('http://www.gruene.de/ptsans_bold.eot?#iefix') format('embedded-opentype'), url('http://www.gruene.de/ptsans_bold.woff') format('woff'), url('http://www.gruene.de/ptsans_bold.ttf') format('truetype');
}

/*IPAD STYLES*/
@media only screen and (max-width: 640px) {
a[href^="tel"], a[href^="sms"] {
	text-decoration: none;
	color: #46962b; /* or whatever your want */
	pointer-events: none;
	cursor: default;
}
.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
	text-decoration: default;
	color: #46962b !important;
	pointer-events: auto;
	cursor: default;
}
table[class=devicewidth] {
	width: 440px!important;
	text-align: center!important;
}
table[class=devicewidthinner] {
	width: 420px!important;
	text-align: center!important;
}
img[class=banner] {
	width: 440px!important;
	height: 220px!important;
}
img[class=col2img] {
	width: 440px!important;
	height: 220px!important;
}
}

/*IPHONE STYLES*/
@media only screen and (max-width: 480px) {
a[href^="tel"], a[href^="sms"] {
	text-decoration: none;
	color: #46962b; /* or whatever your want */
	pointer-events: none;
	cursor: default;
}
.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
	text-decoration: default;
	color: #46962b !important;
	pointer-events: auto;
	cursor: default;
}
table[class=devicewidth] {
	width: 280px!important;
	text-align: center!important;
}
table[class=devicewidthinner] {
	width: 260px!important;
	text-align: center!important;
}
img[class=banner] {
	width: 280px!important;
	height: 140px!important;
}
img[class=col2img] {
	width: 280px!important;
	height: 140px!important;
}
}
</style>
</head>
<body>
<!-- Start of header -->
<table width="100%" bgcolor="#46962b" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="header" style="background: #46962b;">
  <tbody>
    <tr>
      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
          <tbody>
            <tr>
              <td width="100%"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
                    <tr>
                      <td><!-- start of menu -->
                        
                        <table width="600" height="50" border="0" align="left" valign="middle" cellpadding="0" cellspacing="0" class="devicewidth">
                          <tbody>
                            <tr>
                              <td height="50" align="center" valign="middle" style="font-family: 'Arvo Gruen', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 13px; color: #ffffff;" st-content="menu"><!--#text_line #--><?php echo $theme_subject ?><!--#/text_line#--></td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- end of menu --></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- End of Header --> <!-- Start of seperator -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
  <tbody>
    <tr>
      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
          <tbody>
            <tr>
              <td align="center" height="5" style="font-size: 1px; line-height: 1px;"> </td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- End of seperator -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
  <tbody>
    <tr>
      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
          <tbody>
            <tr>
              <td align="center" style="font-family: 'PT Sans Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 10px; color: #333333; line-height: 24px;"><!--#online_version #--> Bei fehlerhafter Darstellung des Newsletters bitte <a href="{email_url}">hier klicken</a>. <!--#/online_version#--></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- Start of seperator -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
  <tbody>
    <tr>
      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
          <tbody>
            <tr>
              <td align="center" height="30" style="font-size: 1px; line-height: 1px;"> </td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- End of seperator -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
  <tbody>
    <tr>
      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
          <tbody>
            <tr>
              <td align="center"><!--#loop #--> <!--#loopsplit#--> <!--#my_element name="Begrüßung mit Bild" #--> <!-- Start of main-banner -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="banner">
                  <tbody>
                    <tr>
                      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                            <tr>
                              <td width="100%"><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                  <tbody>
                                    <tr><!-- start of image -->
                                      <td align="center" st-image="banner-image"><div class="imgpop"><!--#image #--><img width="600" border="0" height="120" alt="Titel" style="display: block; border: none; outline: none; text-decoration: none;" src="<?php echo $theme_url; ?>/images/header.png" class="banner" /><!--#/image#--></div></td>
                                    </tr>
                                  </tbody>
                                </table>
                                
                                <!-- end of image --></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of main-banner --> 
                <!--#loopsplit#--> <!--#my_element name="Persönliches Intro" #-->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="full-text">
                  <tbody>
                    <tr>
                      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                            <tr>
                              <td width="100%"><table bgcolor="#ffffff"style="background:#ffffff;" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                  <tbody>
                                    <!-- Spacing -->
                                    <tr>
                                      <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                    </tr>
                                    <!-- Spacing -->
                                    <tr>
                                      <td><table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                          <tbody>
                                            <!-- Title -->
                                            <tr>
                                              <td style="font-family: 'Arvo Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 18px; color: #282828; line-height: 24px;text-align: left;"><!--#text_line #-->Liebe(r) {name},<!--#/text_line#--></td>
                                            </tr>
                                            <!-- End of Title --> 
                                            <!-- spacing -->
                                            <tr>
                                              <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                            </tr>
                                            <!-- End of spacing -->
                                            
                                            <tr>
                                              <td style="font-family: 'PT Sans Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 14px; color: #333333; line-height: 24px;text-align: left;"><!--#html#-->
                                                
                                                <div> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>
                                                  <br>
                                                  At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <br>
                                                  <br>
                                                  Viele Grüße,<br>
                                                  <strong><?php echo $public_display[$theme_options['theme_signature']] ?></strong> 
                                                  <!--#/html#--> </div></td>
                                            </tr>
                                            
                                            <!-- Spacing -->
                                            <tr>
                                              <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                            </tr>
                                            <!-- Spacing -->
                                          </tbody>
                                        </table></td>
                                    </tr>
                                    <!-- Spacing -->
                                    <tr>
                                      <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                    </tr>
                                    <!-- Spacing -->
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- Start of seperator -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
                  <tbody>
                    <tr>
                      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of seperator --> 
                <!--#/my_element#--> 
                
                <!--#loopsplit#--> <!--#my_element name="Autorenangabe" #-->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="left-image">
                  <tbody>
                    <tr>
                      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                            <tr>
                              <td width="100%"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                  <tbody>
                                    <tr>
                                      <td><!-- Start of left column -->
                                        
                                        <table width="80" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                            <!-- image -->
                                            <tr>
                                              <td width="80" height="80" align="center"><!--#image #--><img src="<?php echo $picture ?>" alt="[<?php echo $public_display[$theme_options['theme_author']] ?>]" border="0" width="80" height="80" style="display:block; border:none; outline:none; text-decoration:none;"><!--#/image#--></td>
                                            </tr>
                                            <!-- /image -->
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of left column --> 
                                        <!-- spacing for mobile devices-->
                                        
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing">
                                          <tbody>
                                            <tr>
                                              <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of for mobile devices--> 
                                        <!-- start of right column -->
                                        
                                        <table width="480" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                            <tr>
                                              <td><table width="480" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                  <tbody>
                                                    <!-- content -->
                                                    <tr>
                                                      <td style="font-family: 'PT Sans Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 14px; color: #333333; text-align:left; line-height: 24px;"><div><!--#html #--> <strong><?php echo $public_display[$theme_options['theme_author']] ?></strong><br>
                                                          <?php if ($theme_options['theme_author_use_bio']) echo geskill_get_bio() ?><!--#/html#--></div></td>
                                                    </tr>
                                                    <!-- end of content --> 
                                                    <!-- Spacing -->
                                                    <tr>
                                                      <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- /Spacing -->
                                                    
                                                  </tbody>
                                                </table></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of right column --></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- Start of seperator -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
                  <tbody>
                    <tr>
                      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size: 1px; line-height: 1px;"> </td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of seperator -->
                
                <?php if (!empty($posts)) { ?>
                <?php foreach ($posts as $post) { setup_postdata($post); ?>
                
                <!-- Start of Left Image -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="left-image">
                  <tbody>
                    <tr>
                      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                          <tbody>
                            <tr>
                              <td width="100%"><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                  <tbody>
                                    <tr>
                                      <td><!-- Start of left column -->
                                        
                                        <?php if (isset($theme_options['theme_thumbnails']) && !empty(nt_post_image($post->ID))) { ?>
                                          <table width="240" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                            <tbody>
                                              <!-- image -->
                                              <tr>
                                                <td width="240" height="140" align="center" class="devicewidth"><!--#image#--><a target="_blank" href="<?php echo get_permalink($post); ?>"><img src="<?php newsletter_get_post_image($post->ID, 'medium'); ?>" alt="Titel" border="0" width="240" height="140" style="display: block; border: none; outline: none; text-decoration: none;" class="col2img" /></a><!--#/image#--></td>
                                              </tr>
                                              <!-- /image -->
                                            </tbody>
                                          </table>
                                          <?php } ?>
                                        
                                        <!-- end of left column --> <!-- spacing for mobile devices-->
                                        
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing">
                                          <tbody>
                                            <tr>
                                              <td width="100%" height="15" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of for mobile devices--> <!-- start of right column -->
                                        
                                        <table width="<?php if (isset($theme_options['theme_thumbnails']) && !empty(nt_post_image($post->ID))) { ?>320<?php } else { ?>560<?php } ?>" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                            <tr>
                                              <td><table width="<?php if (isset($theme_options['theme_thumbnails']) && !empty(nt_post_image($post->ID))) { ?>320<?php } else { ?>560<?php } ?>" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                  <tbody>
                                                    <!-- title -->
                                                    <tr>
                                                      <td style="font-family: 'Arvo Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align: left; line-height: 24px;"><!--#text_line #-->
                                                        
                                                        <?php the_title(); ?>
                                                        
                                                        <!--#/text_line#--></td>
                                                    </tr>
                                                    <!-- end of title --> <!-- Spacing -->
                                                    <tr>
                                                      <td width="100%" height="15" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                                                    </tr>
                                                    <!-- /Spacing --> <!-- content -->
                                                    <tr>
                                                      <td style="font-family: 'PT Sans Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 14px; color: #333333; text-align: left; line-height: 24px;"><!--#html#-->
                                                        
                                                        <div>
                                                          <?php if (isset($theme_options['theme_excerpts'])) newsletter_the_excerpt($post); ?>
                                                        </div>
                                                        
                                                        <!--#/html#--></td>
                                                    </tr>
                                                    <!-- end of content --> <!-- Spacing -->
                                                    <tr>
                                                      <td width="100%" height="15" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                                                    </tr>
                                                    <!-- /Spacing --> <!-- read more -->
                                                    <tr>
                                                      <td><table width="120" height="32" align="left" valign="middle" border="0" bgcolor="#e6007e" cellpadding="0" cellspacing="0" style="border-radius: 3px; background: #e6007e;" st-button="learnmore">
                                                          <tbody>
                                                            <tr>
                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                            </tr>
                                                            <tr>
                                                              <td height="14" bgcolor="#e6007e" align="center" valign="middle" style="font-family: 'PT Sans Regular', 'Trebuchet MS', Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; color: #ffffff; text-align: center; line-height: 14px; ; -webkit-text-size-adjust: none;" st-title="fulltext-btn"><!--#link #--><a style="text-decoration: none; color: #ffffff; text-align: center;" href="<?php echo get_permalink($post); ?>">Lesen »</a><!--#/link#--></td>
                                                            </tr>
                                                            <tr>
                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                            </tr>
                                                          </tbody>
                                                        </table></td>
                                                    </tr>
                                                    <!-- end of read more -->
                                                  </tbody>
                                                </table></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of right column --></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of Left Image --> 
                
                <!-- Start of seperator -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
                  <tbody>
                    <tr>
                      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size: 1px; line-height: 1px;"> </td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of seperator -->
                
                <?php } ?>
                <?php } ?>
                
                <!-- Start of seperator -->
                
                <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="seperator">
                  <tbody>
                    <tr>
                      <td><table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- End of seperator --> 
                <!-- Start of footer -->
                
                <?php include WP_CONTENT_DIR . '/extensions/newsletter/emails/themes/b90-green-2015/footer.php'; ?>
                
                <!-- End of footer --></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>