
<?php
    require("layout/view.header.php");
?>
<ul>
<?php

    foreach($categories as $category){
        echo '      
        <li class="card-title" style="width: 18rem;">
           <a href="/menu/'.$category["category_id"].'"class="card-title" >'.$category["name"].'</a>
        </li>
        ';
    }
?>
            </ul>

<?php require("layout/view.footer.php")?>
