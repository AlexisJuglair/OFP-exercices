<nav>              
    <ul id="menu">
    <?php 
    $a = 1;
    $b = 1;
    while($a<=4) {
        print("<li class='ligne'>Page " . $a . "</a>");
        print("<ul class='sousMenu'>");
        while($b<=4) {
            print("<li class='sousLigne'><a href='index.php?p=1'>Page " . $b . "</a></li>");
            $b++;
        }
        print("</li>"); 
        $b = 1;      
        $a++;      
    }
    ?>
    </ul>
</nav>   