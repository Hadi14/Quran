<div class="main">
    <?
    foreach ($data as $key => $value) {
        echo "<span>" . $value['Arabic'] . "</span>";
        echo " ‎﴿";
        echo   $value['Verse'];
        echo  "﴾ ";
    }
    ?>
</div>