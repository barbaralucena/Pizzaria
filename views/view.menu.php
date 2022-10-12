
<?php
    require("layout/view.header.php");
?>
<ul>
<?php

    foreach($categories as $category){
        echo '
        <li>
           <a href="/menu/'.$category["category_id"].'">'.$category["name"].'</a>
        </li>
        ';
    }
?>
            </ul>

            <?php require("layout/view.footer.php")?>
