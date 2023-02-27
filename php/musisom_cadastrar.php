<html>

<head>
    <meta charset="UTF-8">
    <title>Musisom Cadastro</title>
    <link rel="icon" href="../assets/icones/iconmusical.png" type="image/gif" sizes="18x18">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Asul&display=swap');
    </style>

</head>

<body>
    <h1 class="title">Cadastrar Instrumento</h1>
    <div class="container">

    </div>

    <!--script php para mostrar mensagem de Frase Famosa Cadastrada com sucesso !!! 

    <form name="dados" action="../php/musisom_cadastrar.php" method="POST" enctype="multipart/form-data">
        Tipo de Instrumento: <input type="text" name="tipo" size="150" /> <br /> <br />
        Marca do Instrumento: <input type="text" name="marca" size="150" /> <br /> <br />
        Descrição do Instrumento: <input type="descricao" size="150"> <br /> <br />
        Valor do Instrumento: <input type="number" name="valor" size="150"> <br /> <br />
        <input type="file" name="imagem" /> <br> <br>
        <input type="submit" name="btn" value="Cadastrar" />
    </form>
    -->
    <?php
    if (isset($_GET['retorno'])) {
        $msg = $_GET['retorno'];
        echo "<br />";
        echo "<font size='5' color='#F00'>";
        echo $msg;
        $msg = "";
        echo "</font>";
    }
    ?>
  </body>
</html>

