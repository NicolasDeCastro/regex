<?php

//um pouco sobre o funcionamento de das REGEX regular expression,de maneira breve, um metodo de vc especificar oque vc quer verificar na string,COMPLEXO.
$telefone=['(22) 99999 - 9999','(29) 98888 - 8888','(32) 97777 - 7777'];


foreach($telefone as $telefones){

    $telefoneregex=preg_match('/(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}/',$telefones,$casamento);
    if($telefoneregex){

        echo "telefone valido".PHP_EOL;


    }else{

        echo "telefone invalido".PHP_EOL;
   
    }

    var_dump($casamento);
   echo preg_replace('/(\([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})/','(xx) \2',$telefones).PHP_EOL;
}





