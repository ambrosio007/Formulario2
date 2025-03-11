<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="style.css"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form action="fun.php" method="post">
                
            <div class="inp-single">
                <h1>Formulario de Cadastro</h1>
                    
                <p>Preencha todo o formulario a baixo por favor</p>

                <div class="inp">

                    <label for="id_email">E-mail:</label>
                    <input type="text" name="email" id="id_email" placeholder="E-mail" class="inp_style">
                    <br> <br>
                    <label for="id_nome">Nome Completo:</label>
                    <input type="text" name="nome" id="id_nome" placeholder="nome" class="inp_style" required>
                    <br> <br>
                    <label for="id_num_tel">Número de Telefone:</label>
                    <input type="text" name="num_tel" id="id_num_tel" placeholder="Número de Telefone" class="inp_style" >
                    <br> <br>
                    <label for="id_rua">Rua:</label>
                    <input type="text" name="rua" id="id_rua" placeholder="Rua" class="inp_style" required>
                    <br> <br>
                    <label for="id_comp">Complemento:</label>
                    <input type="text" name="complemento" id="id_comp" placeholder="Complemento" class="inp_style" required>
                    <br> <br>
                    <label for="id_cidade">Cidade:</label>
                    <input type="text" name="cidade" id="id_cidade" placeholder="Cidade" class="inp_style" required>
                    <br> <br>
                    <label for="id_estado">Estado:</label>
                    <input type="text" name="estado" id="id_estado" placeholder="Estado" class="inp_style" required>
                    <br> <br>
                    <label for="id_cep">CEP:</label>
                    <input type="text" name="cep" id="id_cep" placeholder="CEP" class="inp_style" required>
                
                </div>
        
                   <form name="post" action="./?post=true" method="post" enctype="multipart/form-data">
                    <p style="margin-bottom: 10px; text-align: right"><a href="./" title="Atualizar">Atualizar</a></p>
                    <input type="file" name="file">
                   </form>
                    <br> <br>
                   <input class="btn" type="submit">
                   
                </div>

           
            </form>
    </div>        


</body>
</html>