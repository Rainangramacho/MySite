<html lang="pt-br">

<?php
include "conexao.php";
?>

<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    overflow: hidden;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
    text-align:center;
}

li a.active {
    background-color: #4CAF50;
    
}

li a:hover:not(.active) {
    background-color: #111;
    
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:50%;
    height:25%;
    margin-left:25%;
    margin-top:80px;
}
</style>
</head>
<body>

<ul>
  <li><a href="inicio.php">Home</a></li>
  <li><a class="active" href="login.php">Login</a></li>
  <li><a href="cadastro.php">Cadastro</a></li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="sobre.php">Sobre nós</a></li>
</ul>


<div>
  <form name="form" method="POST" action="">
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="">

    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="">

    <input type="submit" name="logar" id="logar" value="Cadastrar">
 
</div>


<?PHP if(isset($_POST["logar"])){
        
               
        $login=$_POST['email'];
        $senha=$_POST['senha'];
        
        $sql =" SELECT * FROM formulario_web WHERE nome = '$login' AND senha = '$senha' ";
        $resultado = mysqli_query($mysqli,$sql);
       
       

        if($resultado){
   
           $dados_usuario = mysqli_fetch_array($resultado);
   
           if(isset($dados_usuario['nome'])){
   
               echo 'usuário existe';
               header('Location:inicio.php?=conectado');
   
           }else{
   
               header('Location: login.php?erro=1');
   
           }
   
       }else{
           
           echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
   
       }



        
        

        
        
    }
    
?>



 </form>

</body>
</html>
