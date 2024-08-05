<?php
function kvfj($json, $key){
	if($json == null):
		return null;
	else:
		$json = $json;
		$json = json_decode($json, true); // convertimos en array
		if(array_key_exists($key, $json)):
			return $json[$key];
		else:
			return null;
		endif;
	endif;
}

function user_permissions(){
	$p =[
        'general' => [
			'icon' => '<i class="bi bi-home"></i>',
			'title' => 'Global',
			'keys' => [
				'all' => 'Acceso ilimitado al sistema',
				'dashboard' => 'Puede ver el dashboard'
            ]
		],
		'platform' => [
			'icon' => '<i class="bi bi-rocket-takeoff"></i>',
			'title' => 'Sistema',
			'keys' => [
				'platform_settings' => 'Configuración de la plataforma'
			]
		],
		'users' => [
			'icon' => '<i class="fas fa-user-people"></i>',
			'title' => 'Módulo de usuarios',
			'keys' => [
				'users_list' => 'Puede ver el listado de los usuarios.',
				'users_view' => 'Puede ver la información de los usuarios.',
				'users_edit' => ' Puede editar usuarios.',
				'users_permissions'  => 'Puede administrar permisos de usuarios.',
                'users_add'  => ' Puede Crear nuevos usuarios.'
			]
		],        
        'dashboard' => [
			'icon' => '<i class="fas fa-home"></i>',
			'title' => 'Módulo de dashboard',
			'keys' => [
				'dashboard' => 'Puede ver el dashboard',
				'dashboard_small_stats' => 'Puede ver las estadísticas rápidas',
				'dashboard_sell_today'  => 'Puede ver lo facturado hoy.'
			]
		],
		'products' => [
			'icon' => '<i class="fas fa-boxes"></i>',
			'title' => 'Módulo de productos',
			'keys' => [
				'products' => 'Puede ver el listado de los productos.',
				'product_add' => 'Puede agregar productos.',
				'product_edit' => 'Puede editar productos.',
				'product_search' => 'Puede buscar productos.',
				'product_delete' => 'Puede eliminar productos.',
				'product_gallery_add' => 'Puede agregar imágenes a la galería.',
				'product_gallery_delete' => 'Puede eliminar imágenes de la galería.'

			]
		],
		'categories' => [
			'icon' => '<i class="fas fa-folder-open"></i>',
			'title' => 'Módulo de categorías',
			'keys' => [
				'categories' => 'Puede ver la lista categorías.',
				'category_add' => 'Puede agregar categorías.',
				'category_edit'  => 'Puede editar categorías.',
				'category_delete'  => 'Puede eliminar categorías.'
			]
		],
		'sliders' => [
			'icon' => '<i class="far fa-images"></i>',
			'title' => 'Módulo de Sliders',
			'keys' => [
				'sliders_list' => 'Puede ver la lista de Sliders.',
				'slider_add' => 'Puede crear Sliders.',
				'slider_edit' => 'Puede editar los Sliders.',
				'slider_delete' => 'Puede eliminar los Sliders.'
			]
		],		
		'settings' => [
			'icon' => '<i class="fas fa-cogs"></i>',
			'title' => 'Módulo de configuraciones',
			'keys' => [
				'settings' => 'Puede modificar la configuración.'
			]
		],		
		'orders' => [
			'icon' => '<i class="fas fa-clipboard-list"></i>',
			'title' => 'Módulo de configuraciones',
			'keys' => [
				'orders_list' => 'Puede ver el listado de órdenes.',
			]
		]
	];
	return $p;
}