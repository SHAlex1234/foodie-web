<?php 
	/**
	 * We have to declare the session_start function at the top
	 * of the file, before anything else.  
	 */	session_start();
	
	// MySQL server settings. -------------------------------------------
	/**
	 *  Fill in your server's name.
	 */	define('SERVER', 'localhost'); 

	/**
	 *	Fill in your mysql username.
	 */	define('USERNAME', 'root'); 

	/**
	 *	Fill in your mysql password if any.
	 */	define('PASSWORD', '');

	/**
	 *	Fill in your database name.
	 */	define('DATABASE', 'test'); 

	// Mail settings. ------------------------------------------------------------
	/**
	 *	Set your smtp server like `mail.domain.com` or `smtp.mailserver.com`.
	 *  Example: If you want to send emails through Gmail the syntax is `smtp.gmail.com`.
	 *  If you you want to send emails from your website the syntax is `mail.yourWebsite.com`.
	 */	define('MAIL_HOST', 'smtp.gmail.com');
	
	/**
	 *	Set the email address that you use to log-in to your email account.
	 *	Note: The email address has to belong to the above MAIL_HOST.   	  
	 */	define('MAIL_USERNAME', 'foodies.inform@gmail.com');

	/**
	 *  Set the password you use to log-in to the above email account.
	 *  Important!! If you use Gmail as your MAIL_HOST you have to turn on 2 factor authentication
	 *  and create an App password and use it here instead of your actual google password. 
	 */	define('MAIL_PASSWORD', 'srwy jgsx ysgb pntr');
	

	// Those values are used from the PHPMailer library in the passwordReset(), 
	// and sendMessage() functions, in the functions.php file.

	// Global variables --------------------------------------------------------------------
	/**  
	 *  We define the website's name in a constant so we can use it anywhere in the application.
	 *	The WEBSITE_NAME is used in the password-recovery.php file.
	 *	Change the value to your website's name. 
	 */ define('WEBSITE_NAME', 'foodies');
	
	/**	
	 *  We define the website's URL so we can use it anywhere in the application.
	 *	The WEBSITE_URL is used in the password-recovery.php file.
	 */	//define('WEBSITE_URL', 'https://digitalfox-tutorials.com');