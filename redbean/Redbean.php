<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Redbean {

    function __construct() {
        // Include database configuration
        include(APPPATH.'/config/database.php');

        // Get Redbean
        include(__DIR__.'/rb.php');

        // Database data
        $host = $db[$active_group]['hostname'];
        $user = $db[$active_group]['username'];
        $pass = $db[$active_group]['password'];
        $db = $db[$active_group]['database'];

        // Setup DB connection
        R::setup("mysql:host=$host;dbname=$db", $user, $pass);
        if (!R::testConnection()) {
            die("Redbean Can't Connect to database Please Check!");
        }
    } //end __contruct()
}
