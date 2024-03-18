<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'DASHBOARD', 
			'icon' => '<i class="material-icons ">home</i>'
		),
		
		array(
			'path' => 'menu8', 
			'label' => 'MASTER INPUT', 
			'icon' => '<i class="material-icons ">add_circle</i>','submenu' => array(
		array(
			'path' => 'tb_funsionario', 
			'label' => 'Dadus Funsionariu', 
			'icon' => '<i class="material-icons ">accessibility</i>'
		),
		
		array(
			'path' => 'tb_municipiu', 
			'label' => 'Dadus Municipiu', 
			'icon' => '<i class="material-icons ">add_box</i>'
		),
		
		array(
			'path' => 'tb_posto', 
			'label' => 'Dadus Posto', 
			'icon' => '<i class="material-icons ">add_box</i>'
		),
		
		array(
			'path' => 'tb_suco', 
			'label' => 'Dadus Suco', 
			'icon' => '<i class="material-icons ">add_box</i>'
		),
		
		array(
			'path' => 'tb_aldeia', 
			'label' => 'Dadus Aldeia', 
			'icon' => '<i class="material-icons ">add_box</i>'
		)
	)
		),
		
		array(
			'path' => 'menu3', 
			'label' => 'PROSSESU DADUS', 
			'icon' => '<i class="material-icons ">beenhere</i>','submenu' => array(
		array(
			'path' => 'tb_prossesu', 
			'label' => 'Prossesu Dadus', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		)
	)
		),
		
		array(
			'path' => 'menu4', 
			'label' => 'OUTPUT DADUS', 
			'icon' => '<i class="material-icons ">archive</i>','submenu' => array(
		array(
			'path' => 'rl_pro', 
			'label' => 'Relatori Funsionario', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		),
		
		array(
			'path' => 'rl_mun', 
			'label' => 'Relatori Municipiu', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		),
		
		array(
			'path' => 'rl_post', 
			'label' => 'Relatori Posto', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		),
		
		array(
			'path' => 'rl_suku', 
			'label' => 'Relatori Sucu', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		),
		
		array(
			'path' => 'rl_aldeia', 
			'label' => 'Relatori Aldeia', 
			'icon' => '<i class="material-icons ">bookmark_border</i>'
		)
	)
		)
	);
		
			public static $navbartopleft = array(
		array(
			'path' => 'tb_user', 
			'label' => 'Manager Admin', 
			'icon' => '<i class="material-icons ">verified_user</i>'
		)
	);
		
	
	
			public static $sexo = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
}