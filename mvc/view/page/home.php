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
    $(document).ready(function() {
        n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, "<div class='center'>$1 </div>"); // این میتونه بهینه بشه که سه خط زیر نوشته نشه
        n = n.replace(/(﴿)/g, "<span class='ayesign'>﴿</span>");
        n = n.replace(/([1-9]|[1-9][0-9][0-9]|[1-2][0-8][0-6])/g, "<span class='ayeNum'>$1</span>");
        n = n.replace(/(﴾ )/g, "<span class='ayesign'>﴾ </span>");
        document.getElementById("divmain").innerHTML = n;
    });
</script>