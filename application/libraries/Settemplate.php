<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class CI_Settemplate 
{   
var $CI ,$ID='',$TYPE;
function CI_SetTemplate()
{
// Copy an instance of CI so we can use the entire framework.
$this->CI=& get_instance();
$this->CI->load->library("template");
}
public function usertemp($view, $data="", $title="Welcome to eknowledgetree")
{
$content=$this->CI->load->view($view, $data, true);
$this->CI->template->set_template('usertemp');
$this->CI->template->write('content',$content);
$stateinfo=$this->CI->load->view("admin/statesinfo",$data,true);
$searchinfo=$this->CI->load->view("admin/searchinfo",$data,true);
$footer=$this->CI->load->view("user/user_footer",$data,true);
$this->CI->template->write ('footer',$footer);
$slider=$this->CI->load->view("user/display_sponseredcars",$data,true);
$this->CI->template->write ('slider',$slider);
$this->CI->template->write('title',$title);
$this->CI->template->write ('stateinfo',$stateinfo);
$this->CI->template->write ('searchinfo',$searchinfo);
$this->CI->template->render();
}
}
?>