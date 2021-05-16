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
        <form action="{{ url('admin/vehicle/add') }}" class="database_operations">
			<div class="row">
                <div class="col-sm-4">
                   <div class="form-group">
                    {{ csrf_field() }}
                       <label>{{  __('lang.SelectDriver') }}</label>
                       <select name="driver" required class="form-control">
                           <option value="">{{  __('lang.SelectDriver') }}</option>
                           @foreach($drivers as $driver)
                            <option value="{{ $driver['id'] }}">{{ $driver['fname'].' '.$driver['lname'] }}</option>
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
                            <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                           @endforeach
                       </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                       <label>{{  __('lang.SelectSubCategory') }}</label>
                       <select id="sub_cat_id1" name="sub_category" required class="form-control">
                           <option value="">{{  __('lang.SelectSubCategory') }}</option>
                       </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>{{  __('lang.EnterDescription') }}</label>
                        <textarea name="description" required class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterLength') }}</label>
                        <input type="text" name="length" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterWidth') }}</label>
                        <input type="text" name="width" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterHeight') }}</label>
                        <input type="text" name="height" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{  __('lang.EnterMaxLoading') }}</label>
                        <input type="text" name="max_loading" required class="form-control">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.VehicleNumber') }}</label>
                        <input placeholder="{{  __('lang.VehicleNumber') }}" name="vehicle_number" required type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.VehicleName') }}</label>
                        <input placeholder="{{  __('lang.VehicleName') }}" name="vehicle_name" required type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.WorkLocation') }}</label>
                        <input placeholder="{{  __('lang.WorkLocation') }}" name="work_location" required type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.RCDoc') }}</label>
                        <input accept="image/png, image/gif, image/jpeg" name="rc_doc"  required type="file" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceDoc') }}</label>
                        <input  type="file" accept="image/png, image/gif, image/jpeg" required  name="ins_doc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceValidfrom') }}</label>
                        <input type="date" name="ins_valid_from" required  class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.InsuranceValidto') }}</label>
                        <input  type="date" name="ins_valid_to" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PermitDoc') }}</label>
                        <input type="file" required accept="image/png, image/gif, image/jpeg"  name="pdoc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PermitValidfrom') }}</label>
                        <input  type="date" required name="pvalid_from" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxValidto') }}Permit Valid to</label>
                        <input name="pvalidto" required type="date" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxDoc') }}</label>
                        <input type="file" accept="image/png, image/gif, image/jpeg" required  name="tax_doc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxValidfrom') }}</label>
                        <input name="tax_valid_from" type="date" required class="form-control">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.TaxValidto') }} </label>
                        <input  name="tax_valid_to" required type="date" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCDoc') }}</label>
                        <input type="file" required accept="image/png, image/gif, image/jpeg"  name="pub_doc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCValidfrom') }}</label>
                        <input  name="pub_valid_from" type="date" required class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PUCValidto') }} </label>
                        <input name="pub_valid_to"  type="date" required class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationDoc') }}</label>
                        <input type="file" required accept="image/png, image/gif, image/jpeg"  name="pvdoc" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationValidfrom') }}</label>
                        <input  type="date" required name="pv_valid_from" class="form-control">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.PoliceverificationValidto') }} </label>
                        <input  type="date" required name="pvvalidto" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{  __('lang.Verification') }}</label>
                        <select name="verification"  class="form-control" required>
                            <option value="0">{{  __('lang.NotVerified') }}</option>
                            <option value="1">{{  __('lang.Verified') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-info">{{  __('lang.add') }}</button>
                </div>
            </div>
            </form>            
		</div>
	</div>
	
	
</section>
@endsection