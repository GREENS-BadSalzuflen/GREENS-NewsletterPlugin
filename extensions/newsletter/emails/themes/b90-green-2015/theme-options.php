<?php
if (!defined('ABSPATH')) exit;

require_once(WP_CONTENT_DIR . '/extensions/newsletter/emails/themes/b90-green-2015/theme-helper.php');

$public_display = array_unique(geskill_get_public_display());

if (in_array('display_firstlast', $public_display)) {
  $public_display_signature_default_value = 'display_firstname';
  $public_display_default_value = 'display_firstlast';
} else if (in_array('display_firstname', $public_display)) {
  $public_display_signature_default_value = 'display_firstname';
  $public_display_default_value = 'display_firstname';
} else if (in_array('display_lastname', $public_display)) {
  $public_display_signature_default_value = 'display_lastname';
  $public_display_default_value = 'display_lastname';
} else {
  $public_display_signature_default_value = 'display_nickname';
  $public_display_default_value = 'display_nickname';
}

$theme_defaults = array(
  'theme_subject' => '',
  'theme_signature' => $public_display_signature_default_value,
  'theme_author' => $public_display_default_value,
  'theme_author_use_bio' => true,
  'theme_homepage_enable' => true,
  'theme_thumbnails' => true,
  'theme_excerpts' => true,
  'theme_categories' => array(),
  'theme_post_types' => array('post','ai1ec_event')
);

// Mandatory!
$controls->merge_defaults($theme_defaults); ?>

<h3>
  <?php _e('General settings', 'newsletter') ?>
</h3>
<table class="form-table">
  <tr>
    <th><?php _e('Subject', 'newsletter') ?></th>
    <td><?php $controls->text('theme_subject', 30); ?></td>
  </tr>
  <tr>
    <th><?php _e('Signature', 'newsletter') ?></th>
    <td><?php $controls->select('theme_signature', $public_display); ?></td>
  </tr>
  <tr>
    <th><?php _e('Author information', 'newsletter') ?></th>
    <td><?php $controls->select('theme_author', $public_display); ?>
      <br>
	  <?php $controls->checkbox('theme_author_use_bio', __('Use bio from profile', 'newsletter')); ?></td>
  </tr>
  <tr>
    <th><?php _e('Footer', 'newsletter') ?></th>
    <td><?php $controls->checkbox('theme_homepage_enable', __('Display homepage in footer', 'newsletter')); ?></td>
  </tr>
</table>
<h3>
  <?php _e('Posts', 'newsletter') ?>
</h3>
<table class="form-table">
  <tr>
    <th><?php _e('Posts', 'newsletter') ?></th>
    <td><?php $controls->checkbox('theme_posts', __('Add latest posts', 'newsletter')); ?>
      <br>
      <?php $controls->checkbox('theme_thumbnails', __('Add post thumbnails', 'newsletter')); ?>
      <br>
      <?php $controls->checkbox('theme_excerpts', __('Add post excerpts', 'newsletter')); ?></td>
  </tr>
  <tr>
    <th><?php _e('Categories', 'newsletter') ?></th>
    <td><?php $controls->categories_group('theme_categories'); ?></td>
  </tr>
  <tr>
    <th><?php _e('Tags', 'newsletter') ?></th>
    <td><?php $controls->text('theme_tags', 30); ?>
      <p class="description" style="display: inline">
        <?php _e('comma separated', 'newsletter') ?>
      </p>
      <div class="hints">
        <?php _e('By default 10 posts are used.', 'newsletter') ?>
      </div></td>
  </tr>
  <tr>
    <th><?php _e('Max posts', 'newsletter') ?></th>
    <td><?php $controls->text('theme_max_posts', 5); ?></td>
  </tr>
  <tr>
    <th><?php _e('Post types to include', 'newsletter') ?></th>
    <td><?php $controls->post_types('theme_post_types'); ?>
      <div class="hints">
        <?php _e('Leave all unchecked for default behaviour.', 'newsletter') ?>
      </div></td>
  </tr>
</table>
