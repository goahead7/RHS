<?php
var_dump(http_response_code(204));
var_dump(http_response_code());
header("HTTP/1.0 204 'No Content' ");

?>