<?php 

namespace Minhnt\Base\Controllers\Client;

use Minhnt\Base\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Minhnt';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}