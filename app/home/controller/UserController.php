<?php 
namespace home\controller;

use core\Controller;
use home\model\UserModel;
/**
* yong
*/
class UserController extends Controller
{
  public function index()
  {
    $model = new UserModel();
    if ($model->save(['name'=>'hello','password'=>'shiyanlou'])) {
      $model->free();    //释放连接
      $this->success('Success','/');
    } else {
      $model->free();    //释放连接
      $this->error('error');
    }
  }
}
