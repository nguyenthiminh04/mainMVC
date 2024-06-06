<?php 

namespace Minhnt\Base\Controllers\Client;

use Minhnt\Base\Commons\Controller;
use Minhnt\Base\Commons\Helper;
use Minhnt\Base\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}