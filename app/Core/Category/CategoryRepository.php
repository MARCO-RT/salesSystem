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

namespace App\Core\Category;


use App\Core\Contracts\BaseRepositoryInterface;

/**
 * Class CategoryRepository
 * @package App\Core\Category
 */
class CategoryRepository implements BaseRepositoryInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Category::all();
    }

    /**
     * @param array $attributes
     */
    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param $id
     * @param array $attributes
     */
    public function updated($id, array $attributes)
    {
        // TODO: Implement updated() method.
    }

    /**
     * @param $id
     */
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @param $id
     */
    public function deleted($id)
    {
        // TODO: Implement deleted() method.
    }

}