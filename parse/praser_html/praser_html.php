<?php
namespace praser_html;
use DateTime;
class praser_html
{
  private $customer;
  private $priority;
  private $trade;
  private $scheduled;
  private $category;
  private $nte;
  private $customer_area;
  private $asset;
  private $problem_type;
  private $problem;
  private $po;
  private $tracing;
  private $problem_Description;
  private $store_id;
  private $address;
  private $phone;
  private $fax;
  private $city;
  private $stan;
  private $street;
  private $code;
  public function Get_Customer()
  {
    return $this->customer;
  }
  public function Set_Customer($customer)
  {
    $this->customer=$customer;
    return $this;
  }
  public function Get_Priority()
  {
    return $this->priority;
  }
  public function Set_Priority($priority)
  {
    $this->priority=$priority;
    return $this;
  }
  public function Get_Trade()
  {
    return $this->trade;
  }
  public function Set_Trade($trade)
  {
    $this->trade=$trade;
    return $this;
  }
  public function Get_Scheduled()
  {
    return $this->scheduled;
  }
  public function Set_Scheduled($scheduled)
  {
    $this->scheduled=date('Y-m-d', strtotime($scheduled));
    return $this;
  }
  public function Get_Category()
  {
    return $this->category;
  }
  public function Set_Category($category)
  {
    $this->category=$category;
    return $this;
  }
  public function Get_NTE()
  {
    return $this->nte;
  }
  public function Set_NTE($nte)
  {
    $this->nte=$nte;
    return $this;
  }
  public function Get_Customer_Area()
  {
    return $this->customer_area;
  }
  public function Set_Customer_Area($customer_area)
  {
    $this->Customer_Area=$customer_area;
    return $this;
  }
  public function Get_Asset()
  {
    return $this->asset;
  }
  public function Set_Asset($asset)
  {
    $this->asset=$asset;
    return $this;
  }
  public function Get_Problem_Type()
  {
    return $this->problem_type;
  }
  public function Set_Problem_type($problem_type)
  {
    $this->problem_type=$problem_type;
    return $this;
  }
  public function Get_Problem()
  {
    return $this->problem;
  }
  public function Set_Problem($problem)
  {
    $this->problem=$problem;
    return $this;
  }
  public function Get_PO():string
  {
    return $this->po;
  }
  public function Set_PO(string $PO)
  {
    $this->po=$PO;
    return $this;
  }
  public function Get_Tracking_Number():string
  {
    return $this->tracing;
  }
  public function Set_Tracking_Number(string $tracing)
  {
    $this->tracing=$tracing;
    return $this;
  }
  public function Get_Problem_Description()
  {
    return $this->Problem_Description;
  }
  public function Set_Problem_Description($problem_description)
  {
    $this->Problem_Description=$problem_description;
    return $this;
  }
  public function Get_Store_id()
  {
    return $this->store_id;
  }
  public function Set_Store_id($store_id)
  {
    $this->store_id=$store_id;
    return $this;
  }
  public function Get_Adress()
  {
    return $this->address;
  }
  public function Set_Adress($adres)
  {
    $this->address=$adres;
    return $this;
  }
  public function Get_City()
  {
    return $this->city;
  }
  public function Set_City($city)
  {
    $this->city=$city;
    return $this;
  }
  public function Get_Street()
  {
    return $this->street;
  }
  public function Set_Street($street)
  {
    $this->street=$street;
    return $this;
  }
  public function Get_Stan()
  {
    return $this->stan;
  }
  public function Set_Stan($stan)
  {
    $this->stan=$stan;
    return $this;
  }
  public function Get_Code()
  {
    return $this->code;
  }
  public function Set_Code($code)
  {
    $this->code=$code;
    return $this;
  }
  public function Get_phone()
  {
    return $this->phone;
  }
  public function Set_phone($phone)
  {
    $this->phone=$phone;
    return $this;
  }
  public function Get_fax()
  {
    return $this->fax;
  }
  public function Set_fax($fax)
  {
    $this->fax=$fax;
    return $this;
  }
}
?>
