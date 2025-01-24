<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
}
if ($senha !== $senha2) {
    echo "<p style='color: red;'>As senhas não conferem. Tente novamente.</p>";
} else {
    // Aqui você pode adicionar o código para salvar os dados, por exemplo, em um banco de dados
    echo "<p style='color: green;'>Cadastro realizado com sucesso!</p>";
    echo "seja bem vindo(a)  $nome °˖✧◝(⁰▿⁰)◜✧˖°";
};


