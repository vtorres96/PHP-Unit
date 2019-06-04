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
    global $resultado;
    global $dest;
    
    $dest = "img/avatar.jpg";
    
    $this->subirAvatar();
    
    $this->assertTrue(is_bool($resultado), "Está utilizando move_uploaded_file?");
    
    $this->assertTrue($resultado, "A função está falhando se o arquivo é chamado 'avatar.jpg'");
  }
  
  public function testPNG(): void {
    $_FILES = [
      "avatar" => [
        "name" => "avatar.png",
        "type" => "image/png",
        "tmp_name" => "/tmp/img/php7hst32",
        "error" => 0,
        "size" => 1024
      ]
    ];
    global $resultado;
    global $dest;
    
    $dest = "img/avatar.png";
    
    $this->subirAvatar();
    
    $this->assertTrue(is_bool($resultado), "¿Usaste move_uploaded_file?");
    
    $this->assertTrue($resultado, "A função está falhando se o arquivo é chamado 'avatar.png");
  }
  
  public /*...content...*/
  
  Recebemos um formulário com o seguinte campo: