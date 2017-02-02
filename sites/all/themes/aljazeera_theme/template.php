<?php
/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function aljazeera_theme_preprocess_html(&$vars) {
  // Add body classes for custom design options
  $colors = theme_get_setting('color_scheme', 'aljazeera_theme');
  $classes = explode(" ", $colors);
  for($i=0; $i<count($classes); $i++){
    $vars['classes_array'][] = $classes[$i];
  }
}

function aljazeera_theme_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
    );
}


//adding profile image toto the user menu

function aljazeera_theme_menu_link(array $variables) {
  global $user;
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $title = '';
  // Check if the user is logged in, that you are in the correct menu,
  // and that you have the right menu item
  if ($user->uid != 0 && $element['#theme'] == 'menu_link__user_menu' && $element['#title'] == t('My account')) {
    $element['#title'] = $user->name;
    // Add 'html' = TRUE to the link options
    $element['#localized_options']['html'] = TRUE;
    // Load the user picture file information; Unnecessary if you use theme_user_picture()
    $fid = $user->picture;
    $file = file_load($fid);
    // I found it necessary to use theme_image_style() instead of theme_user_picture()
    // because I didn't want any extra html, just the image.
    $title = theme('image_style', array('style_name' => 'thumbnail', 'path' => $file->uri, 'alt' => $element['#title'], 'title' => $element['#title'])) . $element['#title'];
  } else {
    $title = $element['#title'];
  }
  $output = l($title, $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function aljazeera_theme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // comment below line to hide current page to breadcrumb
    $breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}

// adding panel layout page template
/*function aljazeera_theme_preprocess_page($vars) {

if ($vars['node']->type == 'panel') {
    $vars['template_file'] = 'page-panel';
  }
}*/
/**
 * Override or insert variables into the page template.
 */
function aljazeera_theme_preprocess_page(&$vars) {
  if (isset($vars['main_menu'])) {
    $vars['main_menu'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'main-menu', 'clearfix'),
        ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
        )
      ));
  }
  else {
    $vars['main_menu'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'class' => array('links', 'secondary-menu', 'clearfix'),
        ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
        )
      ));
  }
  else {
    $vars['secondary_menu'] = FALSE;
  }
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function aljazeera_theme_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function aljazeera_theme_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

function aljazeera_theme_page_alter($page) {
  // <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' =>  'viewport',
      'content' =>  'width=device-width'
      )
    );
  drupal_add_html_head($viewport, 'viewport');
}
// Alter the login variable
function hook_form_alter(&$form, &$form_state,$form_id) {
  if($form['#form_id'] == 'user_register_form') {
    unset($form['name']['#description']); 
    unset($form['mail']['#description']); 
  }
}
/*function aljazeera_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'aljazeera_theme') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
     'aljazeera_theme_preprocess_user_login'
     ),
    'attributes' => array(
      'class' => array('userreg'),
      ),
    );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'aljazeera_theme') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'aljazeera_theme_preprocess_user_register_form'
      ),
    );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'aljazeera_theme') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'aljazeera_theme_preprocess_user_pass'
      ),
    );
  return $items;
}

function aljazeera_theme_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('This is my awesome login form');
}

function aljazeera_theme_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('This is my super awesome reg form');
}

function aljazeera_theme_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('This is my super awesome request new password form');
}*/
