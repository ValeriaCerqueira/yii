<?php

class PostTest extends WebTestCase
{
	public $fixtures=array(
		'posts'=>'Post',
	);

	public function testIndex()
	{
	    $this->open('');
	    $this->assertTextPresent('Conexa e voce');
	    $this->assertTextPresent($this->posts['sample1']['title']);
	}

	public function testView()
	{
		$this->open('post/1/xyz');
	    $this->assertTextPresent($this->posts['sample1']['title']);
	    $this->assertTextPresent('Leave a Comment');
	}
}