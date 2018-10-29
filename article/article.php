<?php
/**
 * Created by PhpStorm.
 * User: NoobMicrosoft
 * Date: 10/29/2018
 * Time: 12:23 PM
 */

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $pages = array(
        'page1',
        'page2',
        'page3',
        'page4',
        'page5',
        'page6',
        'page7',
        'page8',
        'page9',
        'page10',
        'page11',
        'page12',
        'page13',
    );

    if(isset($_GET["page"]) && !empty($_GET["page"])){
        $page = $_GET['page'];
        if(in_array($page, $pages)){
            include($page. '.html');

        }
    }


}
