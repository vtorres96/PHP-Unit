<?php 

public function testImagenOk(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarAvatar();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um booleano");
  
  $this->assertTrue($resultado, "A função falha se o carregamento do arquivo não tiver erros");
}


public function testImagenError(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 3,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarAvatar();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um booleano");
  
  $this->assertFalse($resultado, "A função falha.
Recebemos um formulário com pelo menos o seguinte campo: se o carregamento do arquivo tiver erros");
}

public /*...content...*/