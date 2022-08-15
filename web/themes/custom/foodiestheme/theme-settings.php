<?php

/**
 * @file
 * Theme settings form for Foodies theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function foodiestheme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['foodiestheme'] = [
    '#type' => 'details',
    '#title' => t('Foodies'),
    '#open' => TRUE,
  ];

  $form['foodiestheme']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];
  $form['foodiestheme']['copyright'] = [
    '#type' => 'text',
    '#title' => t('Copyright'),
    '#default_value' => theme_get_setting('copyright'),
  ];

}
