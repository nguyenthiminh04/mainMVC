<?php

namespace Minhnt\Base\Controllers\Admin;

use Minhnt\Base\Commons\Controller;
use Minhnt\Base\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}