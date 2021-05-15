@extends('admin.layout.app')
@section('content')
<section class="content">	  
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
            </div>
		</div>
		<div class="card-body">
        <form action="{{ url('admin/vehicle/edit/'.$v->id) }}" class="database_operations">
			<div class="row">
                <div class="col-sm-4">
                   <div class="form-group">
                    {{ csrf_field() }}
                       <label>{{  __('lang.SelectDriver') }}</label>
                       <select name="driver" required class="form-control">
                           <option value="">{{  __('lang.SelectDriver') }}</option>
                           @foreach($drivers as $driver)
                            <option @if($v->driver_id==$driver['id']) selected @endif value="{{ $driver['id'] }}">{{ $driver['fname'].' '.$driver['lname'] }}</option>
                           @endforeach
                       </select>
                   </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                       <label>{{  __('lang.SelectCategory') }}</label>
                       <select name="category" required class="form-control getRecordById" data-target="#sub_cat_id1" data-url="{{ url('admin/vehicle/subcat/') }}/">
                           <option value="">{{  __('lang.SelectCategory') }}</option>
                           @foreach($category as $cat)
                            <option @if($v->cat_id==$cat['id']) selected @endif value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                           @endforeach
                       </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                       <label>{{  __('lang.SelectSubCategory') }}</label>
                       <select id="sub_cat_id1" name="sub_category" required class="form-control">
                           <option value="">{{  __('lang.SelectSubCategory') }}</option>
                           @foreach($subCat as $sc)
                            <option @if($v->sub_cat_id==$sc['id']) selected @endif value="{{ $sc['id'] }}">{{ $sc['name'] }}</option>
                           @endforeach
                       </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>{{  __('lang.EnterDescription') }}</label>
                        <textarea name="description" required class="form-control">{{ $v->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterLength') }}</label>
                        <input type="text" name="length" value="{{ $v->length }}" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterWidth') }}</label>
                        <input type="text" name="width" value="{{ $v->width }}" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterHeight') }}</label>
                        <input type="text" name="height" value="{{ $v->height }}" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterMaxLoading') }}</label>
                        <input type="text" name="max_loading" value="{{ $v->max_loading }}" required class="form-control">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.VehicleNumber') }}</label>
                        <input placeholder="{{  __('lang.VehicleNumber') }}" value="{{ $v->vehicle_no }}" name="vehicle_number" required type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.VehicleName') }}</label>
                        <input placeholder="{{  __('lang.VehicleName') }}" value="{{ $v->vehicle_name }}" name="vehicle_name" required type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.WorkLocation') }}</label>
                        <input placeholder="{{  __('lang.WorkLocation') }}" value="{{ $v->work_location }}" name="work_location" required type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.RCDoc') }}</label>
						<div>
							<input accept="image/png, image/gif, image/jpeg" name="rc_doc"  type="file">
						</div>
                    </div>
                </div>
			</div>
			<div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceDoc') }}</label>
						<div>
							<input type="file" accept="image/png, image/gif, image/jpeg"  name="ins_doc">
						</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceValidfrom') }}</label>
                        <input type="date" value="{{ $v->insurance_valid_from }}" required name="ins_valid_from"  class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceValidto') }}</label>
                        <input  type="date" value="{{ $v->insurance_valid_to }}" required name="ins_valid_to" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PermitDoc') }}</label>
						<div>
							<input type="file" accept="image/png, image/gif, image/jpeg" name="pdoc">
						</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PermitValidfrom') }}</label>
                        <input  type="date" value="{{ $v->PermitValidfrom }}" required name="pvalid_from" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PermitValidto') }}</label>
                        <input name="pvalidto" value="{{ $v->PermitValidto }}" required  type="date" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxDoc') }}</label>
						<div>
							<input type="file" accept="image/png, image/gif, image/jpeg" name="tax_doc">
						</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxValidfrom') }}</label>
                        <input name="tax_valid_from" value="{{ $v->tax_from }}" required type="date" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxValidto') }} </label>
                        <input  name="tax_valid_to" value="{{ $v->tax_to }}" required type="date" class="form-control">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCDoc') }}</label>
						<div>
							<input type="file" accept="image/png, image/gif, image/jpeg" name="pub_doc">
						</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCValidfrom') }}</label>
                        <input  name="pub_valid_from" value="{{ $v->puc_from }}" required type="date" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCValidto') }} </label>
                        <input name="pub_valid_to" value="{{ $v->puc_to }}" required  type="date" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationDoc') }}</label>
						<div>
							<input type="file" accept="image/png, image/gif, image/jpeg" name="pvdoc">
						</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationValidfrom') }}</label>
                        <input  type="date" value="{{ $v->permit_valid_from }}" required name="pv_valid_from" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationValidto') }} </label>
                        <input value="{{ $v->permit_valid_to }}" required  type="date" name="pvvalidto" class="form-control">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.Verification') }}</label>
                        <select name="verification"  class="form-control" required>
                            <option @if($v->verification==0) selected @endif value="0">{{  __('lang.NotVerified') }}</option>
                            <option @if($v->verification==1) selected @endif value="1">{{  __('lang.Verified') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-info">{{  __('lang.update') }}</button>
                </div>
            </div>
            </form>            
		</div>
	</div>
	
	
</section>
@endsection