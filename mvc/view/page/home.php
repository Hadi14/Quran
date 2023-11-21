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

        /*اعراب*/ // u0652 --> علامت سکون     // u0646 --> نون ن    // u064E --> فتحه     // u0650 --> کسره     // u064F --> ُ ضمه اُ

        /*تنوین*/ // u064D --> ٍ اِن     // u064C --> ٌ اُن     // u064B --> ً اَن   // u0651 --> تشدید

        /*یرملون-ادغام*/ // u064A --> ي    // u0631 --> ر    // u0645 -->  م     // u0644 -->  ل     // u0648 -->  و    // u0646 -->  ن

        /*اظهار*/ // u0622 --> آ یا ء    // u0647 --> ه     // u0639 -->  ع     // u063A -->  غ      // u062D -->  ح      // u062E -->  خ

        /*اقلاب*/ //u0628 --> ب

        /*وقف ابدال*/ //u0629 --> ة    //u0627 --> ا

        /*میم ساکنه*/ // u0645 --> م      

        // u062A --> ت  //u062B --> ث

        n = n.replace(/(﴿)/g, "<span class='ayesign'>﴿</span>");
        n = n.replace(/([0-9])/g, "<span class='ayeNum'>$1</span>");
        n = n.replace(/(﴾ )/g, "<span class='ayesign'>﴾ </span>");

        /*ادغام*/
        // n = n.replace(/(\u0646\u0652\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064D\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064C\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064B\s[\u064A\u0631\u0645\u0644\u0648\u0646])|(\u064B\u0627\s[\u064A\u0631\u0645\u0644\u0648\u0646])/g, "<span class='redcolor'>$1$2$3$4$5</span>"); // !!!! تجوید: نون ساکن و تنوین - ادغام - در کروم درسته ولی در فایرفاکس جدا نشون میده
        // سه مشکل هنوز در ادغام وجود دارد اینکه اول اگر تنوین یا نون ساکن به کلمه و (نه حرف واو ) برسه باز هم مچ میکنه
        // سوم اینکه حروف رنگی شده در فایرفاکس جدا نمایش داده میشه

        // n = n.replace(/(\u0646\u0652\s*[\u0622\u0647\u0639\u063A\u062D\u062E])|(\u064D\s*[\u0622\u0647\u0639\u063A\u062D\u062E])|(\u064C\s*[\u0622\u0647\u0639\u063A\u062D\u062E])|(\u064B\s*[\u0622\u0647\u0639\u063A\u062D\u062E])/g, "<span class='redcolor'>$1$2$3$4</span>");  // !!!! تجوید: نون ساکن   - اظهار - در کروم درسته ولی در فایرفاکس جدا نشون میده
        // n = n.replace(/(\u0646\u0652\s*[\u0628])|(\u064D\s*[\u0628])|(\u064C\s*[\u0628])|(\u064B\s*[\u0628])/g, "<span class='redcolor'>$1$2$3$4</span>"); // !!!! تجوید: نون ساکن   - اقلاب - در کروم درسته ولی در فایرفاکس جدا نشون میده


        /***************************************************************************************************************************************************** */
        // n = n.replace(/(\u0629[\u064D\u064C\u064B\u064E\u0650\u064F])/g, "<span class='redcolor'>$1</span>"); //  تجوید:  وقف   - ابدال تا گرد - 
        // n = n.replace(/(\u064B\u0627\s|\u0621\u064B\s)/g, "<span class='redcolor'>$1</span>"); //  تجوید:  وقف   - ابدال تنوین آخر- 
        // تجوید:  وقف 7 کلمه  - ابدال به الف مدی - انا ، لکنا ، الظنونا ، الرسولا ،السبیلا ، قواریرا
        // n = n.replace(/(\s(\u0648\u064E)*\u0623\u064E\u0646\u064E\u0627\s|لَٰكِنَّا|الظُّنُونَا|الرَّسُولَا|السَّبِيلَا|قَوَارِيرَا|سَلَاسِلَ)/g, "<span class='redcolor'>$1</span>"); //  تجوید:  وقف 7 کلمه  - ابدال به الف مدی
        // n = n.replace(/(\s(\u0648\u064E)*\u0623\u064E\u0646\u064E\u0627\s)/g, "<span class='redcolor'>$1</span>"); //  تجوید:  وقف 7 کلمه  - ابدال به الف مدی - انا
        /*****************************************************************************************************************************************************/


        // n = n.replace(/(\u0645\u0652\s\u0645)/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  میم ساکنه   - ادغام - در کروم درسته ولی در فایرفاکس جدا نشون میده
        // n = n.replace(/([\u062B\u062D\u0630\u0635\u0636\u0637\u0638\u0639\u063A\u0648])/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  ده حروفی که تلفظشان تفاوت دارد
        // n = n.replace(/([\u0635\u0636\u0637\u0638\u062E\u063A\u0642])/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  هفت حروف استعلا
        // n = n.replace(/(\u0642\u0652|\u0637\u0652|\u0628\u0652|\u062C\u0652|\u062F\u0652)/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  پنج حروف قلقله 

        // n = n.replace(/(\s\u0627.[\u0652\u0651])/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  همزه وصل - همزه ابتدای کلمه باشد
        // n = n.replace(/(\s\u0627.[\u0652\u0651])|(\s\u0627.[^\u064D\u064C\u064B\u0651\u0652\u064E\u0650\u064F])/g, "<span class='redcolor'>$1$2</span>"); // !!!! تجوید:  همزه قطع - همزه هم ابتدا و هم وسط کلمه باشد
        // n = n.replace(/(\s\u0627\u0644[^\u064D\u064C\u064B\u0651\u0652\u064E\u0650\u064F])/g, "<span class='redcolor'>$1</span>"); // !!!! تجوید:  همزه قطع - بخش حرف - ال در ابتدای کلمه
        // !!!! تجوید:  همزه قطع - بخش اسم- 12 اسم - ابن ، ابنت ، امرء ، امرات ، اسم ،اثنی ، اثنا ، اثنتی ،اثنتا ، اثنین ، اثنان ، اثنتین
        // n = n.replace(/(\s\u0627\u0628\u0652\u0646[\u064E\u0650\u064F]\s)/g, "<span class='redcolor'>$1</span>"); //تجوید:  همزه قطع - بخش اسم- کلمه ابن
        // n = n.replace(/(\s\u0627\u0628\u0652\u0646\u064E\u062A)/g, "<span class='redcolor'>$1</span>"); //تجوید:  همزه قطع - بخش اسم- کلمه ابنت
        // n = n.replace(/(\s\u0627\u0645\u0652\u0631\u064E[\u0622\u0623])/g, "<span class='redcolor'>$1</span>"); //تجوید:  همزه قطع - بخش اسم- کلمه امرء
        // n = n.replace(/(\s\u0627\u062B\u0652\u0646\u064E((\u064A\u0652)|(\u0627)|(\u062A\u064E\u0627)|(\u064A\u0652\u0646\u0650)|(\u0627\u0646\u0650)|(\u062A\u064E\u064A\u0652\u0646\u0650))\s)/g, "<span class='redcolor'>$1</span>"); //تجوید:  همزه قطع - بخش اسم- مصدرهای اثنی
        // n = n.replace(/(\s(\u0648\u064E)*\u0623\u064E\u0646\u064E\u0627\s)/g, "<span class='redcolor'>$1</span>"); //تجوید:  وقف   - ابدال تنوین آخر
        n = n.replace(/([\u06D6\u06D7\u06D8\u06D9\u06DA\u06DB])/g, "<span class='redcolor'>$1</span>"); //علائم وقف:  



        document.getElementById("divmain").innerHTML = n;
    });
</script>