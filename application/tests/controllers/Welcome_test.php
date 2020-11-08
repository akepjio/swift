<?php

class Welcome_test extends TestCase
{
public function page_test()
{
$this->request('GET', '/welcome');
$this->assertResponseCode(200);
}
}

?>
