<?php defined('SYSPATH') or die('No direct access allowed.');

/* Facebook
Permissions list: https://developers.facebook.com/docs/reference/api/permissions/
Facebook Query Language: http://developers.facebook.com/docs/reference/fql/ - no longer valid, use https://developers.facebook.com/docs/graph-api instead
*/

return array(
    'appId'			=> '1481373602121577',
    'secret'		=> '4750efc6ff6bc3b355ab5856b77d7a65',
    'cookie'		=> true,

    /* (optional) The URL to redirect the user to once the login/authorization process is complete.
    The user will be redirected to the URL on both login success and failure, so you must check the
    error parameters in the URL as described in the authentication documentation.
    If this property is not specified, the user will be redirected to the current URL
    (i.e. the URL of the page where this method was called, typically the current URL in the user's browser). 
    - changed url to URL because of Kohana 3.3 being case sensitive*/
    'redirect_uri'   => URL::site(Request::current()->uri(), true),

    /* (optional) Next URL to which to redirect the user after logging out (should be an absolute URL). */
    'next'  =>  URL::site(Request::current()->uri(), true),

    /* (optional) The permissions to request from the user. If this property is not specified, basic
    permissions will be requested from the user. */
    'scope'		=> 'email',

    /* (optional) The display mode in which to render the dialog. The default is page, but can be set to other values
    such as popup. */
    'display'   =>  'page',

    /* Fields from users table.
    changed due to fql being no longer available, to Graph API
    user: https://developers.facebook.com/docs/graph-api/reference/v2.1/user/ */
    'fields'    => 'uid, username, pic, name, email',
    
    /* Where to store session files.
       For example:  'native', 'database'
     */
    'session_type' => 'native', 
    
);
