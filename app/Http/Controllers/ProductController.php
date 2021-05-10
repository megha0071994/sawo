<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
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
                    $arr=array('status'=>'true','message'=>trans('lang.category_successfully_added'),'reload'=>'0');
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
                    $arr=array('status'=>'true','message'=>trans('lang.category_successfully_updated'),'reload'=>'0');	
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
				$arr=array('status'=>'true','message'=>trans('lang.category_successfully_deleted'),'reload'=>'0');
				echo json_encode($arr);
    		}
    		else 
    		{
    			$category = Category::where('id',$type)->get()->first();
				$category->status=$request->status;
				$category->update();
				$arr=array('status'=>'true','message'=>trans('status_changed_successfully'),'reload'=>'0');
				echo json_encode($arr);	
    		}
    	}
    	else 
    	{
            $data = array(
                "page_title" => trans('category'),
                "page_title2" => trans('category')
            );
    		return view('admin.products.category',$data);
    	}
    }
	
    public function getCategory(Request $request){
        $type=2;
        $columns = array(
            0 =>'id',
            1 =>'name',
            2=> 'status',
            3=> 'action',
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
                $nestedData['action'] = "<a href='javascript:;' class='btn btn-info btn-sm ml-1 edit_category' data-url='".url('admin/products/category/edit')."' data-id='".$post->id."' data-item='".json_encode($post)."'>".trans('edit')."</a><a href='javascript:;' class='btn btn-danger btn-sm ml-1 delete_element' data-url='".url('admin/products/category/delete')."' data-id='".$post->id."'>".trans('delete')."</a>";
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
	
	public function sub_category(Request $request,$type='')
    {
    	if(request()->ajax())
    	{
    		if($type=='insert')
    		{
    			$validator=Validator::make($request->all(),['name'=>'required', 'cat_id'=>'required']);
    			if($validator->passes())
    			{
					if(SubCategory::where('name',$request->name)->where('cat_id',$request->cat_id)->get()->first()){
						$arr=array('status'=>'false','message'=>trans('sub_category_already_exist'),'reload'=>'0');
					} else {
						$sub_category = new SubCategory();
						$sub_category->name=$request->name;
						$sub_category->cat_id=$request->cat_id;
						$sub_category->status=1;
						$sub_category->deleted_at=0;
						$sub_category->save();	
						$arr=array('status'=>'true','message'=>trans('sub_category_successfully_added'),'reload'=>'0');
					}
    			}
    			else 
    			{
    				$arr=array('status'=>'false','message'=>$validator->errors()->all());
    			}
    			echo json_encode($arr);
    		}
    		else if($type=='edit')
    		{
    			$validator=Validator::make($request->all(),['name'=>'required', 'cat_id'=>'required']);
    			if($validator->passes())
    			{
					if(SubCategory::where('name',$request->name)->where('cat_id',$request->cat_id)->where('id', '!=', $request->id)->get()->first()){
						$arr=array('status'=>'false','message'=>trans('sub_category_already_exist'),'reload'=>'0');
					} else {
						$sub_category = SubCategory::where('id',$request->id)->get()->first();
						$sub_category->name=$request->name;
						$sub_category->cat_id=$request->cat_id;
						$sub_category->status=1;
						$sub_category->deleted_at=0;
						$sub_category->update();	
						$arr=array('status'=>'true','message'=>trans('sub_category_successfully_updated'),'reload'=>'0');	
					}
    			}
    			else 
    			{
    				$arr=array('status'=>'false','message'=>$validator->errors()->all());
    			}
    			echo json_encode($arr);	
    		}
    		else if($type=='delete')
    		{
    			$sub_category = SubCategory::where('id',$request->id)->get()->first();
				$sub_category->deleted_at=1;
				$sub_category->update();
				$arr=array('status'=>'true','message'=>trans('sub_category_successfully_deleted'),'reload'=>'0');
				echo json_encode($arr);
    		}
    		else 
    		{
    			$category = Category::where('id',$type)->get()->first();
				$category->status=$request->status;
				$category->update();
				$arr=array('status'=>'true','message'=>trans('status_changed_successfully'),'reload'=>'0');
				echo json_encode($arr);	
    		}
    	}
    	else 
    	{
            $data = array(
                "page_title" => trans('sub_category'),
                "page_title2" => trans('sub_category'),
				"categories" => Category::select('id', 'name')->where('deleted_at',0)->get()->toArray()
            );
    		return view('admin.products.sub-category',$data);
    	}
    }
	
    public function getSubCategory(Request $request){
        $type=2;
        $columns = array(
            0 =>'id',
            1 =>'name',
            2=> 'sub_cat_id',
            3=> 'status',
            4=> 'action',
        );

        $totalData = SubCategory::where('deleted_at','0')->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
        $posts = SubCategory::where('deleted_at','0')->offset($start)
                ->orderBy('id','desc')
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        } else {
			$search = $request->input('search.value');

			$posts =  SubCategory::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
						->orWhere('name', 'LIKE',"%{$search}%")
						->orderBy('id','desc')
						->offset($start)
						->limit($limit)
						->orderBy($order,$dir)
						->get();
			$totalFiltered = SubCategory::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
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
				$cat_name = '-';
				$cat = Category::Select('name')->where('id',$post->cat_id)->get()->first();
				if($cat){
					$cat_name = $cat->name;
				}
                $nestedData['cat_id'] = $cat_name;
                $nestedData['name'] = $post->name;
                $url = url('/admin/products/sub-category/'.$post->id);
                $status = '';
                if($post->status==1) {
                    $status="checked";
                }
                $nestedData['status'] = '<label class="switch">
                                                <input '.$status.' value="1" data-url="'.$url.'" data-id="'.$post->id.'" id="status_'.$post->id.'" type="checkbox" class="changeStatus" >
                                                <span class="slider round"></span>
                                            </label>';
                $nestedData['action'] = "<a href='javascript:;' class='btn btn-info btn-sm ml-1 edit_sub_category' data-url='".url('admin/products/sub_category/edit')."' data-id='".$post->id."' data-item='".json_encode($post)."'>".trans('edit')."</a><a href='javascript:;' class='btn btn-danger btn-sm ml-1 delete_element' data-url='".url('admin/products/sub-category/delete')."' data-id='".$post->id."'>".trans('delete')."</a>";
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
