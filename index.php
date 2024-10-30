<?php
/*
Plugin Name: Cheerful password generator
Plugin URI: http://oleksandrustymenko.com/cpg
Description: Cheerful Password Generator. Simply enter the [cpg] shortcode in a post or page.
Version: 1.0
Author: Oleksandr Ustymenko
Author URI: http://oleksandrustymenko.com
*/

/*  
	Copyright 2016 oleksandr87 (email:ustymenkooleksandrnew@gmail.com)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!defined('ABSPATH')) exit;

function oucpg_file()
{
    wp_enqueue_script( 'jquery');
	wp_localize_script( 'jquery', 'oucpgcode', 
	array(
   'oucpgcode_url'   => admin_url('admin-ajax.php'),
   'oucpgcode_nonce' => wp_create_nonce('rfigjreifdj')
	));
}

add_action('wp_enqueue_scripts', 'oucpg_file');


 function cpggeneratepassword2()
{
	require_once( plugin_dir_path(__FILE__).'cpggeneratepassword.php');
	exit;
}

add_action( 'wp_ajax_nopriv_cpggeneratepassword', 'cpggeneratepassword2');
add_action( 'wp_ajax_cpggeneratepassword', 'cpggeneratepassword2');

function oucpg_function()
{
	require_once( plugin_dir_path(__FILE__).'cpg.php');
}

add_shortcode('cpg', 'oucpg_function');
?>