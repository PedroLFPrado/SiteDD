<?php

$host = "localhost";
$db_name = "sitedd";
$username = "root";
$password = "";
$connection = null;

/* Conectando no banco de dados */
try 
{
    $connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $connection->exec("set names utf8");
    //echo "Conectado";
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
    

function saveData($firstname, $lastname, $tel, $email, $cartao)
{
    global $connection;

    $firstname=htmlspecialchars(strip_tags($firstname));
    $lastname=htmlspecialchars(strip_tags($lastname));
    $tel=htmlspecialchars(strip_tags($tel));
    $email=htmlspecialchars(strip_tags($email));
    $cartao=htmlspecialchars(strip_tags($cartao));

    $query = "INSERT INTO usuarios (primeironome, segundonome, telefone, email, numerocartao) VALUES( ?,?,?,?,? )";
    $stmt= $connection->prepare($query);
   
    if ($stmt->execute([$firstname, $lastname, $tel, $email, $cartao]))
    {
        $html = '<h3 style="text-align:center;">Dados salvos com sucesso</h3>';
        $html = $html . '<a href="./index.php">Voltar</a>';    
       return  $html;
    }
}


/* Pegando os valores enviados no form HTML */
if( isset($_POST['submit'])){
$firstname = html_entity_decode(htmlentities($_POST['firstname']));
$lastname = html_entity_decode(htmlentities($_POST['lastname']));
$tel = html_entity_decode(htmlentities($_POST['tel']));
$email = html_entity_decode(htmlentities($_POST['useremail']));
$cartao = html_entity_decode(htmlentities($_POST['cartao']));

//Salvando dados no BD 
$result = saveData($firstname, $lastname, $tel, $email, $cartao);
echo $result;
}
else{
echo '<h3 style="text-align:center;">Acesso inválido ( ͡° ͜ʖ ͡°)</h3>';
}

?>