<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require 'app/vendor/autoload.php';

class AdminController extends Controller {

    public function home(){
        $this->call->view('/admin/home');
    }

    }
?>