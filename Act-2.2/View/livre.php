<html>

<head>
    <meta charset="UTF-8" />
    <title>
        <titre="blog">
    </title>
</head>

<body>
    <div style="text-align:center;margin-top:40px">
        <p>
            Ce formulaire permet de poster un message
        </p>
        <form action="index_livre.php" method="post">
            </br></br>
            <textarea type="text" name="message" rows="8" cols="45">
     Ecrire votre message ici.
    </textarea>
            </br></br>
            <input type="hidden" id="merchantid" name="merchantid" value="<?php echo uniqid(); ?>" />
            <input type="submit" value="Publier" name="submit" />

        </form>
    </div>
</body>

</html>


<?php

foreach ($livres as $message) : ?>

    <div style="text-align:center;background-color:pink;width:30%;margin:0 auto;height:80px">
        <h3>le contenu de votre message : <?php echo $message["message"]; ?> </h3>

        </br>
    </div>

<?php endforeach;
?>