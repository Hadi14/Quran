<div id="divmain" class="main">
    <?
    foreach ($data as $key => $value) {
        echo "<span>" . $value['Arabic'] . "</span>";
        echo "<span class='ayesign'>﴿</span>";
        echo  "<span class='ayeNum'>" . $value['Verse'] . "</span>";
        echo  "<span class='ayesign'>﴾ </span>";
    }
    ?>
</div>

<script>
    n = $('span').innerHTML().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, `<div class="center">$1 </div>`);
    // n = n.replace(/(﴿)/g, "<span>﴿</span>");
    // n = n.replace(/[1-9]|[1-)/g, "<span>﴿</span>");
    // n = n.replace(/(﴾ )/g, "<span>﴾ </span>");
    document.getElementById("divmain").innerHTML = n;
</script>