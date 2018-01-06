<?php

require("vendor/torophp/torophp/src/Toro.php");





class h{
    function get() {
    	echo "hi";
    }
}

Toro::serve(array(
    "/login" => "h",
    "/user" => "h",
    "/product/([a-zA-Z0-9-_]+)" => "ProductHandler",
    "/manufacturer/([a-zA-Z]+)" => "ManufacturerHandler"
));

?>