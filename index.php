<?php
 
// Conexão com banco de dados
$conn = new mysqli('localhost','root','','cadastro');
 
// Criar registro
$sql = "Insert into clientes values ('', 'roger', 'roger@gmail.com', 'São roque', 'SP')";
$conn->query($sql);
 
// Ler uma tabela
$sql = 'Select * From Clientes';
$result = $conn->query($sql);
 
while ($rs = $result->fetch_object()){
    var_dump($rs);
}

// Atualizar um registro de uma tabela
$sql = "UPDATE clientes SET nome='rogerio' WHERE id = 2";
$conn->query($sql);

// Deletar um registro de uma tabela
$sql = "DELETE FROM clientes WHERE id = 2";
$conn->query($sql);