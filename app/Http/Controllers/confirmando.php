<?php
session_start();

// Conecta ao banco de dados
$servername = "3306";
$username = "root";
$password = "root";
$dbname = "Empregos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Faz a consulta no banco de dados
$sql = "SELECT * FROM Empregos.cadastros WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

// Verifica se encontrou algum resultado
if ($result->num_rows == 1) {
    // Inicia a sessão e redireciona para a página de acesso permitido
    $_SESSION['email'] = $email;
    header('Location: vagas.php');
    exit();
} else {
    // Exibe uma mensagem de erro e redireciona para a página de login
    echo "E-mail ou senha incorretos.";
    header('Location: login.php');
    exit();
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
