<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "klinik";

mysql_connect($server, $user, $password) or die ("koneksi gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");

class testing extends PHPUnit_Framework_TestCase
{
    function testPassword()
    {
        $sql = mysql_query("SELECT * FROM login where username = 'klinik1'");
        $exe = mysql_fetch_array($sql);
        $test_user = $exe['password'];
        $content = $test_user;
        $this->assertEquals('12345', $content);
    }

    function testUsername()
    {
        $sql = mysql_query("SELECT * FROM login where password = '12345'");
        $exe = mysql_fetch_array($sql);
        $test_user = $exe['username'];
        $content = $test_user;
        $this->assertEquals('klinik1', $content);
    }
}
?>