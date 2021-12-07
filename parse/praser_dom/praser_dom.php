<?php
namespace praser_dom;
use praser_html as html;
use DateTime;
define('DATE','Y-m-d H:i');
include '../'.'interface_praser.php';

class praser_dom implements praser
{
  protected $html;
  public function praser_d(html\praser_html $html){
  $dom = new \DOMDocument();
  $dom->preserveWhiteSpace = false;
  @$dom->loadHTMLFile('../'.'wo_for_parse.html');
  $dom->saveHTML();
  //$xpath = new \DOMXpath($dom);
  $Priority=$dom->getElementById('priority')->textContent;
  $Trade=$dom->getElementById('trade')->textContent;
  $Category=$dom->getElementById('customer')->textContent;
  $scheduled=$dom->getElementById('scheduled_date')->textContent;
  $NTE=$dom->getElementById('nte')->textContent;
  $Customer_Area=$dom->getElementById('area')->textContent;
  $Asset=$dom->getElementById('asset')->textContent;
  $problem_type=$dom->getElementById('problem_type')->textContent;
  $problem=$dom->getElementById('problem_code')->textContent;
  $po=$dom->getElementById('po_number')->textContent;
  $tracing_number=$dom->getElementById('wo_number')->textContent;
  $store_id=$dom->getElementById('location_name')->textContent;
  $adress=$dom->getElementById('location_address')->textContent;
  $phone=$dom->getElementById('location_phone')->textContent;
  $fax=$dom->getElementById('location_fax')->textContent;
  $this->html=$html;
  $adress_str=str_replace(' ',"",$adress);
  $adress_a=preg_replace( "/\r|\n/", "", $adress_str);
  $adress_w = wordwrap($adress_a, 10, " ", true);
  $tab=explode(' ',$adress_w);
  $street=$tab[0];
  $street=strrev($street);
  $street=wordwrap($street,6,' ',true);
  $street=strrev($street);
  $city_w=strrev($tab[1]);
  $city_w=wordwrap($city_w,7,' ',true);
  $city_w=strrev($city_w);
  $city_e=explode(' ',$city_w);
  $city=$city_e[1];
  $street.=$city_e[0];
  $code_w=strrev($tab[2]);
  $code_w=wordwrap($code_w,5,' ',true);
  $code_w=strrev($code_w);
  $code_e=explode(' ',$code_w);
  $stan=$code_e[0];
  $code=$code_e[1];
  $sched_str=str_replace(' ',"",$scheduled);
  $sched_preg=preg_replace( "/\r|\n/", "", $sched_str);
  $e=DateTime::createFromFormat('Fj,YH:iA',"$sched_preg");
  $a=$e->format(DATE);
  $this->html->Set_Customer($Category)
       ->Set_Priority($Priority)
       ->Set_Trade($Trade)
       ->Set_Scheduled($a)
       ->Set_NTE($NTE)
       ->Set_Customer_Area($Customer_Area)
       ->Set_Asset($Asset)
       ->Set_Problem_type($problem_type)
       ->Set_Problem($problem)
       ->Set_PO($po)
       ->Set_Tracking_Number($tracing_number)
       ->Set_Store_id($store_id)
       ->Set_Adress($adress)
       ->Set_phone($phone)
       ->Set_fax($fax)
       ->Set_City($city)
       ->Set_Street($street)
       ->Set_Code($code)
       ->Set_Stan($stan);
}
}
?>
