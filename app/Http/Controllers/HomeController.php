<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CoreController as Controller;
use App\User;

class HomeController extends Controller
{
    /**
    * Global Variable
    */
    public $index_page = 'home';
    public $root_route = null;
    public $table      = 'home';
    public $menu_name  = 'Dashboard';
    public $model      = 'App\UserMenu';

    /**
     * level role init
     *
     * @return $data
     */
    function roleMenu(){
      return array('Dashboard');
    }

    /**
     * Form Update Password.
     *
     * @return \Illuminate\Http\Response
     */
    function formProfile(){
      return $this->view('_personal.profile');
    }

    /**
     * Update Password.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
      return response()->json(User::profile());
    }

    
  }
