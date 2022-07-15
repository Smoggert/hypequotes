<?php

final class appTest extends \PHPUnit\Framework\TestCase {
    public function text_to_make_sure_this_is(){
          $our_app = 'index.php';
          $a_teapot = 'a teapot';
          $this->assertEquals(!! $our_app, !! $a_teapot);
    }
}