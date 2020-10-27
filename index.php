<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="content">
        <h1>Diretórios</h1>
        <?php
            function showPath($pasta,$texto){
                $listar = new RecursiveDirectoryIterator($pasta);
                //$recursivo = new RecursiveIteratorIterator($listar); //pega os subdiretorios da pasta passada por parametro

                $i = 0;
                foreach ($listar as $obj) {
                    if($obj->isFile()){
                        $nomeArquivo = $obj->getFilename();
                        $caminho = $obj->getPathname();
                        $j = $i + 1;
                        
                        echo "<p><b>$texto $j</b>: <a href='$caminho'>$nomeArquivo</a></p>";
                        
                        $i++;
                    }
                }
            }
			
			// chamando a função
            showPath('arquivos','Arquivo');
        ?>
    </div>
</body>
</html>