<?php

class TestClass extends PHPUnit_Framework_TestCase
{
        public function testFile()
        {
                ob_start();
                include 'umum.php';
                $content = ob_get_contents();
                ob_end_clean();
                $this->assertEquals('11, 12-1', $content);
        }
}

?>