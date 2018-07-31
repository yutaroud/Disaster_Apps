<?php
/**
 * Created by PhpStorm.
 * User: yuki
 * Date: 2018/07/31
 * Time: 11:34
 */

function get_facility($data,$bunki,$url,$icon,$name){
    if($bunki == 0) {
        if ($data == "有") {
            echo "<a href='" . $url . "' class='shortcut'> <i class='shortcut-icon material-icons'>" . $icon . "</i><span class='shortcut-label'>" . $name . "</span> </a>";
        }
    }
    else if($bunki == 1){
        if ($data !== "有") {
            echo "<a href='" . $url . "' class='shortcut'> <i class='shortcut-icon material-icons'>" . $icon . "</i><span class='shortcut-label'>" . $name . "</span> </a>";
        }
    }
}