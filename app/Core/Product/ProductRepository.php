<?php
/*
 *
 *  * Copyright (C) 2016 eveR Vásquez.
 *  *
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *
 */

namespace App\Core\Product;
use DB;


use App\Core\Contracts\BaseRepositoryInterface;

class ProductRepository implements BaseRepositoryInterface
{
    public function all()
{
    return Product::all();
}

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function updated($id, array $attributes)
    {
        // TODO: Implement updated() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }

    public function getProductsByCategoryId($slug){

        $result= Product::wherehas('category', function($query) use ($slug){
            $query->where('slug',$slug);
        })->paginate(10);
        return $result;
    }



    public function getOneProductBySlug($slug)
    {
        $resultProduct= DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('pictures', 'products.id', '=', 'pictures.product_id')

            ->select(DB::raw(" products.name, products.price,categories.name as type,categories.slug,products.code as code, products.created_at as creado,
                                products.description as description,
                            CASE WHEN products.condition =1 then 'EXCELENTE'
                            WHEN products.condition =2 then 'MALO' ELSE 'MALASO' END AS conditiones,
                             pictures.url as url_i, products.views as views"))
            ->where('products.slug',$slug)
            ->get();
        return $resultProduct;
    }

    public function getOneProductImg()
    {
        $result2= DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('pictures', 'products.id', '=', 'pictures.product_id')

            ->select(DB::raw(" products.name, products.price,categories.name as type,
                                products.description as description,
                                pictures.url as url_i, products.views as views"))
            ->get();
        return $result2;
    }
}