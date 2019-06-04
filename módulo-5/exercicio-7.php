<?php

public function testArray1(): void {
    $array = [
      "Thomaz",
      "Victor",
      "Guilherme"
    ];
    
    $json = json_encode($array);
    
    $resultado = umArray($json);
    
    $this->assertTrue(is_array($resultado), "A função não retorna um array");
    
    $json2 = json_encode($resultado);
    
    $this->assertTrue($json == $json2, "A função não retorna o array esperado");
  }
  
  public function testArray2(): void {
    $unArray = [
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
    
    $json = json_encode($unArray);
    
    $resultado = aArray($json);
    
    $this->assertTrue(is_array($resultado), "A função não retorna um array");
    
    $json2 = json_encode($resultado);
    
    $this->assertTrue($json == $json2, "A função não retorna o array esperado");
  }