<?php

public function testArray1(): void {
    $array = [
      "Thomaz",
      "Victor",
      "Guilherme"
    ];
    
    $resultado = arrayJSON($array);
    
    $this->assertTrue(is_string($resultado), "A função não retorna uma string");
    
    $this->assertTrue($resultado === json_encode($array), "A função não retornou o JSON esperado");
  }
  
  public function testArray2(): void {
    $array = [
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
    
    $resultado = arrayJSON($array);
    
    $this->assertTrue(is_string($resultado), "A função não retorna uma string");
    
    $this->assertTrue($resultado === json_encode($array), "A função não retornou o JSON esperado");
  }