<html>

<head>
    <meta charset="UTF-8" />
    <title>
        <titre="blog">
    </title>
</head>

<body>
    <header style="text-align:center;">
        <h1>Mon Blog</h1>
        <p>Bienvenue dans mon blog</p>
    </header>
    <div style="text-align:center;margin-top:40px">
        <p>
            Ce formulaire permet de poster un article
        </p>
        <form action="index.php" method="post">
            <label> Ecrire le titre de l'article:</label>
            <input type="text" name="titre" />
            </br></br>
            <textarea type="text" name="texte" rows="8" cols="45">
     Ecrire votre texte ici.
    </textarea>
            </br></br>
            <label> Ecrire le nom de l'auteur de l'article:</label>
            <input type="text" name="auteur" />
            </br></br>
            <label for="start">Choisir la date de publication de l'article:</label>
            <input type="date" id="start" name="date_publication" placeholder="yyyy-mm-dd" min="2018-01-01" max="2021-10-07">
            </br></br>
            <input type="hidden" id="merchantid" name="merchantid" value="<?php echo uniqid(); ?>" />
            <input type="submit" value="Publier" name="submit" />

        </form>
    </div>
</body>

</html>


<?php

foreach ($articles as $article) : ?>

    <div style="text-align:center;background-color:pink;width:30%;margin:0 auto;height:250px">
        <h1>Titre de l'article : <?php echo htmlspecialchars($article["titre"]) ?></h1>
        <?php echo htmlspecialchars($article["texte"]) ?>
        <h3>publie le : <?php echo htmlspecialchars($article["date_publication"]) ?> </h3>
        <h3>publie par : <?php echo htmlspecialchars($article["auteur"]) ?></h3>
        </br>
    </div>

<?php endforeach;
?>