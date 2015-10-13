<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\Admin\ProductRequest;
use DB;

class ProductController extends Controller
{
    private $model;
	private $controllerDir;
	private $controllerMainRoute;
	
	public function __construct(Product $model, $dir = 'admin.Product.', $mainRoute = 'admin.product') {
	
		$this->model = $model;

		$this->controllerDir = $dir;
		$this->controllerMainRoute = $mainRoute;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = $this->model->all();
		
		$route = $this->controllerMainRoute;
		 
		return view($this->controllerDir . 'index', compact('data', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$route = $this->controllerMainRoute;
    	
    	$groups = DB::select("SELECT * FROM groups");
    	
    	$places = DB::select("SELECT * FROM places");
    	
        return view($this->controllerDir . 'create', compact('route', 'groups', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
    	$this->model->create($request->all());
    	
    	return redirect()->route($this->controllerMainRoute);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$data = $this->model->whereId($id)->first();
    	
    	$route = $this->controllerMainRoute;
    	
    	$groups = DB::select("SELECT * FROM groups");
    	
    	$places = DB::select("SELECT * FROM places");
    	    	 
    	return view($this->controllerDir . 'edit', compact('data', 'route', 'groups', 'places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $model = $this->model->whereId($id)->first();
    	
    	$model->fill($request->input())->save();
    	 
    	return redirect()->route($this->controllerMainRoute);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->whereId($id)->delete();
        
        return redirect()->route($this->controllerMainRoute);
    }
}
