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

<div id="testdiv"></div>

<script>
    $(document).ready(function() {
        // document.write("حَرْفٌ".replace(/(\u0652)|(\u0650)|(\u064C)|(\u064E)|(\u064B)|(\u064F)|(\u064D)|(\u0651)/g,"")); مهم مهم مهم  - اعراب حروف عربی
        let n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, "<div class='center'>$1 </div>"); //++ این میتونه بهینه بشه که سه خط زیر نوشته نشه
        n = n.replace(/(\u064D)/g, "<span class='redcolor'>$1</span>");
        n = n.replace(/(﴿)/g, "<span class='ayesign'>﴿</span>");
        n = n.replace(/([0-9])/g, "<span class='ayeNum'>$1</span>");
        n = n.replace(/(﴾ )/g, "<span class='ayesign'>﴾ </span>");




        document.getElementById("divmain").innerHTML = n;



        let str = "شَيْءٍ ";
        str = str.replace(/(\u064D)/g, "<span class='redcolor'>$1</span>");
        document.getElementById("testdiv").innerHTML = str;
    });
</script>