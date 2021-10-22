<?php
require('connectDB.php');
class Livre
{

    //method to post articles
    public function postMessage()
    {
        // $conn = $this->connect();
        // $connexion = new connectDB();
        // $conn = $connexion->getConnection("livre_db");
        connectDB::connect('livre_db');
        $bdd1 = new connectDB();
        $conn = $bdd1->getConnection();

        if (isset($_POST['submit'])) {

            $texte = isset($_POST['message']) ? $_POST['message'] : '';
            //create sql insert
            $add_sql = "INSERT INTO livre(message) VALUES ('$texte')";
            // save to db and check
            if (mysqli_query($conn, $add_sql)) {
                echo "your article has been successfully added ";
            } else {
                echo 'query error : ' . mysqli_error($conn);
            }
        }
    }


    //method to get articles
    public function getMessages()
    {
        // $connexion = new connectDB();
        // $conn = $connexion->getConnection("livre_db");

        connectDB::connect('livre_db');
        $bdd1 = new connectDB();
        $conn = $bdd1->getConnection();

        // $conn = $this->connect();
        //write query for all articles
        $sql = 'SELECT * from livre';

        //make query and get result
        $result = mysqli_query($conn, $sql);

        //fetch the resulting rows as an array
        $livres = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
        // mysqli_free_result($result);

        return $livres;
    }
}
