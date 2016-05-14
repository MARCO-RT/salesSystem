<?php

namespace App\Http\Controllers;

use App\Core\Category\CategoryRepository;
use App\Core\Product\ProductRepository;
use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $repoCategory;
    protected $repoProduct;

    public function __construct()
    {
        $this->repoCategory = new CategoryRepository();
        $this->repoProduct = new ProductRepository();

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->repoCategory->all();
        $resultFinal2= $this->repoProduct->getOneProductImg();
        return view('layouts/default', compact('categories','resultFinal2'));
    }

    public function post()
    {
        $categories = $this->repoCategory->all();
        return view('post', compact('categories'));
    }

       public function categories($slug)
    {
        $total_categories = $this->repoCategory->getCountProductByCategory();
        $products = $this->repoProduct->getProductsByCategoryId($slug);
        return view('categories', compact('slug', 'products', 'total_categories'));
    }

//    public function getOneProduct($slug)
//    {
//
//        $resultFinal= $this->repoProduct->getOneProductBySlug($slug);
////        return view('products', compact('name', 'pictures', 'price'));
//        dd($resultFinal->toArray());
//
//    }




    /**
     * php artisan migrate:refresh --seed
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
