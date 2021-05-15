<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    public function index(){
        $data = array(
            "page_title" => __('lang.manageVehicle'),
            "page_title2" => __('lang.manageVehicle')
        );
        return view('admin.vehicle.list',$data);
    }
    public function add(Request $request){
        if(request()->ajax()){
            $rc_doc = '';
            $ins_doc = '';
            $pdoc = '';
            $tax_doc = '';
            $pub_doc = '';
            $pvdoc = '';
            if ($request->hasFile('rc_doc')) {
                $file = $request->file('rc_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $rc_doc = "rc_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$rc_doc);
            }
            if ($request->hasFile('ins_doc')) {
                $file = $request->file('ins_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $ins_doc = "ins_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$ins_doc);
            }
            if ($request->hasFile('pdoc')) {
                $file = $request->file('pdoc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pdoc = "pdoc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pdoc);
            }
            if ($request->hasFile('tax_doc')) {
                $file = $request->file('tax_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $tax_doc = "tax_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$tax_doc);
            }
            if ($request->hasFile('pub_doc')) {
                $file = $request->file('pub_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pub_doc = "pub_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pub_doc);
            }
            if ($request->hasFile('pvdoc')) {
                $file = $request->file('pvdoc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pvdoc = "pvdoc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pvdoc);
            }
            $obj = new Vehicle();
            $obj->driver_id = $request->driver;
            $obj->cat_id = $request->category;
            $obj->sub_cat_id = $request->sub_category;
            //$obj->vehicle_type_id = $request->driver;
            $obj->vehicle_no = $request->vehicle_number;
            $obj->vehicle_name = $request->vehicle_name;
            
            $obj->description = $request->description;
            $obj->length = $request->length;
            $obj->width = $request->width;
            $obj->height = $request->height;
            $obj->max_loading = $request->max_loading;

            $obj->work_location = $request->work_location;
            $obj->rc_doc = $rc_doc;
            $obj->insurance_doc = $ins_doc;
            $obj->insurance_valid_from = $request->ins_valid_from;
            $obj->insurance_valid_to = $request->ins_valid_to;
            $obj->permit_doc = $pdoc;
            $obj->permit_valid_from = $request->pv_valid_from;
            $obj->permit_valid_to = $request->pvvalidto;
            $obj->tax_doc = $tax_doc;
            $obj->tax_from = $request->tax_valid_from;
            $obj->tax_to = $request->tax_valid_to;
            $obj->puc_doc = $pub_doc;
            $obj->puc_from = $request->pub_valid_from;
            $obj->puc_to = $request->pub_valid_to;
            $obj->Verification = $request->verification;
            $obj->PermitValidfrom = $request->pvalid_from;
            $obj->PermitValidto = $request->pvalidto;
            if($pvdoc) {
                $obj->PoliceverificationDoc = $pvdoc;
            }
            $obj->save();
            echo json_encode(array('status'=>'true','message'=>'Vehicle Successfully Added','reload'=>url('admin/vehicle')));
        } else {
            $data = array(
                "page_title" => __('lang.addvehicle'),
                "page_title2" => __('lang.addvehicle'),
                'drivers'=>Driver::where('status','1')->where('deleted_at','0')->get()->toArray(),
                'category'=>Category::where('status','1')->where('deleted_at','0')->get()->toArray()
            );
            return view('admin.vehicle.add',$data);
        }
        
    }
    public function subcat($id) {
        $sub_cat = SubCategory::where('status',1)->where('deleted_at',0)->get()->toArray();
        echo "<option value=''>Select Category</option>";
        foreach($sub_cat as $scat){
            echo "<option value='".$scat['id']."'>".$scat['name']."</option>";
        } 
    }
    public function getvehicle(Request $request){
        $type=2;
        $columns = array(
            0 =>'id',
            1 =>'driver_id',
            2 =>'cat_id',
            3 =>'sub_cat_id',
            4 =>'vehicle_no',
            5 =>'vehicle_name',
            6 =>'Verification',
            7=> 'status',
            8=> 'action',
        );

        $totalData = Vehicle::where('deleted_at','0')->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
        $posts = Vehicle::select(['sw_vehicle.*','sw_driver.fname','sw_driver.lname','sw_category.name as catname','sw_sub_category.name as scat'])
        ->join('sw_driver','sw_vehicle.driver_id','=','sw_driver.id')
        ->join('sw_category','sw_vehicle.cat_id','=','sw_category.id')
        ->join('sw_sub_category','sw_vehicle.sub_cat_id','=','sw_sub_category.id')
        ->where('sw_vehicle.deleted_at','0')->offset($start)
                ->orderBy('sw_vehicle.id','desc')
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        }
        else {
        $search = $request->input('search.value');

        $posts =  Vehicle::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
                    ->orWhere('name', 'LIKE',"%{$search}%")
                    ->orderBy('id','desc')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
        $totalFiltered = Vehicle::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
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
                $nestedData['driver'] = $post->fname.' '.$post->lname;
                $nestedData['cat'] = $post->catname;
                $nestedData['scat'] = $post->scat;
                $nestedData['vno'] = $post->vehicle_no;
                $nestedData['vname'] = $post->vehicle_name;
                if($post->verification==1) {
                    $nestedData['Verification'] = '<span class="pt-2 pb-2 pl-2 pt-2 badge badge-success">Verified</span>';
                } else {
                    $nestedData['Verification'] = '<span class="pt-2 pb-2 pl-2 pt-2 badge badge-danger">Not Verified</span>';
                }
                $url = url('/admin/vehicle/manageStatus/'.$post->id);
                $status = '';
                if($post->status==1) {
                    $status="checked";
                }
                $nestedData['status'] = '<label class="switch">
                                                <input '.$status.' value="1" data-url="'.$url.'" data-id="'.$post->id.'" id="status_'.$post->id.'" type="checkbox" class="changeStatus" >
                                                <span class="slider round"></span>
                                            </label>';
                $nestedData['action'] = "<a href='".url('admin/vehicle/edit/'.$post->id)."' class='btn btn-info btn-sm ml-1'>".trans('lang.edit')."</a>";
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
    public function manageStatus(Request $request,$id){
        $obj = Vehicle::where('id',$id)->get()->first();
        $obj->status = $request->status;
        $obj->update();
    }
    public function edit(Request $request,$id){
        if(request()->ajax()){
            $rc_doc = '';
            $ins_doc = '';
            $pdoc = '';
            $tax_doc = '';
            $pub_doc = '';
            $pvdoc = '';
            
            if ($request->hasFile('rc_doc')) {
                $file = $request->file('rc_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $rc_doc = "rc_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$rc_doc);
            } 
            if ($request->hasFile('ins_doc')) {
                $file = $request->file('ins_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $ins_doc = "ins_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$ins_doc);
            }
            if ($request->hasFile('pdoc')) {
                $file = $request->file('pdoc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pdoc = "pdoc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pdoc);
            }
            if ($request->hasFile('tax_doc')) {
                $file = $request->file('tax_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $tax_doc = "tax_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$tax_doc);
            }
            if ($request->hasFile('pub_doc')) {
                $file = $request->file('pub_doc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pub_doc = "pub_doc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pub_doc);
            }
            if ($request->hasFile('pvdoc')) {
                $file = $request->file('pvdoc');
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $file->getRealPath();
                $file->getSize();
                $file->getMimeType();
                $destinationPath = 'public/uploads/documents';
                $pvdoc = "pvdoc_".time().'.'.$file->getClientOriginalExtension();
                $resp = $file->move($destinationPath,$pvdoc);
            }
            $obj = Vehicle::where('id',$id)->get()->first();
            $obj->driver_id = $request->driver;
            $obj->cat_id = $request->category;
            $obj->sub_cat_id = $request->sub_category;
            //$obj->vehicle_type_id = $request->driver;
            $obj->vehicle_no = $request->vehicle_number;
            $obj->vehicle_name = $request->vehicle_name;
            
            $obj->description = $request->description;
            $obj->length = $request->length;
            $obj->width = $request->width;
            $obj->height = $request->height;
            $obj->max_loading = $request->max_loading;

            $obj->work_location = $request->work_location;
            if($rc_doc) {
                $obj->rc_doc = $rc_doc;
            }
            if($ins_doc) {
                $obj->insurance_doc = $ins_doc;
            }
            $obj->insurance_valid_from = $request->ins_valid_from;
            $obj->insurance_valid_to = $request->ins_valid_to;
            if($pdoc){
                $obj->permit_doc = $pdoc;
            }
            $obj->permit_valid_from = $request->pv_valid_from;
            $obj->permit_valid_to = $request->pvvalidto;
            if($tax_doc) {
                $obj->tax_doc = $tax_doc;
            }
            $obj->tax_from = $request->tax_valid_from;
            $obj->tax_to = $request->tax_valid_to;
            if($pub_doc) {
                $obj->puc_doc = $pub_doc;
            }
            if($pvdoc) {
                $obj->PoliceverificationDoc = $pvdoc;
            }
            $obj->puc_from = $request->pub_valid_from;
            $obj->puc_to = $request->pub_valid_to;
            $obj->Verification = $request->verification;
            $obj->PermitValidfrom = $request->pvalid_from;
            $obj->PermitValidto = $request->pvalidto;
            $obj->update();
            echo json_encode(array('status'=>'true','message'=>'Vehicle Successfully Updated','reload'=>url('admin/vehicle')));
        } else {
            $data = array(
                "page_title" => __('lang.editvehicle'),
                "page_title2" => __('lang.editvehicle'),
                'drivers'=>Driver::where('status','1')->where('deleted_at','0')->get()->toArray(),
                'category'=>Category::where('status','1')->where('deleted_at','0')->get()->toArray(),
                'v'=>Vehicle::where('id',$id)->get()->first(),
                'subCat'=>SubCategory::where('cat_id',Vehicle::where('id',$id)->get()->first()->cat_id)->get()->toArray()
            );
            return view('admin.vehicle.edit',$data);
        }
        
    }
}
