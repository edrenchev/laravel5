<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PlaceRequest;
use App\Place;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    private $model;
	private $controllerDir;
	private $controllerMainRoute;
	
	public function __construct(Place $model, $dir = 'admin.Place.', $mainRoute = 'admin.place') {
	
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
        return view($this->controllerDir . 'create', compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request)
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
    	    	 
    	return view($this->controllerDir . 'edit', compact('data', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceRequest $request, $id)
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
