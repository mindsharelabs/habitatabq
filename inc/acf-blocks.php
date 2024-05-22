<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
	'key' => 'group_664bcf77b4d58',
	'title' => 'Header Menu',
	'fields' => array(
		array(
			'key' => 'field_664bcf777c804',
			'label' => 'Menu Item Type',
			'name' => 'menu_item_type',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'text' => 'Text',
				'icon' => 'Icon',
				'button' => 'Button',
			),
			'default_value' => 'text',
			'return_format' => 'value',
			'allow_null' => 0,
			'other_choice' => 0,
			'layout' => 'vertical',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_664bcfca94dd2',
			'label' => 'Icon',
			'name' => 'icon',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '<a href="https://fontawesome.com/icons">Icons Library</a>',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_664bcf777c804',
						'operator' => '==',
						'value' => 'icon',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'fa-solid fa-link',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_664bcff094dd3',
			'label' => 'Button Color',
			'name' => 'button_color',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_664bcf777c804',
						'operator' => '==',
						'value' => 'button',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'primary' => 'Primary',
				'secondary' => 'Secondary',
				'dark' => 'Dark',
				'light' => 'Light',
				'danger' => 'Red',
				'warning' => 'Yellow',
				'success' => 'Green',
			),
			'default_value' => 'secondary',
			'return_format' => 'value',
			'allow_null' => 0,
			'other_choice' => 0,
			'layout' => 'vertical',
			'save_other_choice' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'nav_menu_item',
				'operator' => '==',
				'value' => 'location/header-menu',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

