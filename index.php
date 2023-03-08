<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dev Web 2</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstra
    p.min.css" integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
    function mudarCorInput() {
        document.getElementById("bodyId").style.background = 'black';
        document.getElementById("labelId").style.color = "white";
    }

    function procurarCidade() {
        let nome = document.getElementById("estadoID").value;
        $.ajax({
            url: "retornaCidades.php",
            type: "POST",
            data: "estado=" + nome,
            dataType: "html"
        }).done(function(resposta) {
            console.log(resposta);
            $('#cidadeID').html(resposta);
        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("completou");
        });
    }
    </script>

</head>

<body name="body" id="bodyId">
    <div class="form-group col-md-6">
        <label for="nomeID" id="labelId">Nome</label>
        <input type="text" class="form-
    control" onclick="mudarCorInput()" name="nome" id="nomeID" placeholder="Fulano de tal">
    </div>
        <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
            <option value="0" selected>Escolher...</option>
            <option value="sp">São Paulo</option>
            <option value="ms">Mato Grosso do Sul</option>
        </select>

    <select id="cidadeID" name="cidade" class="form-control">
    </select>

</body>

</html>