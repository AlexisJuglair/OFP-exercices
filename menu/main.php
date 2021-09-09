<?php
    $page = $_GET["page"];
?>

<main>
    <?php
        include("page" . $page . ".php");
    ?>
</main>