
<?php
    require("layout/view.header.php");
?>
<ul>
<?php

    foreach($categories as $category){
        echo '
        <li>
           '.$category["name"].'
        </li>
        ';
    }
?>
            </ul>

    </body>
</html>