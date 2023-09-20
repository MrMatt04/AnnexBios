
<?php
    include 'header.php';
?>
<head>
    <link rel="stylesheet" href="./assets/css/filmpreview.css">
</head>
<body>
<div id="mainTitle">
            <span><?php echo $response->movie_name ?></span>
        </div>
    <div id="container">        
        <div id="left">
            <img style="width: 100%; height: 60rem;" src="<?php echo $response->poster ?>" alt="movie poster">
        </div>

        <div id="right">
            <span>Release: <?php echo $response->movie_date ?></span><br><br>
            <span><?php echo $response->big_description ?></span><br><br>
            <span>Genres: <?php 
            
            foreach ($response->genres as $item) {
                // echo $item . ", ";
            }

            echo join(', ', $response->genres);
            
            ?></span><br><br>
            <span>Speeltijd: <?php echo $response->duration ?> minuten</span><br><br>
            <span>Land van herkomst: <?php echo $response->country_of_origin ?></span><br><br>
            <span>Waardering: <?php echo $response->rating ?></span><br><br>
            <span>Taal: <?php echo $response->original_language ?></span><br><br>
        </div>
    </div>
</body>
