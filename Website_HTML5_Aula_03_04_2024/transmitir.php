<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
$servidor = "localhost";
$username = "root";
$password = "root";

$email = $_POST['email'];
$senha = $_POST['senha'];
try{
$conn = new PDO("mysql:host=$servidor;dbname=mydb", $username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$login = "SELECT cadastro.nome FROM usuarios WHERE email =='brendo99@gmail.com' and senha=='123'";
$login = $conn->prepare($login);
 $result = $login->fetch();
if ($email=="marcelo@dominio.com" and $senha=="123"){
                header('Content-Type: text/html; charset=utf-8');
                echo "Login efetuado com sucesso!, seja bem vindo <b>";
            }else{    
                echo "cadastro realizado com sucesso!";
            }

$conn = null;
exit();
}catch(PDOException $e){
    echo " Falha na conexão:". $e->getMessage();
}
   }
exit();
?>
