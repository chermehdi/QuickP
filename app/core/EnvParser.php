<?php


class EnvParser {

  public static $database;
  public static $username;
  public static $password;
  public static $charset;
  public static $driver;
  public static $host;
  public static function init(){
  $str = file_get_contents("../env.json");
  $json = json_decode($str, true);

  self::$database = $json['DB_NAME'];
  self::$username = $json['USER_NAME'];
  self::$password = $json['PASSWORD'];
  self::$driver = $json['DRIVER'];
  self::$charset = $json['CHARSET'];
  self::$host = $json['HOST'];
  }

}
