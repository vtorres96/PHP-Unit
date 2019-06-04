<?php

public function testJPG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertTrue($resultado, "A função está falhando para o arquivo 'avatar.jpg'");
}


public function testPNG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.png",
      "type" => "image/png",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertTrue($resultado, "A função está falhando para o arquivo 'avatar.png'");
}



public function testJPEG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpeg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertTrue($resultado, "A função está falhando para o arquivo 'avatar.jpeg'");
}



public function testTXT(): void {
  $_FILES = [
    "avatar" => [
      "name" => "notas.txt",
      "type" => "text/plain",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertFalse($resultado, "A função está falhando para o arquivo 'notas.txt'");
}

public function testHTML(): void {
  $_FILES = [
    "avatar" => [
      "name" => "home.html",
      "type" => "text/html",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertFalse($resultado, "A função está falhando para o arquivo 'home.html'");
}

public /*...content...*/