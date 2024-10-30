<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="/ClinicaBichoFeliz/materializeButGood.css">
    </link><!-- Materialize editado-->

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script><!-- Inclusão do jQuery-->

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script><!-- Inclusão do Plugin jQuery Validation-->

    <title>Cadastrar Animal</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="container ">
        <div class="">
            <div class="light-green accent-2 center">
                <br>
                <h1>Cadastrar Pet na Clínica</h1>
                <br>
            </div>
            <div class="row light-green lighten-5">
                <form action="recInsAnimal.php" method="POST" id="formInsAnimal"> <!--RecInsAnimal = receber e inserir animal-->
                    <div class="input-field col s8">
                        <input id="nome" type="text" class="validate" name="txtNome">
                        <label for="nome" class="black-text bold browser-default ">Nome</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="especie" type="text" class="validate" name="txtEspecie">
                        <label for="especie" class="black-text bold browser-default">Espécie</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="condicao" type="text" class="validate" name="txtCondicao">
                        <label for="condicao" class="black-text bold browser-default">Condição</label>
                    </div>

                    <div class="input-field col s8">
                        <input id="dono" type="text" class="validate" name="txtDono">
                        <label for="dono" class="black-text bold browser-default">Dono</label>
                    </div>


                    <div class="light-green accent-2 center col s12">
                        <br>
                        <button class="green darken-4 waves-effect waves-light btn" type="submit">Salvar <i class="material-icons">save</i></button>
                        <button class="red darken-4 waves-effect waves-light btn" type="reset">Limpar <i class="material-icons">delete</i></button>
                        <button class="purple darken-4 waves-effect waves-light btn" type="button" onclick="JavaScript:location.href='lstAnimal.php'">Voltar <i class="material-icons">chevron_left</i></button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/footer.php'; ?>
    <script>
        $("#formInsAnimal").validate({
            rules: {
                txtNome: {
                    required: true,
                    minlength: 1
                },

                txtEspecie: {
                    required: true,
                    minlength: 1,
                    number: true,
                    min: 1

                },

                txtCondicao: {
                    required: true,
                    minlength: 1,
                    number: true,
                    min: 1
                },
                txtDono: {
                    required: true,
                    minlength: 1,
                    number: true,
                    min: 1
                }
            },
            messages: {
                txtNome: "Insira um nome Válido",
                txtEspecie: "Insira uma Especie Válida",
                txtCondicao: "Insira uma Condicao Válida",
                txtDono: "Insira um Dono Válido"

            }
        });
    </script>
</body>

</html>