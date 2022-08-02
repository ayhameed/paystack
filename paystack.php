<?php
/*
Plugin Name: Paystack by Digiverz
Description: A Plugin to add paystack support 
Author: Abdulhameed Yunusa
Version: 1.0
*/
add_action('admin_menu', 'paystack_menu');
 
function paystack_menu(){
    add_menu_page( 'Set Credential Page', 'PayStack by Digiverz', 'manage_options', 'digiverz-paystack', 'digi_paystack' );
}
 
function digi_paystack(){
 
}
 
?>
