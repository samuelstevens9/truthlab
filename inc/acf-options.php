<?php

if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_59e6e722b36b6',
		'title'                 => 'Blog',
		'fields'                => array(
			array(
				'key'               => 'field_59a8b1162fd9d',
				'label'             => 'Takeaway',
				'name'              => 'takeaway',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'row_min'           => '',
				'row_limit'         => 5,
				'layout'            => 'row',
				'button_label'      => 'Add Row',
				'min'               => 0,
				'max'               => 0,
				'collapsed'         => '',
				'sub_fields'        => array(
					array(
						'key'               => 'field_59a8b1282fd9e',
						'label'             => 'Tweet',
						'name'              => 'tweet',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'formatting'        => 'html',
						'maxlength'         => 140,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'seamless',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array(),
		'active'                => 1,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_59e6e9bdf4131',
		'title'                 => 'Blog Post',
		'fields'                => array(
			array(
				'key'               => 'field_59e6ea04ebab6',
				'label'             => 'Listing Image',
				'name'              => 'listing_image',
				'type'              => 'image',
				'instructions'      => 'This image must be of square dimensions. It is displayed on post listings.',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'side',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => 1,
		'description'           => 'Displays on the side',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_59e6e722b9685',
		'title'                 => 'User Fields',
		'fields'                => array(
			array(
				'key'               => 'field_59dc012ce20fb',
				'label'             => 'Professional Title',
				'name'              => 'professional_title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'formatting'        => 'html',
				'maxlength'         => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'user_role',
					'operator' => '==',
					'value'    => 'all',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'seamless',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array(),
		'active'                => 1,
		'description'           => '',
	) );

endif;