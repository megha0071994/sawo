<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Driver;
use Validator;

class DriverController extends Controller
{
	public function index()
	{
		$data = array(
			"page_title" => __('lang.driver_list'),
			"page_title2" => __('lang.driver_list')
		);
		return view('admin.driver.view',$data);
	}
	public function add()
	{
		$data = array(
			"page_title" => __('lang.add_driver'),
			"page_title2" => __('lang.add_driver')
		);
		return view('admin.driver.add',$data);
	}
	public function edit($driver_id=null)
	{
		$data = array(
			"page_title" => __('lang.edit_driver'),
			"page_title2" => __('lang.edit_driver')
		);
		if($driver_id){
			if($data['row'] = Driver::where('id',$driver_id)->get()->first())
			return view('admin.driver.edit',$data);
		}
		return redirect(url('admin/driver/'));
	}
    public function curd(Request $request,$type='')
    {
    	if(request()->ajax())
    	{
    		if($type=='insert')
    		{
    			$validator=Validator::make($request->all(),['fname'=>'required']);
    			if($validator->passes())
    			{
					$error_count = 0;
					$file_extns = array("jpg","jpeg","png","JPG","JPEG","PNG");
					if($_FILES['profile_pic']['name'] && !(in_array($request->profile_pic->extension(), $file_extns))){
						$message = __('lang.profile_pic_validation');
						$error_count++;
					} else if($_FILES['adhar_card_front']['name'] && !(in_array($request->adhar_card_front->extension(), $file_extns))){
						$message = __('lang.adhar_card_front_validation');
						$error_count++;
					} else if($_FILES['adhar_card_back']['name'] && !(in_array($request->adhar_card_back->extension(), $file_extns))){
						$message = __('lang.adhar_card_back_validation');
						$error_count++;
					} else if($_FILES['bank_passbook']['name'] && !(in_array($request->bank_passbook->extension(), $file_extns))){
						$message = __('lang.bank_passbook_validation');
						$error_count++;
					} else if($_FILES['license']['name'] && !(in_array($request->license->extension(), $file_extns))){
						$message = __('lang.license_validation');
						$error_count++;
					} else if($_FILES['police_verification']['name'] && !(in_array($request->police_verification->extension(), $file_extns))){
						$message = __('lang.police_verification_validation');
						$error_count++;
					}
					if($error_count){
						$arr=array('status'=>'false','message'=>$message,'reload'=>'0');
					} else {
						
						$profile_pic = "";
						if($_FILES['profile_pic']['name']){
							$profile_pic = date("YmdHis").'.'.$request->profile_pic->extension();
							$request->profile_pic->move(public_path('/assets/driver/profile-pic/'), $profile_pic);
							$profile_pic = '/assets/driver/profile-pic/' . $profile_pic;
						}
						
						$adhar_card_front = "";
						if($_FILES['adhar_card_front']['name']){
							$adhar_card_front = date("YmdHis").'_1.'.$request->adhar_card_front->extension();
							$request->adhar_card_front->move(public_path('/assets/driver/adhaar-card/'), $adhar_card_front);
							$adhar_card_front = '/assets/driver/adhaar-card/' . $adhar_card_front;
						}
						
						$adhar_card_back = "";
						if($_FILES['adhar_card_back']['name']){
							$adhar_card_back = date("YmdHis").'_2.'.$request->adhar_card_back->extension();
							$request->adhar_card_back->move(public_path('/assets/driver/adhaar-card/'), $adhar_card_back);
							$adhar_card_back = '/assets/driver/adhaar-card/' . $adhar_card_back;
						}
						
						$bank_passbook = "";
						if($_FILES['bank_passbook']['name']){
							$bank_passbook = date("YmdHis").'.'.$request->bank_passbook->extension();
							$request->bank_passbook->move(public_path('/assets/driver/bank-passbook/'), $bank_passbook);
							$bank_passbook = '/assets/driver/bank-passbook/' . $bank_passbook;
						}
						
						$license = "";
						if($_FILES['license']['name']){
							$license = date("YmdHis").'.'.$request->license->extension();
							$request->license->move(public_path('/assets/driver/license/'), $license);
							$license = '/assets/driver/license/' . $license;
						}
						
						$police_verification = "";
						if($_FILES['police_verification']['name']){
							$police_verification = date("YmdHis").'.'.$request->police_verification->extension();
							$request->police_verification->move(public_path('/assets/driver/police-verification/'), $police_verification);
							$police_verification = '/assets/driver/police-verification/' . $police_verification;
						}
						
						$driver = new Driver();
						$driver->fname=$request->fname;
						$driver->lname=$request->lname;
						$driver->mobile_no=$request->mobile_no;
						$driver->alt_mobile_no=$request->alt_mobile_no;
						$driver->franchise_mobile_no=$request->franchise_mobile_no;
						$driver->email=$request->email;
						$driver->address=$request->address;
						$driver->state=$request->state;
						$driver->profile_pic=$profile_pic;
						$driver->adhar_card_front=$adhar_card_front;
						$driver->adhar_card_back=$adhar_card_back;
						$driver->bank_passbook=$bank_passbook;
						$driver->license=$license;
						$driver->police_verification=$police_verification;
						$driver->status=1;
						$driver->deleted_at=0;
						$driver->save();	
						$arr=array('status'=>'true','message'=>__('lang.driver_successfully_added'),'reload'=>'0');
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
    			$validator=Validator::make($request->all(),['fname'=>'required']);
    			if($validator->passes())
    			{
					$error_count = 0;
					$file_extns = array("jpg","jpeg","png","JPG","JPEG","PNG");
					if($_FILES['profile_pic']['name'] && !(in_array($request->profile_pic->extension(), $file_extns))){
						$message = __('lang.profile_pic_validation');
						$error_count++;
					} else if($_FILES['adhar_card_front']['name'] && !(in_array($request->adhar_card_front->extension(), $file_extns))){
						$message = __('lang.adhar_card_front_validation');
						$error_count++;
					} else if($_FILES['adhar_card_back']['name'] && !(in_array($request->adhar_card_back->extension(), $file_extns))){
						$message = __('lang.adhar_card_back_validation');
						$error_count++;
					} else if($_FILES['bank_passbook']['name'] && !(in_array($request->bank_passbook->extension(), $file_extns))){
						$message = __('lang.bank_passbook_validation');
						$error_count++;
					} else if($_FILES['license']['name'] && !(in_array($request->license->extension(), $file_extns))){
						$message = __('lang.license_validation');
						$error_count++;
					} else if($_FILES['police_verification']['name'] && !(in_array($request->police_verification->extension(), $file_extns))){
						$message = __('lang.police_verification_validation');
						$error_count++;
					}
					if($error_count){
						$arr=array('status'=>'false','message'=>$message,'reload'=>'0');
					} else {
						
						$driver = Driver::where('id',$request->id)->get()->first();
						
						$profile_pic = $driver->profile_pic;
						if($_FILES['profile_pic']['name']){
							$profile_pic = date("YmdHis").'.'.$request->profile_pic->extension();
							$request->profile_pic->move(public_path('/assets/driver/profile-pic/'), $profile_pic);
							$profile_pic = '/assets/driver/profile-pic/' . $profile_pic;
							
							if(file_exists(public_path($driver->profile_pic))){
								unlink(public_path($driver->profile_pic));
							}
						}
						
						$adhar_card_front = $driver->adhar_card_front;
						if($_FILES['adhar_card_front']['name']){
							$adhar_card_front = date("YmdHis").'_1.'.$request->adhar_card_front->extension();
							$request->adhar_card_front->move(public_path('/assets/driver/adhaar-card/'), $adhar_card_front);
							$adhar_card_front = '/assets/driver/adhaar-card/' . $adhar_card_front;
						}
						
						$adhar_card_back = $driver->adhar_card_back;
						if($_FILES['adhar_card_back']['name']){
							$adhar_card_back = date("YmdHis").'_2.'.$request->adhar_card_back->extension();
							$request->adhar_card_back->move(public_path('/assets/driver/adhaar-card/'), $adhar_card_back);
							$adhar_card_back = '/assets/driver/adhaar-card/' . $adhar_card_back;
						}
						
						$bank_passbook = $driver->bank_passbook;
						if($_FILES['bank_passbook']['name']){
							$bank_passbook = date("YmdHis").'.'.$request->bank_passbook->extension();
							$request->bank_passbook->move(public_path('/assets/driver/bank-passbook/'), $bank_passbook);
							$bank_passbook = '/assets/driver/bank-passbook/' . $bank_passbook;
						}
						
						$license = $driver->license;
						if($_FILES['license']['name']){
							$license = date("YmdHis").'.'.$request->license->extension();
							$request->license->move(public_path('/assets/driver/license/'), $license);
							$license = '/assets/driver/license/' . $license;
						}
						
						$police_verification = $driver->police_verification;
						if($_FILES['police_verification']['name']){
							$police_verification = date("YmdHis").'.'.$request->police_verification->extension();
							$request->police_verification->move(public_path('/assets/driver/police-verification/'), $police_verification);
							$police_verification = '/assets/driver/police-verification/' . $police_verification;
						}
						
						$driver->fname=$request->fname;
						$driver->lname=$request->lname;
						$driver->mobile_no=$request->mobile_no;
						$driver->alt_mobile_no=$request->alt_mobile_no;
						$driver->franchise_mobile_no=$request->franchise_mobile_no;
						$driver->email=$request->email;
						$driver->address=$request->address;
						$driver->state=$request->state;
						$driver->profile_pic=$profile_pic;
						$driver->adhar_card_front=$adhar_card_front;
						$driver->adhar_card_back=$adhar_card_back;
						$driver->bank_passbook=$bank_passbook;
						$driver->license=$license;
						$driver->police_verification=$police_verification;
						$driver->status=1;
						$driver->deleted_at=0;
						$driver->update();	
						$reload = url('admin/driver/edit/').'/'.$driver->id;
						$arr=array('status'=>'true','message'=>__('lang.driver_successfully_updated'),'reload'=>$reload);
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
    			$driver = Driver::where('id',$request->id)->get()->first();
				$driver->deleted_at=1;
				$driver->update();
				$arr=array('status'=>'true','message'=>__('lang.driver_successfully_deleted'),'reload'=>'0');
				echo json_encode($arr);
    		}
    		else 
    		{
    			$driver = Driver::where('id',$type)->get()->first();
				$driver->status=$request->status;
				$driver->update();
				$arr=array('status'=>'true','message'=>__('lang.status_changed_successfully'),'reload'=>'0');
				echo json_encode($arr);	
    		}
    	}
    }
	
    public function getDriver(Request $request){
        $type=2;
        $columns = array(
            0 =>'id',
            1 =>'profile_pic',
            2 =>'name',
            3 => 'mobile_no',
            4 => 'address',
            5 => 'status',
            6 => 'action',
        );

        $totalData = Driver::where('deleted_at','0')->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
        $posts = Driver::where('deleted_at','0')->offset($start)
                ->orderBy('id','desc')
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        }
        else {
        $search = $request->input('search.value');

        $posts =  Driver::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
                    ->orWhere('name', 'LIKE',"%{$search}%")
                    ->orderBy('id','desc')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
        $totalFiltered = Driver::where('deleted_at','0')->where('id','LIKE',"%{$search}%")
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
				$profile_pic = " - ";
				if($post->profile_pic && file_exists(public_path($post->profile_pic))){
					$profile_pic = '<img src="'.url('public').$post->profile_pic.'" height="100">';
				}
                $nestedData['profile_pic'] = $profile_pic;
                $nestedData['name'] = $post->fname ." ". $post->lname;
                $nestedData['mobile_no'] = $post->mobile_no;
                $nestedData['address'] = $post->address;
                $url = url('/admin/driver/'.$post->id);
                $status = '';
                if($post->status==1) {
                    $status="checked";
                }
                $nestedData['status'] = '<label class="switch">
                                                <input '.$status.' value="1" data-url="'.$url.'" data-id="'.$post->id.'" id="status_'.$post->id.'" type="checkbox" class="changeStatus" >
                                                <span class="slider round"></span>
                                            </label>';
                $nestedData['action'] = "<a href='".url('admin/driver/edit').'/'.$post->id."' class='btn btn-info btn-sm ml-1'>".__('lang.edit')."</a><a href='javascript:;' class='btn btn-danger btn-sm ml-1 delete_element' data-url='".url('admin/driver/delete')."' data-id='".$post->id."'>".__('lang.delete')."</a>";
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
