<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Tamiris Romano de Carvalho");
$pessoa->setEndereco("Etec Zona Leste");
$pessoa->setBairro("JD são Nicolau");
$pessoa->setCep("08542-231");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");

?>
<html>
    <head>
        <title>PHP</title> 
</head>
<body>
    <table style = "border: 1px solid;"> 
    <tr> 
        <td style="border: 1px solid; background-color: red"><?php echo $pessoa->getNome(); ?></td>
   </tr>
   <tr>
   <td style="border: 1px solid; background-color: orange"><?php echo $pessoa->getEndereco(); ?></td>
</tr>
<tr>
   <td style="border: 1px solid; background-color: yellow"><?php echo $pessoa->getBairro(); ?></td>
</tr>
<tr>
   <td style="border: 1px solid; background-color: green"><?php echo $pessoa->getCep(); ?></td>
</tr>
<tr>
   <td style="border: 1px solid; background-color: blue"><?php echo $pessoa->getCidade(); ?></td>
</tr>
<tr>
   <td style="border: 1px solid; background-color: purple "><?php echo $pessoa->getEstado(); ?></td>
</tr>
</table>
</body>
</html>   