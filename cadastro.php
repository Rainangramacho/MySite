<!DOCTYPE html>

<html  lang="pt-br">

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
input[type=number], select {
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
    height:50%;
    margin-left:25%;
    margin-top:50px;
}
</style>
</head>
<body>

<ul>
  <li><a href="inicio.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a class="active" href="cadastro.php">Cadastro</a></li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="sobre.php">Sobre nós</a></li>
</ul>

<div>
  <form name="form" method="POST" action="">

  <label>Nome
  <input  type="text" placeholder= "Nome de Usuário" name="pergunta1" id="pergunta1" > </input><br> <br> 
  </label>

  <label>Senha
  <input  type="password" placeholder="Senha" name="pergunta2" id="pergunta2" > </input> <br> <br>
  </label>

  <label>CPF
  <input  type="number" placeholder="CPF" name="cpf" id="cpf" > </input> <br> <br>
  </label>

  <label>E-mail
  <input  type="email" placeholder="E-mail" name="email" id="email" > </input> <br> <br>
  </label>

    <label for="pais">País</label>
    <select id="pais" name="pais">
      <option value="argentina">Argentina</option>
      <option value="brasil">Brasil</option>
      <option value="canada">Canadá</option>
      <option value="chile">Chile</option>
      <option value="mexico">México</option>
      <option value="uruguai">Uruguai</option>
      <option value="usa">USA</option>
      

      
    </select>
  
    <input type="submit" name="cadastro2" id="cadastro2" value="CADASTRAR" />


</div>        

    <?PHP if(isset($_POST["cadastro2"])){
        
               
        $login_contratante=$_POST['pergunta1'];
        $senha_contratante=$_POST['pergunta2'];
        
        $sql = "INSERT INTO formulario_web(nome,senha)
        VALUES ('$login_contratante','$senha_contratante')";

        

        $resultado = mysqli_query($mysqli,$sql);
        
    }
    
?>


    

</form>
</section>

</body>



</html>
