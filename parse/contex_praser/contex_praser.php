<?php
namespace contex_praser;
use praser_dom as dom;
use praser_html as html;
class contex
{
  protected $praser_dom;
  public function __construct(dom\praser_dom $praser)
  {
    $this->praser_dom=$praser;

  }
  public function praserek(html\praser_html $html){
    $this->praser_dom->praser_d($html);
  }
}
?>
