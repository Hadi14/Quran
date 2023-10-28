<div class="main">
    <?
    foreach ($data as $key => $value) {
        echo "<span>" . $value['Arabic'] . "</span>";
        echo " ‎﴿";
        echo   "<span class='ayeNum'>" . $value['Verse'] . "</span>";
        echo  "﴾ ";
    }
    ?>
</div>