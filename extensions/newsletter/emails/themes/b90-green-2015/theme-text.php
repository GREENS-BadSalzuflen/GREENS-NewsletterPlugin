<?php
if (!defined('ABSPATH')) exit;
?>Liebe(r) {name},

diese E-Mail benötigt einen modernen E-Mail Client, welcher HTML E-Mails unterstützt.

Du kannst diese E-Mail aber auch online lesen unter: {email_url}.

Viele Grüße, <?php echo wp_specialchars_decode(get_option('blogname'), ENT_QUOTES); ?>


HTML E-Mail Clients:
- Mozilla Thunderbird
- Opera Mail

Keine weiteren Neuigkeiten mehr? Newsletter abbestellen: {unsubscription_url}.