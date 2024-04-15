<?php
      include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors Game</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <div class="choices">
    <div class="choice" id="rock">
        <img src="image 3.png" />
    </div>
    <div class="choice" id="paper">
        <img src="image 1.png" />
    </div>
    <div class="choice" id="scissor">
        <img src="image 2.png" />
    </div>
</div>

<div class="score-board">
    <div class="score">
        <P id="user-score">0</P>
        <p>You</p>
    </div>
    <div class="score">
        <P id="comp-score">0</P>
        <p>Comp</p>
    </div>
</div>
<div class="msg-container">
    <p id="msg">Play your move</p>
    <br>
    <br>
    <a href="login.php">Logout</a>
</div>
<script src="app.js"></script>
</body>

</html>