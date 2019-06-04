<?php

public function testLeer1(): void {
  $arquivo = "prova.txt";
  
  $conteudo = "Prova 1";
  
  file_put_contents($arquivo, $conteudo);
  \
  $resposta = lerArquivo($arquivo);
  
  $this->assertTrue(is_string($resposta), "A função não está retornando uma string");
  
  $this->assertTrue($resposta === $conteudo, "A função está retornando '$resposta' ao invés do conteúdo do arquivo");
}

public function testLeer2(): void {
  $arquivo = "saudacao.txt";
  
  $conteudo = "Ola Mundo!";
  
  file_put_contents($arquivo, $conteudo);
  
  $resposta = lerArquivo($arquivo);
  
  $this->assertTrue(is_string($resposta), "A função não está retornando uma string");
  
  $this->assertTrue($resposta === $conteudo, "A função está retornando '$resposta' ao invés do conteúdo do arquivo");
}