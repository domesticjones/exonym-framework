<?php
  if (!defined('WPINC')) { die; }
  
  if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
  	'key' => 'group_59f8ec9ab99b2',
  	'title' => 'Exonym - Staff',
  	'fields' => array(
  		array(
  			'key' => 'field_59f8ecdb987d7',
  			'label' => 'Position',
  			'name' => 'position',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array(
  			'key' => 'field_59fa1590c6603',
  			'label' => 'Quote',
  			'name' => 'quote',
  			'type' => 'textarea',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => 3,
  			'new_lines' => 'br',
  		),
  		array(
  			'key' => 'field_59f8ed50987db',
  			'label' => 'Photo',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f8ecee987d8',
  			'label' => 'Photos',
  			'name' => 'photos',
  			'type' => 'group',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'layout' => 'table',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f8ed12987d9',
  					'label' => 'Head Shot',
  					'name' => 'head_shot',
  					'type' => 'image',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  					'preview_size' => 'thumbnail-medium',
  					'library' => 'all',
  					'min_width' => '',
  					'min_height' => '',
  					'min_size' => '',
  					'max_width' => '',
  					'max_height' => '',
  					'max_size' => '',
  					'mime_types' => '',
  				),
  				array(
  					'key' => 'field_59f8ed3f987da',
  					'label' => 'Alternate',
  					'name' => 'alternate',
  					'type' => 'image',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  					'preview_size' => 'thumbnail-medium',
  					'library' => 'all',
  					'min_width' => '',
  					'min_height' => '',
  					'min_size' => '',
  					'max_width' => '',
  					'max_height' => '',
  					'max_size' => '',
  					'mime_types' => '',
  				),
  			),
  		),
  		array(
  			'key' => 'field_59f8ed61987dc',
  			'label' => 'Contact',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f8efa6987de',
  			'label' => 'Contact Methods',
  			'name' => 'contact_methods',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => 'Add Contact Method',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f8ed6f987dd',
  					'label' => 'Contact Type',
  					'name' => 'contact_type',
  					'type' => 'select',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'choices' => array(
  						'email' => 'Email Address',
  						'facebook' => 'Facebook',
  						'instagram' => 'Instagram',
  						'linkedin' => 'LinkedIn',
  						'phone' => 'Phone Number',
  						'pinterest' => 'Pinterest',
  						'twitter' => 'Twitter',
  						'website' => 'Website',
  					),
  					'default_value' => array(
  					),
  					'allow_null' => 0,
  					'multiple' => 0,
  					'ui' => 0,
  					'ajax' => 0,
  					'return_format' => 'value',
  					'placeholder' => '',
  				),
  				array(
  					'key' => 'field_59f8efcb987df',
  					'label' => 'Info',
  					'name' => 'info',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  			),
  		),
  		array(
  			'key' => 'field_59f8f01a987e0',
  			'label' => 'Bio',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f8f021987e1',
  			'label' => 'Bio',
  			'name' => 'bio',
  			'type' => 'wysiwyg',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'tabs' => 'all',
  			'toolbar' => 'full',
  			'media_upload' => 1,
  			'delay' => 0,
  		),
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'staff',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'acf_after_title',
  	'style' => 'seamless',
  	'label_placement' => 'left',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array(
  	'key' => 'group_5a1f84b391c69',
  	'title' => 'ExStaff - Module Settings',
  	'fields' => array(
  		array(
  			'key' => 'field_5a206c3b338a9',
  			'label' => 'Staff Layout',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'left',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_5a20736c3f042',
  			'label' => 'Staff Members',
  			'name' => 'staff_members',
  			'type' => 'relationship',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'post_type' => array(
  				0 => 'staff',
  			),
  			'taxonomy' => array(
  			),
  			'filters' => array(
  				0 => 'search',
  				1 => 'taxonomy',
  			),
  			'elements' => '',
  			'min' => '',
  			'max' => '',
  			'return_format' => 'object',
  		),
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'post',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 0,
  	'description' => '',
  ));

  endif;
