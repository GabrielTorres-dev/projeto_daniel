<?php include 'db.php'; ?>

<h2>Lista de Pedidos</h2>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Cliente</th>
    <th>Produto</th>
    <th>Data</th>
    <th>Ações</th>
  </tr>

<?php
$result = $conn->query("SELECT * FROM pedidos");
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nome_cliente']}</td>
    <td>{$row['produto']}</td>
    <td>{$row['data_pedido']}</td>
    <td>
      <a href='update.php?id={$row['id']}'>Editar</a> |
      <a href='delete.php?id={$row['id']}'>Excluir</a>
    </td>
  </tr>";
}
?>
</table>