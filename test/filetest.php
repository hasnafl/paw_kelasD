<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "klinik";

mysqli_connect($server, $user, $password) or die ("koneksi gagal");
mysqli_select_db($database) or die ("Database tidak ditemukan");

class testing extends PHPUnit_Framework_TestCase
{
    function testPassword()
    {
        $sql = mysqli_query("SELECT * FROM login where username = 'klinik1'");
        $exe = mysqli_fetch_array($sql);
        $test_user = $exe['password'];
        $content = $test_user;
        $this->assertEquals('12345', $content);
    }

    function testUsername()
    {
        $sql = mysqli_query("SELECT * FROM login where password = '12345'");
        $exe = mysqli_fetch_array($sql);
        $test_user = $exe['username'];
        $content = $test_user;
        $this->assertEquals('klinik1', $content);
    }
}
?>