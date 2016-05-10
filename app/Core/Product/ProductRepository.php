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


use App\Core\Contracts\BaseRepositoryInterface;

class ProductRepository implements BaseRepositoryInterface
{
    public function all()
    {
        // TODO: Implement all() method.
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
        })->paginate(20);
        return $result;
    }
}