<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// classe movie
class Movie {
    // variabili d'istanza
    public $title;
    public $date_of_publication;
    public $language;
    public $genres;

    // costruttore
    public function __construct($_title, $_date_of_publication, $_language, $_genres) {
        $this->title = $_title;
        $this->date_of_publication = $_date_of_publication;
        $this->language = $_language;
        $this->genres = $_genres;
    }
}

// oggetto film 1
$interstellar = new Movie('Interstellar', 'October - 26 - 2014', 'en', array('Sience-fiction', 'Adventure', 'Mystery', 'Drama'));
// oggetto film 2
$wolfOfWallStreet = new Movie('Wolf of Wall Street', 'January - 23 - 2014', 'en', array('Comedy', 'Dark-Comedy', 'crime fiction', 'Drama'));


// echo "<pre>";
// var_dump($interstellar);
// var_dunp($wolfOfWallStreet);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php oop 1</title>
</head>

<body>
    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        //film Intertellar 
                        echo "<h1>" .$interstellar->title ."</h1>";
                        echo "<div>Date of pubblication: " .$interstellar->date_of_publication ."</div>";
                        echo "<div>Language: " .$interstellar->language ."<div>";
                        echo "<div>Genres: " .implode(" - ", $interstellar->genres) ."<div>";
                    ?>
                </div>
                <div class="col-12">
                    <?php
                        // fil Walf of WallStreet
                        echo "<h1>" .$wolfOfWallStreet->title  ."</h1>";
                        echo "<div>Date of pubblication: " .$wolfOfWallStreet->date_of_publication ."<div>";
                        echo "<div>Language: " .$wolfOfWallStreet->language ."<div>";
                        echo "<div>Genres: " .implode(" - ", $wolfOfWallStreet->genres) ."<div>";
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>