<?php
require('connectDB.php');
class Article
{
    // private $localhost = 'localhost';
    // private $username = 'username';
    // private $password = '';
    // private $db = 'test_db';

    //method to connect to database
    // function connect()
    // {
    //     $connexion = mysqli_connect($this->localhost, $this->username, $this->password, $this->db);
    // if (!$connexion) {
    //     echo 'Connection error' . mysqli_connect_error();
    // } else {
    //     echo "you are successfully connected";
    // }
    //     return $connexion;
    // }


    //method to post articles
    public function postArticle()
    {
        // $conn = $this->connect();
        // $connexion = new connectDB();
        // $conn = $connexion->getConnection("test_db");
        connectDB::connect('test_db');
        $bdd1 = new connectDB();
        $conn = $bdd1->getConnection();

        if (isset($_POST['submit'])) {

            $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
            $texte = isset($_POST['texte']) ? $_POST['texte'] : '';
            $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : '';
            $date_publication = isset($_POST['date_publication']) ? $_POST['date_publication'] : '';
            //create sql insert
            $add_sql = "INSERT INTO articles(titre, texte, auteur, date_publication) VALUES ('$titre','$texte','$auteur','$date_publication')";
            // save to db and check
            if (mysqli_query($conn, $add_sql)) {
                echo "your article has been successfully added ";
            } else {
                echo 'query error : ' . mysqli_error($conn);
            }
        }
    }


    //method to get articles
    public function getArticles()
    {
        connectDB::connect('test_db');
        $bdd1 = new connectDB();
        $conn = $bdd1->getConnection();

        // $conn = $this->connect();
        //write query for all articles
        $sql = 'SELECT * from articles';

        //make query and get result
        $result = mysqli_query($conn, $sql);

        //fetch the resulting rows as an array
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
        // mysqli_free_result($result);

        return $articles;
    }
}
