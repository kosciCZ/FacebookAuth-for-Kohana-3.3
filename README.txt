Facebook-for-Kohana-3.3
=======================

Facebooka API for Kohana 3.3, since Kohana got case sensitive classes and Facebook no longer supports FQL

Instuctions:
1) Extract the repository in modules/facebookauth - this folderneeds to be created
2) Configure it by modifying facebookauth/config/facebook.php - appId and secret are absolutely neccesary
3) Enable it as a module, in bootstrap.php paste following in the Kohana::Modules :'facebookauth'	=> MODPATH.'facebookauth',
4)
