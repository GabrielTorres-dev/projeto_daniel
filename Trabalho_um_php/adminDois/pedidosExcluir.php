<?php include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM pedidos WHERE id=$id";

if ($conn->query($sql)) {
  echo "Pedido excluído!";
} else {
  echo "Erro: " . $conn->error;
}
?>