<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM pedidos WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
  Nome do Cliente: <input type="text" name="nome_cliente" value="<?= $row['nome_cliente'] ?>"><br>
  Produto: <input type="text" name="produto" value="<?= $row['produto'] ?>"><br>
  Data do Pedido: <input type="date" name="data_pedido" value="<?= $row['data_pedido'] ?>"><br>
  <input type="submit" value="Atualizar">
</form>

<?php
if ($_POST) {
  $nome = $_POST['nome_cliente'];
  $produto = $_POST['produto'];
  $data = $_POST['data_pedido'];

  $sql = "UPDATE pedidos SET nome_cliente='$nome', produto='$produto', data_pedido='$data' WHERE id=$id";
  if ($conn->query($sql)) {
    echo "Pedido atualizado!";
  } else {
    echo "Erro: " . $conn->error;
  }
}
?>