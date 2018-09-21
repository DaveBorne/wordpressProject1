<?php if ( is_404() ) { // 404
	get_template_part('templates/page-404');
} elseif( is_front_page() ) { // Homepage
	get_template_part('templates/page-home');
} elseif( is_page('news') ) { //	News
	get_template_part('templates/page-news');
} elseif(get_post_type() == 'news_posts') { // Single News Post
	get_template_part('templates/single-news');
} else { // Get Basic Page
	get_template_part('templates/_page');
} ?>