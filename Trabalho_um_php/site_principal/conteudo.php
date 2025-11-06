<?php
    echo "<h2> Conteudo</h2>"
?>
<form action="pedidos_inc.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome do Cliente:</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" id="produto" required>
    </div>
    
    <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" min="1" required>
    </div>
    
    <div class="form-group">
        <label for="endereco">Endereço de Entrega:</label>
        <textarea name="endereco" id="endereco" required></textarea>
    </div>
    
    <button type="submit">Enviar Pedido</button>
</form>