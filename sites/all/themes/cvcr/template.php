<?php

/**
 * Implements template_preprocess_html().
 */
function cvcr_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function cvcr_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function cvcr_preprocess_node(&$variables) {
}

/**
* theme_menu_link()
*/
function cvcr_menu_link(array $variables) {
//add class for li
   $variables['element']['#attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);
  return theme_menu_link($variables);
}
?>

