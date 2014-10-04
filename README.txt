FacebookAuth-for-Kohana-3.3
=======================

Facebook API for Kohana 3.3, since Kohana got case sensitive classes and Facebook no longer supports FQL

Instuctions:
1) Extract the repository in modules/facebookauth - this folderneeds to be created
2) Configure it by modifying facebookauth/config/facebook.php - appId and secret are absolutely neccesary
3) Enable it as a module, in bootstrap.php paste following in the Kohana::Modules :
'facebookauth'	=> MODPATH.'facebookauth',

Example:
$fb = FacebookAuth::factory();

if($fb->logged_in())
{
	echo $fb->get('email');
}
else
{
	Request::current()->redirect($fb->login_url());
}

You should be able to use it. However, there could be some mistakes, that may cause this module to fail. Common issues are that access_token is get by server-to-server call, which can't be done when your localhost is not accessible b public IP.
You may have noticed the Request::current()->redirect, as it is no longer used in Kohana 3.3. I had sorted it with additional class.

You can use these functions:
logged_in() - boolean, checks if the user is logged in and has enabled all the permissions
user_id() - returns uid of the user, if failed returns False
get($key) - gets specificparameter of the user
login_url() - returns url that user can login with
logout_url() - returns url that user can logout with

This module is not my work, I had just edited https://github.com/mobal/kohana-facebookauth-module by Mobal to correspond with new Facebook Graph API and Kohana 3.3 rules.
