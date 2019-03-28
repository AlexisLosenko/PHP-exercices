<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="public/assets/css/styles.css">
    <title>Zoo</title>
</head>

<body>

    <?php include './views/template/header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Bienvenue sur le site Zoo Maniac</h1>
           <!--Contenu-->
          <?php include './functions/routing.php';?>
            </div>
        </div>
    </div>

    <?php include './views/template/footer.php';?>

</body>

</html>
