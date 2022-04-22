<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'id' => 'acf_shortlinks',
		'title' => 'Shortlinks',
		'fields' => array (
			array (
				'key' => 'field_58bd9c741036f',
				'label' => 'Polku',
				'name' => 'path',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Lyhytosoitteen polku',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58bd9d1c26357',
				'label' => 'URL',
				'name' => 'url',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Osoite johon lyhytosoite viittaa',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'shortlink',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>