<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 23/11/16
 * Time: 17:20
 */

namespace App\Config;


class DbConnect
{
    function __construct(){ }


    public function getConnection() {
        include_once dirname(__FILE__) . '/Config.php';
        $dbhost=DB_HOST;
        $dbuser=DB_USERNAME;
        $dbpass=DB_PASSWORD;
        $dbname=DB_NAME;
        $dbh = new \PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }

}