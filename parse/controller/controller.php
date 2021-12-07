<?php
namespace controller;
use praser_dom as dom;
use praser_html as html;
use contex as contex;
include '../'.'spl_auto.php';
include '../'.'wo_for_parse.html';


class controller
{
  protected $html;
  public function __construct()
  {

    $praser_html = new html\praser_html();
    $praser = new dom\praser_dom();
    $praser_contex=new contex\contex_praser($praser);
    $praser_contex->praserek($praser_html);
    //var_dump($praser_contex);
    $array=array(
    array($praser_html->Get_Tracking_Number()),
    array($praser_html->Get_PO()),
    array($praser_html->Get_Scheduled()),
    array($praser_html->Get_Customer()),
    array($praser_html->Get_Trade()),
    array($praser_html->Get_NTE()),
    array($praser_html->Get_Store_id()),
    array($praser_html->Get_Street()),
    array($praser_html->Get_City()),
    array($praser_html->Get_Code()),
    array($praser_html->Get_Stan()),
    array($praser_html->Get_phone())
    );
    //var_dump($array);
    $fp=fopen('file.csv','w');
    ini_set('auto_detect_line_endings',TRUE);
    foreach ($array as $fields)
    {
        //var_dump($fields);
        fputcsv($fp, $fields,',');
    }
    fclose($fp);
    echo '<a href="file.csv" style="color:black;text-decoration: none" download rel="nofollow noopener noreferrer" target="_blank">Download File</a>';
    //var_dump($praser_html->Get_Problem().$praser_html->Get_PO());
  }
}
$controller=new controller;
?>
