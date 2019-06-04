<?php

public function testHash(): void {
    $texto = "monito123";
    
    $resultado = $this->encriptar($texto);
    
    $this->assertTrue(is_string($resultado), "A função não está retornando uma string");
    
    $this->assertTrue(password_verify($texto, $resultado), "O hash retornado parece estar incorreto");
  }
  
  public /*...content...*/