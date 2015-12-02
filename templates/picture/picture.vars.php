<?php
/**
 * @file
 * Stub file for "picture" theme hook [pre]process functions.
 */

use Drupal\bootstrap\Bootstrap;

/**
 * Pre-processes variables for the "picture" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_picture()
 *
 * @ingroup theme_preprocess
 */
function bootstrap_preprocess_picture(&$variables) {
  // Add responsiveness, if necessary.
  if ($shape = Bootstrap::getTheme()->getSetting('image_responsive')) {
    $variables['attributes']['class'][] = 'img-responsive';
  }
}
