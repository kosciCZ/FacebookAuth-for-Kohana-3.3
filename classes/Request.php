<?php
class Request extends Kohana_Request {

/**
 * Kohana Redirect Method
 * @param string $url
 */
public function redirect($url) {
    HTTP::redirect($url);
}
}
?>