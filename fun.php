

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        body{
            width: 100%;
            height: 100vh;
            background-image: url(img_fundo.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form{
        background-color: aliceblue;
        max-width: 500px;
        height: 450px;
        padding: 40px;
        border-radius: 20px;
        }

    </style>

</head>
<body>
        <form action="fun.php">
            <div class="box_inf">
            <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = htmlspecialchars($_POST['email']);
                    $nome = htmlspecialchars($_POST['nome']);
                    $num = htmlspecialchars($_POST['num_tel']);
                    $rua = htmlspecialchars($_POST['rua']);
                    $city = htmlspecialchars($_POST['cidade']);
                    $comple = htmlspecialchars($_POST['complemento']);
                    $estado = htmlspecialchars($_POST['estado']);
                    $cep = htmlspecialchars($_POST['cep']);

                    echo "<h2>Dados Enviados</h2>";
                    echo "<p><strong>E-mail :</strong>$email</p>";
                    echo "<p><strong>Nome :</strong>$nome</p>";
                    echo "<p><strong>Número de Tel :</strong>$num</p>";
                    echo "<p><strong>Rua :</strong>$rua</p>";
                    echo "<p><strong>Complemento :</strong>$comple</p>";
                    echo "<p><strong>Cidade :</strong>$city</p>";
                    echo "<p><strong>Estado :</strong>$estado</p>";
                    echo "<p><strong>CEP :</strong>$cep</p>";
                } else {
                    header("Location : page.php");
                    exit();
                }


                ?>

                <?php
                
                $folder = __DIR__ ."/uploads/";

                if(!file_exists($folder) || !is_dir($folder)){
                    mkdir($folder, 0755);
                }
                
                var_dump([
                    "filesize" => ini_get("upload_max_filesize"),
                    "postsize" => ini_get("post_max_size"),
                ]);

                $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
                var_dump($_FILES);

                if($_FILES && !empty($_FILES['file']['name'])){
                    $fileUpload = $_FILES['file'];
                    var_dump($_FILES);

                    $allowebTypes = [
                        "image/jpeg",
                        "image/png",
                        "application/pdf"
                    ];
                
                }elseif ( $getPost){
                    echo "<p class='trigger waring'>Não temte eviar o Examon</p>";
                } else{
                    if($_FILES){
                        echo "<p class='trigger waring'>Selecione um arquivo para ser enviado!</p>";
                    }
                };
                
               
                var_dump(scandir(__DIR__ ."/uploads"))

                ?>

            </div>
        </form>
</body>
</html>