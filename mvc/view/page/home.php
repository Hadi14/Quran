<div id="divmain" class="main">
    <?
    foreach ($data as $key => $value) {
        echo "<span>" . $value['Arabic'] . "</span>";
        echo " ‎﴿";
        echo   "<span class='ayeNum'>" . $value['Verse'] . "</span>";
        echo  "﴾ ";
    }
    ?>
</div>

<script>
    // $('span').text().replace(/2/g, '<span style="color:red">$1</span>');
    n = $('span').text().replace(/2/g,"<span style='color:red'>$1</span>");
    // console.log(n);
    $('#divmain').html(n);
</script>