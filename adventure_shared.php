<?php
//connect to the database
//$db = new PDO(“mysql:Host=localhost;dbname=world;port=3306”,”root”, “Nonna96$”);
require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
if(getenv('APP_ENV') === 'development'){
$dotenv->load();}
$dotenv->required(['DATABASE_URL']);
$dbopts = parse_url(getenv('DATABASE_URL'));
$dbname = ltrim($dbopts["path"], '/');
$db = new PDO("$dbopts[scheme]:host=$dbopts[host];dbname=$dbname;port=$dbopts[port]", 
    $dbopts["user"], $dbopts["pass"], array(PDO::MYSQL_ATTR_INIT_COMMAND => 
    "SET NAMES utf8"));

//this line create a new PHP Data Object
//its usage is as PDO("DB_Protocol:host=your_hostname;dbname=your_db;","Username","password");
//where DB_Protocol is the type of db you are trying to connect to
//for example sqlite or mysql
//for sqlite it is even simpler
//it would be something like PDO("sqlite:world.sqlite");

?>
