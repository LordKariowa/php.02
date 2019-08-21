<?php

     $nome=$_POST["nome"];
     $email=$_POST["email"];
     $estadocivil=$_POST["estadocivil"];
     $sexo=$_POST["sexo"];

include_once 'conexao.php';

echo $nome."<br>";
echo $email."<br>";
echo $estadocivil."<br>";
echo $sexo. "<br>";

     $con= mysqli_connect("localhost","root","","cadastrodeclipt-brte");

     $sql= "INSERT INTO clipt-brte VALUES(null, '{$nome}','{$email}','{$estadocivil}','{$sexo}')";

     $msg = (mysqli_querry($con, sql))
         ? "Gravado com Sucesso"
         : "Erro ao Gravar";

header ("localhost:msg.php?variavel",$msg);


if (mysqli_query($con, $sql))

{
    echo "Gravado com sucesso";
}else{
    echo "Erro ao Gravar";
}

?>