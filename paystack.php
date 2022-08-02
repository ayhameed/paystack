<?php
/*
Plugin Name: Test plugin
Description: A test plugin to demonstrate wordpress functionality
Author: Simon Lissack
Version: 0.1
*/
add_action('admin_menu', 'paystack_menu');
 
function paystack_menu(){
    add_menu_page( 'Set Credential Page', 'PayStack by Digiverz', 'manage_options', 'digiverz-paystack', 'digi_paystack' );
}
 
function digi_paystack(){
  <form action="/action_page.php">
  	<label for="key">SecretKey:</label><br>
  	<input type="text" id="fname" name="fname" value="John"><br>
  	<input type="submit" value="Submit">
</form> 
}
 
?>
