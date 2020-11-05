<?php
    include './Controller/db_inc.php';
    include './View/header.php';
    include './View/navbar.php';
?>

<div class='main-content-grid'>

    <?php include './View/demo6-content.php'; ?>
    
</div>

<div class='eLinks-container'>
    <div class='external-links'>
        <h2>Links</h2>
        <ul class="eLinks-list">
            <li><a href="index.php">Home</a></li>

            <li><a href="demo5.php">Demo 5</a></li>
            <li><a href="exercise5.php">Exercise 5</a> </li>
            <li class="current-link"><a href="demo6.php">Demo 6</a> </li>
            <li><a href="exercise6.php">Exercise 6</a> </li>
            <li><a href="exercise7.php">Exercise 7</a> </li>
            <li><a href="exercise13.php">Exercise 13</a> </li>
        </ul>
    </div>
</div>

<?php
    include './View/footer.php';
?>