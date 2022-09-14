<?php 
// it's working only menu custom link and link have started with #
function change_menu_URL($items){
		if(!is_front_page()){
			foreach ($items as $key => $item) {
				if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
					$item->url = site_url() . $item->url;
				}
			}
		}
		return $items;
	}
	add_filter('wp_nav_menu_objects', 'change_menu_URL');
