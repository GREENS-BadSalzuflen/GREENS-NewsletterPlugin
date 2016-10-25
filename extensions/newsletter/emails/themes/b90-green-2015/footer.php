<?php
if (!defined('ABSPATH')) exit;
?>
<!-- Start of footer -->

<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="footer">
  <tbody>
    <tr>
      <td><table width="600" bgcolor="#46962b" style="background: #46962b;" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
          <tbody>
            <tr>
              <td width="100%"><table bgcolor="#46962b" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
                    <!-- Spacing -->
                    <tr>
                      <td height="10" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                    </tr>
                    <!-- Spacing -->
                    <tr>
                      <td align="center"><!-- 2columns -->
                        
                        <table width="600" bgcolor="#46962b" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="2columns">
                          <tbody>
                            <tr>
                              <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                  <tbody>
                                    <tr>
                                      <td width="20">   </td>
                                      <td width="560"><table bgcolor="#46962b" width="560" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                          <tbody>
                                            <tr>
                                              <td height="10" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                                            </tr>
                                            <tr>
                                              <td align="center"><!-- start of left column -->
                                                
                                                <table width="240" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                  <tbody>
                                                    <tr>
                                                      <td><!-- start of text content table -->
                                                        
                                                        <table width="240" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                          <tbody>
                                                            <!-- Content -->
                                                            <tr>
                                                              <td><table width="240" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td style="font-family: 'Arvo Regular', 'Trebuchet MS', Helvetica, arial, sans-serif; font-size: 14px; color: #ffffff; text-align: left; line-height: 24px;"><!--#aboutus #--><strong><?php echo $theme_options['main_footer_title'] ?></strong><br />
                                                                        <?php echo str_replace(',', '<br />', $theme_options['main_footer_contact']) ?><!--#/aboutus#--><br /></td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table></td>
                                                            </tr>
                                                            <!-- end of Content --> <!-- end of content -->
                                                          </tbody>
                                                        </table></td>
                                                    </tr>
                                                    <!-- end of text content table -->
                                                  </tbody>
                                                </table>
                                                
                                                <!-- end of left column --> <!-- start of right column -->
                                                
                                                <table width="240" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                  <tbody>
                                                    <tr>
                                                      <td><!-- start of text content table -->
                                                        
                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                          <tbody>
                                                            <!-- Content -->
                                                            <tr>
                                                              <td align="left"><table>
                                                                  <tbody>
                                                                    <!-- read more -->
                                                                    <?php if (isset($theme_options['theme_homepage_enable'])) { ?>
                                                                      <tr>
                                                                        <td><table width="280" height="32" bgcolor="#09311d" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="background: #09311d; border-radius: 3px;" st-button="learnmore">
                                                                            <tbody>
                                                                              <tr>
                                                                                <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td height="14" align="center" valign="middle" style="font-family: 'PT Sans Regular','Trebuchet MS', Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; color: #ffffff; text-align: center; line-height: 14px; ; -webkit-text-size-adjust: none;" st-title="fulltext-btn"><!--#link #--><a style="text-decoration: none; color: #ffffff; text-align: center;" href="<?php echo get_site_url() ?>/">Homepage</a><!--#/link#--></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                              </tr>
                                                                            </tbody>
                                                                          </table></td>
                                                                      </tr>
                                                                      <!-- end of read more -->
                                                                      <?php } ?>
                                                                    <?php if (isset($theme_options['theme_homepage_enable']) && (!empty($theme_options['main_facebook_url']) || !empty($theme_options['main_twitter_url']))) { ?>
                                                                      <tr>
                                                                        <td height="10"></td>
                                                                      </tr>
                                                                      <?php } ?>
                                                                    <?php if (!empty($theme_options['main_facebook_url'])) { ?>
                                                                    <!-- read more -->
                                                                    <tr>
                                                                      <td><table width="280" height="32" bgcolor="#3b5998" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="background: #3b5998; border-radius: 3px;" st-button="learnmore">
                                                                          <tbody>
                                                                            <tr>
                                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td height="14" align="center" valign="middle" style="font-family: 'PT Sans Regular','Trebuchet MS', Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; color: #ffffff; text-align: center; line-height: 14px; ; -webkit-text-size-adjust: none;" st-title="fulltext-btn"><!--#link #--><a style="text-decoration: none; color: #ffffff; text-align: center;" href="<?php echo esc_attr($theme_options['main_facebook_url']) ?>">Facebook</a><!--#/link#--></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                            </tr>
                                                                          </tbody>
                                                                        </table></td>
                                                                    </tr>
                                                                    <!-- end of read more -->
                                                                    <?php } ?>
                                                                    <?php if (!empty($theme_options['main_facebook_url']) && !empty($theme_options['main_twitter_url'])) { ?>
                                                                    <tr>
                                                                      <td height="10"></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if (!empty($theme_options['main_twitter_url'])) { ?>
                                                                    <!-- read more -->
                                                                    <tr>
                                                                      <td><table width="280" height="32" bgcolor="#00acee" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="background: #00acee; border-radius: 3px;" st-button="learnmore">
                                                                          <tbody>
                                                                            <tr>
                                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td height="14" align="center" valign="middle" style="font-family: 'PT Sans Regular','Trebuchet MS', Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; color: #ffffff; text-align: center; line-height: 14px; ; -webkit-text-size-adjust: none;" st-title="fulltext-btn"><!--#link #--><a style="text-decoration: none; color: #ffffff; text-align: center;" href="<?php echo esc_attr($theme_options['main_twitter_url']) ?>">Twitter</a><!--#/link#--></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td height="9" align="center" style="font-size: 1px; line-height: 1px;"> </td>
                                                                            </tr>
                                                                          </tbody>
                                                                        </table></td>
                                                                    </tr>
                                                                    <!-- end of read more -->
                                                                    <?php } ?>
                                                                  </tbody>
                                                                </table></td>
                                                            </tr>
                                                          </tbody>
                                                        </table></td>
                                                    </tr>
                                                    <!-- end of Content --> <!-- end of content -->
                                                  </tbody>
                                                </table></td>
                                            </tr>
                                            <!-- end of text content table -->
                                            <tr>
                                              <td height="10" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        
                                        <!-- end of right column --></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                              <td width="20">   </td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- end of 2 columns --></td>
            </tr>
            <!-- Spacing -->
            <tr>
              <td height="10" style="font-size: 1px; line-height: 1px; mso-line-height-rule: exactly;"> </td>
            </tr>
            <!-- Spacing -->
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- End of footer --> <!-- Start of Postfooter -->
<table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" class="backgroundTable" st-sortable="postfooter">
  <tbody>
    <tr>
      <td><table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
          <tbody>
            <!-- Spacing -->
            <tr>
              <td width="100%" height="20"></td>
            </tr>
            <!-- Spacing -->
            <tr>
              <td align="center" valign="middle" style="font-family: 'PT Sans Regular','Trebuchet MS', Helvetica, arial, sans-serif; font-size: 13px; color: #282828; line-height: 24px;" st-content="preheader"><a href="<?php echo get_site_url() ?>/termine/" style="text-decoration: none; color: #46962b">Termine</a> • <a href="<?php echo get_site_url() ?>/service/impressum/" style="text-decoration: none; color: #46962b">Impressum</a><br /></td>
            </tr>
            <!-- Spacing -->
            <tr>
              <td width="100%" height="20"></td>
            </tr>
            <!-- Spacing -->
            <tr>
              <td align="center" valign="middle" style="font-family: 'PT Sans Regular','Trebuchet MS', Helvetica, arial, sans-serif; font-size: 13px; color: #282828; line-height: 24px;" st-content="preheader">Keine weiteren Neuigkeiten mehr? <!--#unsubscribe #--><a href="{unsubscription_url}" style="text-decoration: none; color: #46962b;">Newsletter abbestellen</a><!--#/unsubscribe#--><br /></td>
            </tr>
            <!-- Spacing -->
            <tr>
              <td width="100%" height="20"></td>
            </tr>
            <!-- Spacing -->
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<!-- End of postfooter -->