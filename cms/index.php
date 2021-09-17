<?php 
include("functions/conexao.php");
?>
<meta charset="utf-8">
<header>
<title>CMS RENARD</title>
</header>

<body style="background-color:#7752c7;">


<div class="containerLogin">
<form action="functions/validalogin.php" method="POST">
<br><br><br>
<h4> RENARD </h4>
<input class="finput" name="login" placeholder="Digite seu email: "> <br><br>
<input class="finput" name="senha" type="" placeholder="Digite sua senha: "><br><br>
<input type="submit" class="fbutton">
</form>
</div>

<style>
.containerLogin{
    background-color: #ffff;
    width: 450px;
    height: 430px;
    text-align: center;
    border-radius: 8px;
    margin-left: 500px;
    margin-top: 150px;
}
.finput {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 300px;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.fbutton {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #6e42cf;
  width: 150px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
}

h4{
text-align: center;
font-family: 'Trebuchet MS', Helvetica, sans-serif;
font-size: 28px;
letter-spacing: 2px;
word-spacing: 2px;
color: #7464BF;
font-weight: normal;
text-decoration: none;
font-style: normal;
font-variant: small-caps;
text-transform: uppercase;
}
</style>
</body>



</html>