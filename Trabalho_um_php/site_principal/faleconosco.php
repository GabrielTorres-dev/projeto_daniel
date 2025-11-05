<?php
    echo"<h2>Fale Conosco</h2>";
?>
<form action="/action_page.php">
        <div class = "mb-3">
            <label for="pwd" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="pwd p" placeholder="Seu nome" name="pswd">
        </div>
        <div class = "mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Seu email" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Assunto:</label>
            <input type="text" class="form-control" id="email" placeholder="Assunto" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <textarea type = "text" class="form-control" id="email" name="email" placeholder="Sua mensagem"></textarea>
        </div>

        <div class="form_check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Lembrar-me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

