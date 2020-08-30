<?php
use \libs\smarty;
use \libs\db;

use \libs\getheader;
if(!defined("MVC")){
    die("非法进入");
}

class index{

    function int(){


//        $arr = array();
//        $database=new db();
//        $db=$database->db;
//
//        $i=0;
//        $result = $db->query("select * from mvc_category where pid=0");
//        while($row=$result->fetch_assoc()){
//            $arr[$i]=$row;
//            $result1=$db->query("select * from mvc_category where pid=".$row["cid"]);
//            while($row1=$result1->fetch_assoc()){
//                $arr[$i]["child"][] = $row1;
//            }
//            $i++;
//        }
//        var_dump($arr);
        $smarty = new smarty();
        //获得新闻
        $newsOne = array();
        $newsArr = array();
        $database=new db();
        $db=$database->db;
        $i=0;
        $result = $db->query("select * from mvc_content where cid=19");
        while($row=$result->fetch_assoc()){
            if($i==0){
                $newsOne = $row;
            }else{
                $newsArr[] = $row;

            }
            $i++;
        };

        //获得嘉宾
        $guestsArr = array();
        $database=new db();
        $db=$database->db;
        $i=0;
        $result = $db->query("select * from mvc_content where cid=20");
        while($row=$result->fetch_assoc()){
            $guestsArr[] = $row;
            $i++;
        };


        $smarty->assign("newsOne",$newsOne);
        $smarty->assign("newsArr",$newsArr);
        $smarty->assign("guestsArr",$guestsArr);

        $header = new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);

        $smarty->assign("footer",TPL_PATH."index/footer.html");

        $smarty->display("index/index.html");
    }


}