<?php
    include 'jsonconnect.php';
    include 'head.php';
?>

<header>
    <img src="./assets/logo/logoleidscherijn.png" alt="logo-img" id="logo">
    <div id="navButtons">
        <button class="navBtn">FILM AGENDA</button>
        <button class="navBtn">ALLE VESTIGINGEN</button>
        <button class="navBtn">CONTACT</button>
    </div>
</header>

<div id="subHeader">
    <span id="ticketText">KOOP JE TICKETS</span>
    <select id="dropDown">
    <?php
    echo "<option value='notAnOption'>Kies je film</option>";
    if(!isset($_GET['id'])){
        for ($i = 0; $i < count($response->results); $i++) {
            echo "<option value=" . $response->results[$i]->movie_name . ">" . $response->results[$i]->movie_name . "</option>"; 
        }
    };
    ?>
    </select>
    <button id="tickets">BESTEL TICKETS</button>
</div>