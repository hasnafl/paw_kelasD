<?php

class TestClass extends PHPUnit_Framework_TestCase
{
        public function testFile()
        {
                include 'file.php';
                $content = $user;
                $this->assertEquals(1, $content);
        }
        public function testAkses()
        {
        	include 'file.php';
        	$content = $hakakses;
        	$this->assertEquals('klinik1', $content);
        }
}

?>