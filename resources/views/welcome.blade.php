<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);padding: 10px;
            border-radius: 15px;
            width: 20%;
        }
        legend{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="/customers" method="POST">
            @csrf
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"><b>Nome Completo</b></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"><b>Telefone</b></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"><b>Email</b></label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino"><b>Feminino</b></label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino"><b>Masculino</b></label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro"><b>Outro</b></label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>   
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput"><b>Cidade</b></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput"><b>Estado</b></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput"><b>Endereço</b></label>
                </div>
                <br><br>
                <button style="width: 100%" type="submit" class="btn btn-light btn-block p-4"><b>Enviar</b></button>
            </fieldset>
        </form>
    </div>
</body>
</html>