<?php

public function testPrimerUsuario(): void {
    $usuarios = [
      0 => [
        "username" => "dariosus",
        "email" => "dario@digitalhouse.com"
      ],
      1 => [
        "username" => "aleviv",
        "email" => "alejandro@digitalhouse.com"
      ],
      2 => [
        "username" => "javih",
        "email" => "javier@digitalhouse.com"
      ]
    ];
    
    $usuarios = json_encode($usuarios);
    
    file_put_contents("usuarios.json", $usuarios);
    
    $usuario = buscarPorEmail("programacao@digitalhouse.com");
    
    $this->assertTrue(is_array($usuario), "A função não está retornando um array ao buscar o usuário 'programacao@digitalhouse.com'");
    
    $this->assertTrue(array_key_exists("email", $usuario), "O array retornado não possui a posição 'email'");
    
    $this->assertTrue($usuario["email"] === "dario@digitalhouse.com", "O usuário retornado não é o correto. Buscamos 'programacao@digitalhouse.com' porém foi retornado '" . $usuario["email"] . "'");
  }
  
  public function testSegundoUsuario(): void {
    $usuarios = [
      0 => [
        "username" => "Thomaz",
        "email" => "thomaz@digitalhouse.com"
      ],
      1 => [
        "username" => "Victor",
        "email" => "victor@digitalhouse.com"
      ],
      2 => [
        "username" => "Guilherme",
        "email" => "guilherme@digitalhouse.com"
      ]
    ];
    
    $usuarios = json_encode($usuarios);
    
    file_put_contents("usuarios.json", $usuarios);
    
    $usuario = buscarPorEmail("fullstack@digitalhouse.com");
    
    $this->assertTrue(is_array($usuario), "A função não está retornando um array ao buscar o usuário 'fullstack@digitalhouse.com'");
    
    $this->assertTrue(array_key_exists("email", $usuario), "O array retornado não possui a posição 'email'");
    
    $this->assertTrue($usuario["email"] === "alejandro@digitalhouse.com", "O usuário retornado não é o correto. Buscamos 'fullstack@digitalhouse.com' porém foi retornado '" . $usuario["email"] . "'");
  }
  
  public function testError(): void {
    $usuarios = [
      0 => [
        "username" => "Thomaz",
        "email" => "thomaz@digitalhouse.com"
      ],
      1 => [
        "username" => "Victor",
        "email" => "victor@digitalhouse.com"
      ],
      2 => [
        "username" => "Guilherme",
        "email" => "guilherme@digitalhouse.com"
      ]
    ];
    
    $usuarios = json_encode($usuarios);
    
    file_put_contents("usuarios.json", $usuarios);
    
    $usuario = buscarPorEmail("pepito@digitalhouse.com");
    
    $this->assertTrue(is_null($usuario), "A função deveria retornar NULL caso não encontre o e-mail buscado");
  }