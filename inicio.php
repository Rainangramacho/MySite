<html>
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
</style>
</head>
<body>

<ul>
  <li><a class="active" href="inicio.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="cadastro.php">Cadastro</a></li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="sobre.php">Sobre nós</a></li>
</ul>


</body>
</html>
