<div class="title">
  Desafio String
</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
// na string 'AbcaBcabc' retorna 1?

//Minha resposta (esqueci do "!" kk)
$mystring = 'AbcaBcabc';
$findme = 'abc';
$pos = stripos('x'.$mystring, $findme, 1);
echo $pos . '<br>';

//Resposta do Curso
echo stripos('!AbcaBcabc', 'abc');
