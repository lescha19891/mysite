<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action('init','register_post_types');
add_action( 'cmb2_admin_init', 'cmb2_product' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_product() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'product',
		'title'         => __( 'описание продукта', 'cmb2' ),
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	$cmb->add_field( array(
		'name'       => __( 'Описание', 'cmb2' ),
		'desc'       => __( 'ссылка на страницу', 'cmb2' ),
		'id'         => 'product_info',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

		$cmb->add_field( array(
		'name' => __( 'Ссылка на фото ', 'cmb2' ),
		//'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'product_foto',
		'type' => 'file',
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'preview_size' => 'small'
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Стоимость', 'cmb2' ),
	//	'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'product_money',
		'type' => 'text',
		// 'repeatable' => true,
	) );

	// Add other metaboxes as needed

}

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
function register_post_types(){
	register_post_type( 'product', [
		'label'  => null,
		'labels' => [
			'name'               => 'Продукт', // основное название для типа записи
			'singular_name'      => 'Продукт', // название для одной записи этого типа
			'add_new'            => 'Добавить продукт', // для добавления новой записи
			'add_new_item'       => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование продукта', // для редактирования типа записи
			'new_item'           => 'Новый продукт', // текст новой записи
			'view_item'          => 'Смотреть продукт', // для просмотра записи этого типа.
			'search_items'       => 'Искать продукт', // для поиска по этим типам записи
			'not_found'          => 'Продукта не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Продукты', // название меню
			'items_archive'      => 'Продукты',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		// 'exclude_from_search' => true, // зависит от public
		 'show_ui'             => true, // зависит от public
		 'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => null,
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'            => array('slug' => 'products', 'with_front' => false),
		'query_var'           => true,
		'menu_icon'          => 'dashicons-nametag',
	] );
}
function mastak_register_theme_options_metabox() {

	$prefix = 'mastak_theme_options_';
	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box(array(
		'id'           => $prefix . 'page',
		'title'        => esc_html__('НСТРОЙКИ ТЕМЫ KRASNAGORKA', 'krasnagorka'),
		'object_types' => array('options-page'),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key' => 'mastak_theme_options',
		// The option key and admin menu page slug.
		//'icon_url'   => wp_get_attachment_image_src(get_option('mastak_theme_options')['footer_logo_id'], 'icon-menu')[0],//'dashicons-palmtree',
		// Menu icon. Only applicable if 'parent_slug' is left empty.
		 'menu_title'      => esc_html__( 'Krasnagorka', 'cmb2' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'      => 'yourprefix_options_page_message_callback',
		// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
		// 'tab_title'       => null, // Falls back to 'title' (above).
		// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
	));

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	
	$cmb_options->add_field(array(
		'name' => __('Контактная информация', 'cmb2'),
		'id'   => 'contacts_title',
		'type' => 'text'
	));
	$cmb_options->add_field(array(
		'name' => __('Логотип', 'cmb2'),
		'id'   => 'logo',
		'type' => 'file'
	));
	$cmb_options->add_field(array(
		'name' => __('Телефон', 'cmb2'),
		'id'   => 'tel',
		'type' => 'text'
	));
	$cmb_options->add_field(array(
		'name' => __('Лаунчер', 'cmb2'),
		'id'   => 'luncher',
		'type' => 'file'
	));
}

add_action('cmb2_admin_init', 'mastak_register_theme_options_metabox');