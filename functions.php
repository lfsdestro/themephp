<?php

require_once("inc/highlights-custom-post-type.php");

add_action('after_setup_theme', 'setup_rock_theme');

function setup_rock_theme() {
    
    // adiciona suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // adiciona suporte a logomarca para o site
    add_theme_support('custom-logo');

    // adiciona um novo tamanho de thumbnail para os destaques
    add_image_size('highlights', 1110, 300, true);
    
    // adiciona suporte a menus
    register_nav_menus(
        array(
            'primary' => 'Menu principal'
        ));
        
}

add_action('wp_enqueue_scripts', 'rock_scripts');

function rock_scripts() {

    // adiciona um stylesheet ao tema    
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,900');
    wp_enqueue_style('rock-style', get_stylesheet_directory_uri() . '/css/themeone.css');

    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'));
    
    // adiciona um script ao tema 
    //wp_enqueue_script('rock-script', get_stylesheet_directory_uri() . '/js/theme.js');

}

/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function bootstrap_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li class="media">
			<div class="media-left">
				<?php echo get_avatar( $comment ); ?>
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<?php comment_author_link() ?>
				</h4>
				<time>
					<a href="#comment-<?php comment_ID() ?>" pubdate>
						<?php comment_date() ?> at <?php comment_time() ?>
					</a>
				</time>
				<?php comment_text() ?>
			</div>
		<?php endif;
	}
