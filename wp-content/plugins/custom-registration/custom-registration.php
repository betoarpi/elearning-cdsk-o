<?php
/*
  Plugin Name: Registro Personalizado
  Plugin URI: http://www.medrenlogic.com.mx
  Description: Registro personalizado para Cedesko
  Version: 1.0
  Author: Rob Arroyo
  Author URI: https://github.com/betoarpi
 */

 // Función que contiene la nueva forma de registro
 function registration_form( $username, $password, $email, $embotelladora, $first_name, $last_name ) {
    echo '
    <h3 class="Title">Formulario de Registro</h3>
    <form id="loginform-custom" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
	    <p>
	    	<label for="username">Nombre de Usuario <strong>*</strong></label>
	    	<input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
	    </p>
     
	    <p>
		    <label for="password">Contraseña <strong>*</strong></label>
		    <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
	    </p>
     
	    <p>
		    <label for="email">Email <strong>*</strong></label>
		    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
	    </p>
     
	    <p>
		    <label for="embotelladora">Embotelladora <strong>*</strong></label>
		    <select name="embotelladora" id="embotelladora">
	        	<option value="">Seleccione una opción</option>
	        	<option value="1">Coca-Cola de México</option>
	        	<option value="2">Corporación del Fuerte</option>
	        	<option value="3">Bebidas Refrescantes de Nogales</option>
	        	<option value="4">Corporación RICA</option>
	        	<option value="5">Jugos del Valle</option>
	        	<option value="6">Arca-Continental</option>
	        	<option value="7">Coca-Cola Femsa</option>
	        	<option value="8">BEPENSA</option>
	        	<option value="9">Embotelladora de Colima</option>
	        	<option value="10">Embotelladora del Nayar</option>
	        	<option value="11">Industria Envasadora de Querétaro</option>
	        	<option value="12">Grupo Yoli</option>
	        	<option value="15">CEDESKO</option>
	        	<option value="20">Medrenlogic</option>
	        	<option value="21">Imer</option>
	        	<option value="22">PetStar</option>
	        	<option value="23">Laboratorio de Servicios Analíticos</option>
	        	<option value="24">Planta de Concentrados</option>
	        	<option value="25">Promesa</option>
	        	<option value="26">ASCOCA</option>
	        	<option value="27">KIOSKO</option>
	        	<option value="28">CEDESKO CONSULTORES</option>
	        	<option value="29">Llorente y Cuenca</option>
	        	<option value="30">The Coca-Cola Company</option>
	        	<option value="31">Avangard</option>
	        	<option value="32">Santaclara</option>
	        </select>
	    </p>
     
	    <p>
		    <label for="firstname">Nombre</label>
		    <input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
	    </p>
     
	    <p>
		    <label for="lastname">Apellido</label>
		    <input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
	    </p>

    	<input class="button-primary" type="submit" name="submit" value="Registrarse"/>
    </form>
    ';
}

// Validación del Registro
function registration_validation( $username, $password, $email, $embotelladora, $first_name, $last_name )  {
	global $reg_errors;
	$reg_errors = new WP_Error;

	if ( empty( $username ) || empty( $password ) || empty( $embotelladora ) || empty( $email ) ) {
	    $reg_errors->add('field', 'Hay algunos campos obligatorios incompletos o incorrectos.');
	}

	if ( 4 > strlen( $username ) ) {
	    $reg_errors->add( 'username_length', 'El Nombre de Usuario es muy corto. Debe contener al menos 4 caracteres.' );
	}

	if ( username_exists( $username ) )
    $reg_errors->add('user_name', 'Lo sentimos, ese Nombre de Usuario ya existe. Intente con otro por favor.');

	if ( ! validate_username( $username ) ) {
	    $reg_errors->add( 'username_invalid', 'Lo sentimos, el Nombre de Usuario no es válido.' );
	}

	if ( 8 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'El password debe contener más de 8 caracteres' );
    }

    if ( !is_email( $email ) ) {
	    $reg_errors->add( 'email_invalid', 'El Correo Electrónico no es válido.' );
	}

	if ( email_exists( $email ) ) {
	    $reg_errors->add( 'email', 'Este Correo Electrónico ya está en uso.' );
	}
	
	if ( is_wp_error( $reg_errors ) ) {
	    foreach ( $reg_errors->get_error_messages() as $error ) {  
	        echo '<p>';
	        echo '<strong>ERROR</strong>:';
	        echo $error . '<br/>';
	        echo '</p>';    
	    }
	}
}

// Función para completar el registro
function complete_registration() {
    global $reg_errors, $username, $password, $email, $embotelladora, $first_name, $last_name;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
        'user_login'    =>   $username,
        'user_email'    =>   $email,
        'user_pass'     =>   $password,
        'embotelladora' =>   $embotelladora,
        'first_name'    =>   $first_name,
        'last_name'     =>   $last_name,
        );
        $user = wp_insert_user( $userdata );
        echo '¡El registro se completó exitosamente! <a href="' . get_site_url() . '/iniciar-sesion/">Inicia Sesión</a>.';   
    }
}

// Que funcione!
function custom_registration_function() {
    if ( isset($_POST['submit'] ) ) {
        registration_validation(
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['embotelladora'],
        $_POST['fname'],
        $_POST['lname']
        );
         
        // sanitize user form input
        global $username, $password, $email, $embotelladora, $first_name, $last_name, $nickname, $bio;
        $username   	=   sanitize_user( $_POST['username'] );
        $password   	=   esc_attr( $_POST['password'] );
        $email      	=   sanitize_email( $_POST['email'] );
        $embotelladora  =   sanitize_select( $_POST['embotelladora'] );
        $first_name 	=   sanitize_text_field( $_POST['fname'] );
        $last_name  	=   sanitize_text_field( $_POST['lname'] );
 
        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
        $username,
        $password,
        $email,
        $embotelladora,
        $first_name,
        $last_name
        );
    }
 
    registration_form(
        $username,
        $password,
        $email,
        $embotelladora,
        $first_name,
        $last_name
        );
}

// Registra nuevo shortcode: [cdsko_regsitro]
add_shortcode( 'cdsko_regsitro', 'custom_registration_shortcode' );
 
// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}