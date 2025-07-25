<!doctype html>
<html lang="fr">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-primary my-3 ">Connexion</h1>
            @csrf
            <form action ="inscrire" method="post">
                <div class="mb-3 form-group w-">
                    <label for="email">Email</label>
                    <input type="email" class="form-control w-50" id="email" name="email" placeholder="monEmail@exemple.com">
                </div>
                <div class="mb-3 form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control w-50" id="mdp" name="mdp" placeholder="">
                    <div class="ps-{50}">
                        <a href="/forget" class="">mot de pass oublié?</a>
                        <a href="/reset" class="p-md-5">Reunitialiser le mot de pass!</a><div>
                </div>
                <div class="">
                    
                    <br>
                    <input type="submit" value="Inscrire" name="inscrire" class="btn btn-primary mt-2 px-4 w-50">
                    <br>
                    <a href="/inscription">Vous n'avez pas de compte?</a>
                </div>
            </form>
        </div>
    </body>
</html>