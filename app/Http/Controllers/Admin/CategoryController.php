<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Category::all();
        return view('admin.category.manage-category',['cate' => $cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request,
                [
                    'name'=>'required'
                ],
                [
                    'name.required' =>'Không được để trống tên danh mục sản phẩm'
                ]
            );

            $c = new Category();
            $c->name = $request->name;
            $c->save();

             Session::flash('sucess', 'Tạo mới thành công');
        
        return redirect('admin/category');
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
        $cate = Category::findOrFail($id);
        return view('admin.category.edit-category',['cate' => $cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
                [
                    'name'=>'required'
                ],
                [
                    'name.required' =>'Không được để trống tên danh mục sản phẩm'
                ]
            );

            $c = Category::findOrFail($id);
            $c->name = $request->name;
            $c->save();

             Session::flash('sucess', 'Chỉnh sửa '.$c->name.' thành công');
        
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = findOrFail($id);
        $c->delete();
        Session::flash('sucess', 'Xóa '.$c->name.' thành công');
        
        return redirect('admin/category');
    }
}
