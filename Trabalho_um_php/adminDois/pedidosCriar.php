<?php include 'db.php'; ?>

<form method="POST">
  Nome do Cliente: <input type="text" name="nome_cliente"><br>
  Produto: <input type="text" name="produto"><br>
  Data do Pedido: <input type="date" name="data_pedido"><br>
  <input type="submit" value="Cadastrar">
</form>

<?php
if ($_POST) {
  $nome = $_POST['nome_cliente'];
  $produto = $_POST['produto'];
  $data = $_POST['data_pedido'];

  $sql = "INSERT INTO pedidos (nome_cliente, produto, data_pedido) VALUES ('$nome', '$produto', '$data')";
  if ($conn->query($sql)) {
    echo "Pedido cadastrado com sucesso!";
  } else {
    echo "Erro: " . $conn->error;
  }
}
?>