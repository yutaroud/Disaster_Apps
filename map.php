<?php require_once('./component/header.php') ?>
<p>
    <table>
    <?php
    //自治体コード
    $jititai_code = [23226,23236];
    //csvfile読み込み
    $lines = file('./CSV/'.$jititai_code[1].'_hinanjo.csv');
    //th分割
    $thead = explode(',',$lines[0]);

    echo '<tr>';
    //th
    for($i=0;$i<count($thead);$i++){
        echo '<th>'.$thead[$i].'</th>';
    }
    echo '</tr>';

    //td
    array_shift($lines);
    foreach($lines as $line) {
        $data = explode(',',$line);
        echo '<tr>';
        for($k=0;$k<count($thead);$k++) {
            echo '<td>' . $data["$k"]. '</td>';
        }
        echo '</tr>';
    }


?>
    </table>
</p>
<?php require_once('./component/footer.php')?>