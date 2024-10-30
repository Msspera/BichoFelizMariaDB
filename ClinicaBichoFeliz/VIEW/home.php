<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--link para lib de Ã­cones-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/menu.php'; ?>

    <div class="row valign-wrapper" style="height: 90vh;">
        <div class="col s12 m6 offset-m3 center">
            <div class="card light-green darken-1 white-text">

                <div class="card-content">
                    <h1>Seja Bem Vindo!</h1>
                    <img src="/ClinicaBichoFeliz/img/LogoTipoBichoFeliz.png" alt="" class="circle responsive-img" width="250px">
                </div>
                <div class="card-action">
                    <a href="/ClinicaBichoFeliz/VIEW/Animal/lstAnimal.php"      class="white-text lnk">Animais</a>
                    <a href="/ClinicaBichoFeliz/VIEW/Especie/lstEspecie.php"    class="white-text lnk">EspÃ©cies</a>
                    <a href="/ClinicaBichoFeliz/VIEW/Condicao/lstCondicao.php"  class="white-text lnk">CondiÃ§Ãµes</a>
                </div>

            </div>
        </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ClinicaBichoFeliz/VIEW/footer.php'; ?>


</body>

</html>

<style>
    .lnk
    {
        font-size: 2em;
        font-family: 'Montserrat';
        font-weight: bold;
    }
</style>