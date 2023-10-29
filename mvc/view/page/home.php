<div id="divmain" class="main">
    <?
    foreach ($data as $key => $value) {
        echo "<span>" . $value['Arabic'] . "</span>";
        echo "<span> ‎﴿ </span>";
        echo  "<span class='ayeNum'>" . $value['Verse'] . "</span>";
        echo  "<span>﴾</span>";
    }
    ?>
</div>

<script>
    n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, `<div class="center">$1 </div>`);
    document.getElementById("divmain").innerHTML = n;
</script>