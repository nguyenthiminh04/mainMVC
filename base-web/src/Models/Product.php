<?php

namespace Minhnt\Base\Models;

use Minhnt\Base\Commons\Model;

class Product extends Model 
{
    protected string $tableName = 'products';

    public function all(){
        return $this->queryBuilder->select(
            'p.id', 'p.category_id', 'p.name', 'p.img_thumbnail', 'p.creared_at', 'p.updated_at', 'c.name as c_name'
        )
        ->from ($this->tableName, 'p')
        ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
        ->orderBy('p.id', 'desc')
        ->fetchAllAssociative();
    }
    
    public function paginate($page = 1, $perPage = 5)
    {
        
    }
}