<?php

public function testCreacionUsuario(): void {
    $_POST = [
      "email" => "arya@stark.com",
      "username" => "aryastark",
      "password" => "Nymeria123"
    ];
    
    $usuarios = [
      [
        "email" => "jon@snow.com",
        "username" => "jonsnow",
        "password" => password_hash("Ghost123", PASSWORD_DEFAULT)
      ]
    ];
    
    $usuariosJSON = json_encode($usuarios);
    
    file_put_contents("usuarios.json", $usuariosJSON);
    
    criarUsuario();
    
    $this->assertTrue(file_exists("usuarios.json"), "¿Você apagou o arquivo usuarios.json?");
    
    $resultado = file_get_contents("usuarios.json");
    
    $this->assertTrue($resultado != "", "O arquivo usuarios.json parece estar vazio...");
    
    $resultado = json_decode($resultado, true);
    
    $this->assertTrue($resultado != null, "O arquivo parece não ter um JSON válido");
    
    $this->assertTrue(is_array($resultado), "Há algo de errado com o resultado do JSON");
    
    if (count($resultado) == 1) {
      $usuario = $resultado[0];
      
      $this->assertTrue(is_array($usuario), "Há algo de errado com o resultado do JSON");
      
      $this->assertTrue(array_key_exists("username", $usuario), "Só existe um elemento no arquivo final, deveria haver dois. Também, não tem nome de usuario");
      
      if ($usuario["username"] == "jonsnow") {
        $this->assertTrue(false, "O usuário original está sem problemas, porém, o novo usuário não foi adicionado");
      } else if ($usuario["username"] == "aryastark") {
        $this->assertTrue(false, "O usuário novo foi adicionado, porém os anteriores não foram mantidos!!");
      }
    }
    
    $this->assertTrue(count($resultado) == 2, "A quantidade de usuários no resultado não está correta");
    
    $usuario1 = $resultado[0];
    
    $this->assertTrue(array_key_exists("email", $usuario1), "O primeiro usuário não possui o e-mail armazenado");
    
    $this->assertTrue(array_key_exists("username", $usuario1), "O primeiro usuário não possui o nome de usuário armazenado");
    
    $this->assertTrue(array_key_exists("password", $usuario1), "O primeiro usuário não possui a senha armazenada");
    
    $this->assertTrue($usuario1["email"] == "jon@snow.com", "O primeiro usuário não possui o e-mail armazenado");
    
    $this->assertTrue($usuario1["username"] == "jonsnow", "O e-mail do primeiro usuário não está correto");
    
    $this->assertTrue(password_verify("Ghost123", $usuario1["password"]), "A senha do usuário não está correta");
    
    $usuario2 = $resultado[1];
    
    $this->assertTrue(array_key_exists("email", $usuario2), "O segundo usuário não possui o e-mail armazenado");
    
    $this->assertTrue(array_key_exists("username", $usuario2), "O segundo usuário não possui o nome de usuário armazenado");
    
    $this->assertTrue(array_key_exists("password", $usuario2), "O segundo usuário não possui a senha armazenada");
    
    $this->assertTrue($usuario2["email"] == "arya@stark.com", "O e-mail do segundo usuário não está correto");
    
    $this->assertTrue($usuario2["username"] == "aryastark", "O primeiro usuário não possui o e-mail armazenado");
    
    $this->assertTrue(password_verify("Nymeria123", $usuario2["password"]), "A senha do usuário não está correta");
  }