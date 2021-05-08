<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
class ProductController extends Controller
{
    public function category(Request $request,$type='')
    {
    	if(request()->ajax())
    	{
    		if($type=='insert')
    		{
    			$validator=Validator::make($request->all(),['name'=>'required']);
    			if($validator->passes())
    			{
                    $category = new Category();
                    $category->name=$request->name;
                    $category->status=1;
                    $category->deleted_at=0;
                    $category->save();	
                    $arr=array('status'=>'true','message'=>'Category Successfully Added','reload'=>'0');
    			}
    			else 
    			{
    				$arr=array('status'=>'false','message'=>$validator->errors()->all());
    			}
    			echo json_encode($arr);
    		}
    		else if($type=='edit')
    		{
    			$validator=Validator::make($request->all(),['name'=>'required']);
    			if($validator->passes())
    			{
                    $category = Category::where('id',$request->id)->get()->first();
                    $category->name=$request->name;
                    $category->status=1;
                    $category->deleted_at=0;
                    $category->update();	
                    $arr=array('status'=>'true','message'=>'Category Successfully Uppdated','reload'=>'0');	
    			}
    			else 
    			{
    				$arr=array('status'=>'false','message'=>$validator->errors()->all());
    			}
    			echo json_encode($arr);	
    		}
    		else if($type=='delete')
    		{
    			$category = Category::where('id',$request->id)->get()->first();
				$category->deleted_at=1;
				$category->update();
				$arr=array('status'=>'true','message'=>'Category Successfully Deleted','reload'=>'0');
				echo json_encode($arr);
    		}
    		else 
    		{
    			$category = Category::where('id',$type)->get()->first();
				$category->status=$request->status;
				$category->update();
				$arr=array('status'=>'true','message'=>'Category Successfully Deleted','reload'=>'0');
				echo json_encode($arr);	
    		}
    	}
    	else 
    	{
            $data = array(
                "page_title" => "Category",
                "page_title2" => "Category"
            );
    		return view('admin.products.category',$data);
    	}
    }
    public function getCategory(Request $request){
        $type=2;
        $columns = array(
            0 =>'id',
            1 =>'name',
            2=> 'parent',
            3=> 'status',
            4=> 'action',
        );

        $totalData = Category::where('deleted_at','0')->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
        $posts = Category::where('deleted_at','0')->offset($start)
                ->orderBy('id','desc')
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        }
        else {
        $search = $request->input('search.value');

        $posts =  Category::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
                    ->orWhere('name', 'LIKE',"%{$search}%")
                    ->orderBy('id','desc')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
        $totalFiltered = Category::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
                    ->orWhere('name', 'LIKE',"%{$search}%")
                    ->orderBy('id','desc')
                    ->count();
        }

        $data = array();
        if(!empty($posts))
        {
            foreach ($posts as $key => $post)
            {
                $chk='';
                if($post->status==1) {
                    $chk="checked";
                }
                $nestedData['id'] = $key+1;
                $nestedData['name'] = $post->name;
                $url = url('/admin/products/category/'.$post->id);
                $status = '';
                if($post->status==1) {
                    $status="checked";
                }
                $nestedData['status'] = '<label class="switch">
                                                <input '.$status.' value="1" data-url="'.$url.'" data-id="'.$post->id.'" id="status_'.$post->id.'" type="checkbox" class="changeStatus" >
                                                <span class="slider round"></span>
                                            </label>';
                $nestedData['action'] = "<a href='javascript:;' class='btn btn-info btn-sm ml-1 edit_category' data-url='".url('admin/products/category/edit')."' data-id='".$post->id."' data-item='".json_encode($post)."'>Edit</a><a href='javascript:;' class='btn btn-danger btn-sm ml-1 delete_element' data-url='".url('admin/products/category/delete')."' data-id='".$post->id."'>Delete</a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
            );

        echo json_encode($json_data);
    }
}
