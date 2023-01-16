<?php
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-emoji-release' );
}
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function create_post_type() {
  register_post_type( 'news',  // カスタム投稿ID
    array(
      'label' => 'お知らせ',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array(
				'title',  // 記事タイトル
				'editor',  // 記事本文
				'thumbnail',  // アイキャッチ画像
				'revisions',  // リビジョン
			)
    )
  );
	register_taxonomy(
    'news-cat',
    'news', // カテゴリーを追加したいカスタム投稿タイプ名
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_post_type( 'work',  // カスタム投稿ID
  array(
    'label' => '制作実績',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => array(
      'title',  // 記事タイトル
      'thumbnail',  // アイキャッチ画像
      'revisions',  // リビジョン
    )
  )
);
}
add_action( 'init', 'create_post_type' );

function remove_menus () {
  global $menu;
  remove_menu_page( 'edit.php' ); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');

add_theme_support( 'post-thumbnails' );  //全投稿でアイキャッチ有効
?>