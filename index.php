<?php
/**
 * Created by PhpStorm.
 * User: romart
 * Date: 3/11/19
 * Time: 6:58 PM
 */

if ($_SERVER["REQUEST_METHOD"]=="GET"){
    $request_page = $_GET["page"];
    include "frontend/templates/". $request_page .".php";
}