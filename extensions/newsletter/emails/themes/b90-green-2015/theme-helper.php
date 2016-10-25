<?php
if (!defined('ABSPATH')) exit;

function geskill_get_public_display() {
  $profileuser = wp_get_current_user();
  $public_display = array();
  $public_display['display_nickname'] = $profileuser->nickname;
  $public_display['display_username'] = $profileuser->user_login;

  if (!empty($profileuser->first_name)) {
    $public_display['display_firstname'] = $profileuser->first_name;
  }

  if (!empty($profileuser->last_name)) {
    $public_display['display_lastname'] = $profileuser->last_name;
  }

  if (!empty($profileuser->first_name) && !empty($profileuser->last_name)) {
    $public_display['display_firstlast'] = $profileuser->first_name . ' ' . $profileuser->last_name;
    $public_display['display_lastfirst'] = $profileuser->last_name . ' ' . $profileuser->first_name;
  }

  if (!in_array($profileuser->display_name, $public_display)) // Only add this if it isn't duplicated elsewhere
    $public_display = array('display_displayname' => $profileuser->display_name) + $public_display;
    
  return array_map('trim', $public_display);
}

function geskill_get_bio() {
  return get_the_author_meta('description', get_current_user_id());
}

?>