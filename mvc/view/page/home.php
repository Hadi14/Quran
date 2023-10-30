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
        // u0652 --> علامت سکون
        // u0646 --> نون ساکن

        // u064E --> فتحه
        // u0650 --> کسره
        // u064F --> ُ   ضمه  اُ

        // u064D --> ٍ   اِن
        // u064C --> ٌ   اُن
        // u064B --> ً  اَن

        // u 0651 --> تشدید
        let n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, "<div class='center'>$1 </div>"); //++ این میتونه بهینه بشه که سه خط زیر نوشته نشه
        // n = n.replace(/(\u064D)/g, "<span class='redcolor'>$1</span>"); // تنوین   ٍ
        // n = n.replace(/(\u0646)/g, "<span class='redcolor'>$1</span>"); //حرف ن
        n = n.replace(/(﴿)/g, "<span class='ayesign'>﴿</span>");
        n = n.replace(/([0-9])/g, "<span class='ayeNum'>$1</span>");
        n = n.replace(/(﴾ )/g, "<span class='ayesign'>﴾ </span>");

        n = n.replace(/(\u064B|\u064C|\u064D|\u0646\u0652)(\s\u0646)/g, "<span class='redcolor'>$1$2</span>");
        // n = n.replace(/(\u0646\u0652)(\s\u0646)/g, "<span class='redcolor'>$1$2</span>");


        document.getElementById("divmain").innerHTML = n;


    });
</script>