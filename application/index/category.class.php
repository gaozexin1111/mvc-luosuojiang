<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;
if(!defined("MVC")){
    die("非法进入");
}
class category{
    function int(){
        $smarty = new smarty();

        $cid = $_GET["cid"];
        $db = new db();
        $db = $db->db;
        $result = $db->query("select * from mvc_category where cid=$cid");
        $currentInfo = $result->fetch_assoc();

        $sonresult = $db->query("select * from mvc_category where pid=$cid");
        $sonInfo = array();
        while($row=$sonresult->fetch_assoc()){
            $sonInfo[] = $row;
        }

//        $coninfo = array();
//        if($currentInfo["tpl_name"]=="service.html"){
//            foreach ($sonInfo as $k=>$v){
//                $cid = $v["cid"];
//                $result=$db->query("select * from mvc_content where cid=$cid");
//
//                while ($row=$result->fetch_assoc()){
//                    $coninfo[$k] = $row;
//                }
//
//            }
//        }




        $header = new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("soninfo",$sonInfo);

        $smarty->assign("currentinfo",$currentInfo);
//        $smarty->assign("coninfo",$coninfo);
        $smarty->assign("footer",TPL_PATH."index/footer.html");

        switch ($currentInfo["tpl_name"]){
            case "news.html":
                $conresult = $db->query("select * from mvc_content where cid=$cid");
                $newsInfo = array();
                while($row=$conresult->fetch_assoc()){
                    $newsInfo[] = $row;
                }

                $smarty->assign("newsinfo",$newsInfo);

                $smarty->display("index/".$currentInfo["tpl_name"]);
                break;
            case "guests.html":
                $conresult = $db->query("select * from mvc_content where cid=$cid");
                $guestsInfo = array();
                while($row=$conresult->fetch_assoc()){
                    $guestsInfo[] = $row;
                }

                $smarty->assign("guestsinfo",$guestsInfo);

                $smarty->display("index/".$currentInfo["tpl_name"]);
                break;
            default:
                $smarty->display("index/".$currentInfo["tpl_name"]);
                break;
        }


    }
}