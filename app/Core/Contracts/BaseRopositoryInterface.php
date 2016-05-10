<?php

namespace App\Core\Contracts;
/**
 * Interface BaseRopositoryInterface
 */
interface BaseRopositoryInterface
{
    public function all();
    /**
     * @param array $attributes
     * @return mixed
     */
    public function  create(array $attributes);

    /**
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function  updated($id,array $attributes);

    /**
     * @param $id
     * @return mixed
     */
    public function  find($id);

    /**
     * @param $id
     * @return mixed
     */
    public function  deleted($id);

}