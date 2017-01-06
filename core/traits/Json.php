<?php 
namespace core\traits;

trait Json
{

  public static function json($vars, $tpl = '')
  {
    header('Content-Type: application/json');
    $res;
    if(is_array($tpl)) {
      $res = $tpl;
      $tpl['data'] = $vars;
    } else {
      $res = $vars;
    }
    echo json_encode($res);
  }
  public static function success($msg = '',$url = '',$data = '')
  {
    
  }

  public static function error($msg = '',$url = '',$data = '')
  {
    
  }
}
