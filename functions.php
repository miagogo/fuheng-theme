<?php
if (!defined('ABSPATH')) exit;

/**
 * 福亨攝影 主題：全域載入既有設計 CSS / 互動 JS / Google Fonts。
 * - CSS 與字型用 enqueue_block_assets：前台 + 區塊編輯器 iframe 皆載入（後台所見即所得）。
 * - 互動 JS 只在前台載入（編輯器不需跑輪播/燈箱）。
 */
function fuheng_block_assets() {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_style(
    'fuheng-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300;400;500;600;700&family=Noto+Sans+TC:wght@300;400;500;700&display=swap',
    array(),
    null
  );
  wp_enqueue_style(
    'fuheng-design',
    get_theme_file_uri('assets/css/fuheng.css'),
    array('fuheng-fonts'),
    $ver
  );
  // 編輯器專用修正：載入到區塊編輯器 iframe（JS 不執行時的可見性/版面還原）
  if (is_admin()) {
    wp_enqueue_style(
      'fuheng-editor',
      get_theme_file_uri('assets/css/fuheng-editor.css'),
      array('fuheng-design'),
      $ver
    );
  }
}
add_action('enqueue_block_assets', 'fuheng_block_assets');

function fuheng_front_scripts() {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_script(
    'fuheng-main',
    get_theme_file_uri('assets/js/fuheng.js'),
    array(),
    $ver,
    true
  );
}
add_action('wp_enqueue_scripts', 'fuheng_front_scripts');

/**
 * 註冊區塊樣式支援與 pattern 分類。
 */
function fuheng_setup() {
  add_theme_support('wp-block-styles');
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_theme_support('html5', array('style', 'script'));
}
add_action('after_setup_theme', 'fuheng_setup');

function fuheng_pattern_category() {
  if (function_exists('register_block_pattern_category')) {
    register_block_pattern_category('fuheng', array('label' => __('福亨攝影區塊', 'fuheng')));
  }
}
add_action('init', 'fuheng_pattern_category');
