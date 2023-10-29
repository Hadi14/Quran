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
    // $('span').text().replace(/(2)/g, '<span style="color:red">$1</span>');

    // n = $('span').text().replace(/(2)/g, `<span class="red">$1</span>`);
    n = $('span').text().replace(/(بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ)/g, `<p>$1</p>`);

    // let n = "php is 2 good";
    // const result = n.replace(/(2)/g, `<span class="colored">$1</span>`);

    // console.log(n);
    // $('#divmain').text(n);
    // document.getElementById("divmain").html(n);
    document.getElementById("divmain").innerHTML = n;




    // const string = "Starting |this should be colored| there may be more |colored too|";
    // const result = string.replace(/\|\b([^|]+)\b\|/g, `<span class="colored">$1</span>`);

    // const container = document.querySelector("#divmain");
    // container.innerHTML = result;
</script>