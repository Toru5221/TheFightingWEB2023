<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <pre>
        <?php
        //var_dump($_GET);
        var_dump($_POST);
        ?>

        </pre>
    <form id="ore" action="" method="POST" class="get.php">
        <div>
            <label for="text">テキスト入力: </label> <br>
            <input type="text" name="text" id="text" value="<?php echo $_POST['text']; ?>" /> 
        </div>

        <div>
            <label for="number">数字のみ入力できる: </label> <br>
            <input type="number" name="number" id="number"value="<?php echo $_POST['number']; ?>" />
        </div>

        <div>
            <label for="area_text">複数行入力できる: </label> <br>
            <textarea name="multi_row_text" id="area_text" cols="20" rows="2"><?php echo $_POST['multi_row_text']; ?></textarea>
        </div>

        <div>
        <label for="sex_otoko">男:
            <input id="sex_otoko" type="radio" name="sex" value="男"<?php if ($_POST['sex'] == "男") echo 'checked'; ?>>
        </label>
        <label for="sex_onna">女:
            <input id="sex_onna" type="radio" name="sex" value="女"<?php if ($_POST['sex'] == "女") echo 'checked'; ?>>
        </label>
        <label for="sex_not_ans">答えたくない:
            <input id="sex_not_ans" type="radio" name="sex" value="答えたくない"<?php if ($_POST['sex'] == "答えたくない") echo 'checked'; ?>>
        </label>
        </div>

        <div>
            <label for="pref">都道府県: </label> <br>
            <select name="pref" id="pref">

            <option value="" <?php if ($_POST['pref'] == "") echo "selected" ?>>選択してください</option>
            <option value="1" <?php if ($_POST['pref'] == "1") echo "selected" ?>>北海道</option>
            <option value="2" <?php if ($_POST['pref'] == "2") echo "selected" ?>>青森県</option>
            <option value="3" <?php if ($_POST['pref'] == "3") echo "selected" ?>>岩手県</option>
            <option value="4" <?php if ($_POST['pref'] == "4") echo "selected" ?>>宮城県</option>
            <option value="5" <?php if ($_POST['pref'] == "5") echo "selected" ?>>秋田県</option>
            <option value="6" <?php if ($_POST['pref'] == "6") echo "selected" ?>>山形県</option>
            <option value="7" <?php if ($_POST['pref'] == "7") echo "selected" ?>>福島県</option>
            <option value="8" <?php if ($_POST['pref'] == "8") echo "selected" ?>>茨城県</option>
            <option value="9" <?php if ($_POST['pref'] == "9") echo "selected" ?>>栃木県</option>
            <option value="10" <?php if ($_POST['pref'] == "10") echo "selected" ?>>群馬県</option>
            <option value="11" <?php if ($_POST['pref'] == "11") echo "selected" ?>>埼玉県</option>
            <option value="12" <?php if ($_POST['pref'] == "12") echo "selected" ?>>千葉県</option>
            <option value="13" <?php if ($_POST['pref'] == "13") echo "selected" ?>>東京都</option>
            <option value="14" <?php if ($_POST['pref'] == "14") echo "selected" ?>>神奈川県</option>
            <option value="15" <?php if ($_POST['pref'] == "15") echo "selected" ?>>新潟県</option>
            <option value="16" <?php if ($_POST['pref'] == "16") echo "selected" ?>>富山県</option>
            <option value="17" <?php if ($_POST['pref'] == "17") echo "selected" ?>>石川県</option>
            <option value="18" <?php if ($_POST['pref'] == "18") echo "selected" ?>>福井県</option>
            <option value="19" <?php if ($_POST['pref'] == "19") echo "selected" ?>>山梨県</option>
            <option value="10" <?php if ($_POST['pref'] == "20") echo "selected" ?>>長野県</option>
            <option value="21" <?php if ($_POST['pref'] == "21") echo "selected" ?>>岐阜県</option>
            <option value="22" <?php if ($_POST['pref'] == "22") echo "selected" ?>>静岡県</option>
            <option value="23" <?php if ($_POST['pref'] == "23") echo "selected" ?>>愛知県</option>
            <option value="24" <?php if ($_POST['pref'] == "24") echo "selected" ?>>三重県</option>
            <option value="25" <?php if ($_POST['pref'] == "25") echo "selected" ?>>滋賀県</option>
            <option value="26" <?php if ($_POST['pref'] == "26") echo "selected" ?>>京都府</option>
            <option value="27" <?php if ($_POST['pref'] == "27") echo "selected" ?>>大阪府</option>
            <option value="28" <?php if ($_POST['pref'] == "28") echo "selected" ?>>兵庫県</option>
            <option value="29" <?php if ($_POST['pref'] == "29") echo "selected" ?>>奈良県</option>
            <option value="30" <?php if ($_POST['pref'] == "30") echo "selected" ?>>和歌山県</option>
            <option value="31" <?php if ($_POST['pref'] == "31") echo "selected" ?>>鳥取県</option>
            <option value="32" <?php if ($_POST['pref'] == "32") echo "selected" ?>>島根県</option>
            <option value="33" <?php if ($_POST['pref'] == "33") echo "selected" ?>>岡山県</option>
            <option value="34" <?php if ($_POST['pref'] == "34") echo "selected" ?>>広島県</option>
            <option value="35" <?php if ($_POST['pref'] == "35") echo "selected" ?>>山口県</option>
            <option value="36" <?php if ($_POST['pref'] == "36") echo "selected" ?>>徳島県</option>
            <option value="37" <?php if ($_POST['pref'] == "37") echo "selected" ?>>香川県</option>
            <option value="38" <?php if ($_POST['pref'] == "38") echo "selected" ?>>愛媛県</option>
            <option value="39" <?php if ($_POST['pref'] == "39") echo "selected" ?>>高知県</option>
            <option value="40" <?php if ($_POST['pref'] == "40") echo "selected" ?>>福岡県</option>
            <option value="41" <?php if ($_POST['pref'] == "41") echo "selected" ?>>佐賀県</option>
            <option value="42" <?php if ($_POST['pref'] == "42") echo "selected" ?>>長崎県</option>
            <option value="43" <?php if ($_POST['pref'] == "43") echo "selected" ?>>熊本県</option>
            <option value="44" <?php if ($_POST['pref'] == "44") echo "selected" ?>>大分県</option>
            <option value="45" <?php if ($_POST['pref'] == "45") echo "selected" ?>>宮崎県</option>
            <option value="46" <?php if ($_POST['pref'] == "46") echo "selected" ?>>鹿児島県</option>
            <option value="47" <?php if ($_POST['pref'] == "47") echo "selected" ?>>沖縄県</option>
            </select>
        </div>

        <div>
             <input type="submit" value="送信"  name="submitbutton" id="submitbutton"/>
        </div>
    </form>
    </body>
</html>