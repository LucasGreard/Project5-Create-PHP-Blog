<?php


abstract class db {
    public abstract function insert (array $cols_values) : int;
 }



 class userdb implements db {

    public function insert (int $myVar) : string {
        return strval($myVar);
    }
 }