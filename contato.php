<html>
<head>
<style>
textarea{
    width: 100%;
    height:60%;
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
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:50%;
    height:25%;
    margin-left:25%;
    margin-top:80px;
}

li a.active {
    background-color: #4CAF50;
    
}


li a:hover:not(.active) {
    background-color: #111;
    
}
</style>
</head>
<body>

<ul>
  <li><a href="inicio.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="cadastro.php">Cadastro</a></li>
  <li><a class="active" href="contato.php">Contato</a></li>
  <li><a href="sobre.php">Sobre nós</a></li>
</ul>

<div>
<label for="campo"> Texto Aleatório </label>
<textarea rows="1" cols="50" wrap="physical" name="comments"></textarea>


<input type="submit" name="enviar" id="enviar" value="ENVIAR" >
</div>

</body>
</html>
