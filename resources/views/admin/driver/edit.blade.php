@extends('admin.layout.app')
@section('content')
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
              <a href="{{url('admin/driver')}}" class="btn btn-tool btn-primary">
                <i class="fas fa-list"></i>&nbsp;&nbsp;{{__('lang.driver_list')}}
              </a>
            </div>
		</div>
		<div class="card-body">
			<form action="{{ url('admin/driver/edit') }}" class="database_operations">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$row->id}}" />
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.first_name')}}</label>
							<input placeholder="{{__('lang.first_name')}}" type="text" name="fname" class="form-control" value="{{$row->fname}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.last_name')}}</label>
							<input placeholder="{{__('lang.last_name')}}" type="text"name="lname" class="form-control" value="{{$row->lname}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.profile_pic')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="profile_pic" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->profile_pic && file_exists(public_path($row->profile_pic)))
										<img src="{{url('public').$row->profile_pic}}"  class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.mobile')}}</label>
							<input placeholder="{{__('lang.mobile')}}" type="text" name="mobile_no" class="form-control" value="{{$row->mobile_no}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.alt_mobile')}}</label>
							<input placeholder="{{__('lang.alt_mobile')}}" type="text"name="alt_mobile_no" class="form-control" value="{{$row->alt_mobile_no}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.franchise_mobile')}}</label>
							<input placeholder="{{__('lang.franchise_mobile')}}" type="text"name="franchise_mobile_no" class="form-control" value="{{$row->franchise_mobile_no}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.email')}}</label>
							<input placeholder="{{__('lang.email')}}" type="text" name="email" class="form-control" value="{{$row->email}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.address')}}</label>
							<input placeholder="{{__('lang.address')}}" type="text"name="address" class="form-control" value="{{$row->address}}">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.state')}}</label>
							<input placeholder="{{__('lang.state')}}" type="text"name="state" class="form-control" value="{{$row->state}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.adhaar_card_front')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="adhar_card_front" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->adhar_card_front && file_exists(public_path($row->adhar_card_front)))
										<img src="{{url('public').$row->adhar_card_front}}"  class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.adhaar_card_back')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="adhar_card_back" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->adhar_card_back && file_exists(public_path($row->adhar_card_back)))
										<img src="{{url('public').$row->adhar_card_back}}"  class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.bank_passbook')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="bank_passbook" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->bank_passbook && file_exists(public_path($row->bank_passbook)))
										<img src="{{url('public').$row->bank_passbook}}"  class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.license')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="license" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->license && file_exists(public_path($row->license)))
										<img src="{{url('public').$row->license}}"  class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>{{__('lang.police_verification')}}</label>
							<div class="row">
								<div class="col-sm-6">
									<input type="file" name="police_verification" accept="image/png, image/gif, image/jpeg">
								</div>
								<div class="col-sm-6">
									@if($row->police_verification && file_exists(public_path($row->police_verification)))
										<img src="{{url('public').$row->police_verification}}" class="img-fluid">
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<button class="btn btn-primary">{{__('lang.save')}}</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection