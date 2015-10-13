<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Http\Requests\Admin\GroupRequest;

class GroupController extends Controller
{
	private $controller;
	private $controllerDir = 'admin.Group.';
	private $controllerMainRoute = 'admin.group';
	
	public function __construct(Group $controller) {
	
		$this->controller = $controller;
		// 		$this->dir = 'admin.group.';
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = $this->controller->all();
		 
		return view($this->controllerDir . 'index', compact('data'));
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
    public function store(GroupRequest $request, Group $controller)
    {
    	$controller->create($request->all());
    	
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
    	$data = $this->controller->whereId($id)->first();
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
    public function update(GroupRequest $request, $id)
    {
        $controller = $this->controller->whereId($id)->first();
    	
    	$controller->fill($request->input())->save();
    	 
    	return redirect()->route($this->controllerMainRoute);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $controller, $id)
    {
        $controller->whereId($id)->delete();
        
        return redirect()->route($this->controllerMainRoute);
    }
}
