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
        let n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, "<div class='center'>$1 </div>"); //++ این میتونه بهینه بشه که سه خط زیر نوشته نشه
        // u0652 --> علامت سکون
        // u0646 --> نون ساکن
        // u064E --> فتحه
        // u0650 --> کسره
        // u064F --> ُ   ضمه  اُ

        // u064D --> ٍ   اِن
        // u064C --> ٌ   اُن
        // u064B --> ً  اَن
        // u 0651 --> تشدید
        // u064A -->  ي
        // u0631 -->  ر
        // u0645 -->  م
        // u0644 -->  ل
        // u0648 -->  و
        // u0646 -->  ن
        n = n.replace(/(﴿)/g, "<span class='ayesign'>﴿</span>");
        n = n.replace(/([0-9])/g, "<span class='ayeNum'>$1</span>");
        n = n.replace(/(﴾ )/g, "<span class='ayesign'>﴾ </span>");

        n = n.replace(/(\u0646\u0652\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064D\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064C\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064B\s[\u064A\u0631\u0645\u0644\u0648\u0646])/g, "<span class='redcolor'>$1$2$3$4</span>"); // !!!! تجوید: نون ساکن و تنوین - ادغام
        // دومشکل هنوز در ادغام وجود دارد اینکه اول اگر تنوین یا نون ساکن به کلمه و (نه حرف واو ) برسه باز هم مچ میکنه
        // دوم اینکه اگر حرف آخر کلمه اول الف ناخوانا بود آن را مچ نمیکنه

        document.getElementById("divmain").innerHTML = n;

        console.log(toUnicode("ukh"));


    });
</script>