<?php

public function testAgregarUsuario1(): void {
    $usuarios = [
      0 => [
        "nome" => "Cássio",
        "sobrenome" => "Ramos"
      ],
      1 => [
        "nome" => "Marcos",
        "sobrenome" => "Mion"
      ]
    ];
    
    $usuariosJSON = json_encode($usuarios);
    
    $novoUsuario = [
      "nome" => "Chico",
      "sobrenome" => "Xavier"
    ];
    
    $resultado = agregarUsuario($usuariosJSON, $novoUsuario);
    
    $this->assertTrue(is_string($resultado), "O resultado da função deveria ser uma string");
    
    $usuarios[] = $novoUsuario;
    $usuariosJSON = json_encode($usuarios);
    
    $this->assertTrue($usuariosJSON === $resultado, "O resultado obtido não é o esperado");
  }
  
  public function testAgregarUsuario2(): void {
    $usuarios = [
  
    ];
    
    $usuariosJSON = json_encode($usuarios);
    
    $novoUsuario = [
      "nome" => "Chico",
      "sobrenome" => "Xavier"
    ];
    
    $resultado = agregarUsuario($usuariosJSON, $novoUsuario);
    
    $this->assertTrue(is_string($resultado), "O resultado da função deveria ser uma string);
    
    $usuarios[] = $novoUsuario;
    $usuariosJSON = json_encode($usuarios);
    
    $this->assertTrue($usuariosJSON === $resultado, "O resultado obtido não é o esperado");
  }
  
  public function testAgregarUsuario3(): void {
    $usuarios = [
      0 => [
        "nome" => "Thomaz",
        "sobrenome" => "Staziak"
      ],
      1 => [
        "nome" => "Victor",
        "sobrenome" => "Torres"
      ],
      2 => [
        "nome" => "Guilherme",
        "sobrenome" => "Sartori"
      ]
    ];
    
    $usuariosJSON = json_encode($usuarios);
    
    $novoUsuario = [
      "nome" => "Chico",
      "sobrenome" => "Xavier"
    ];
    
    $resultado = agregarUsuario($usuariosJSON, $novoUsuario);
    
    $this->assertTrue(is_string($resultado), "O resultado da função deveria ser uma string");
    
    $usuarios[] = $novoUsuario;
    $usuariosJSON = json_encode($usuarios);
    
    $this->assertTrue($usuariosJSON === $resultado, "O resultado obtido não é o esperado");
  }