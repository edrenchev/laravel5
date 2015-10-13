<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\Admin\ProductsRequest;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	private $product;
	
	private $dir = 'admin.Products.';
	private $route = 'admin.products';
	
	public function __construct(Product $product) {
		
		$this->product = $product;
// 		$this->dir = 'admin.Products.';
	}
	
    public function index()
    {
        //
        $products = $this->product->all();
    	
    	return view($this->dir . 'index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $groups = DB::select("SELECT * FROM groups");
   
       return view($this->dir . 'create', ['route'=>$this->route, 'groups'=>$groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request, Product $product)
    {
        //
        
        $product->create($request->all());
        
        return redirect()->route('admin.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        //
        $product = $this->product->whereId($id)->first();
        
        return view($this.dir . 'show', compact('product'));
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    	$product = $this->product->whereId($id)->first();
    	$groups = DB::select("SELECT * FROM groups");
    	
    	return view($this->dir . 'edit', compact('product'), ['route'=>$this->route, 'groups'=>$groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        //
    	$product = $this->product->whereId($id)->first();
    	
    	$product->fill($request->input())->save();
    	 
    	return redirect()->route('admin.products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //
        $product->whereId($id)->delete();
        
        return redirect()->route('admin.products');
        
    }
}
