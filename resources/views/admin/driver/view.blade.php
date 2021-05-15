@extends('admin.layout.app')
@section('content')
<section class="content">
	{{csrf_field()}}
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
              <a href="{{url('admin/driver/add')}}" class="btn btn-tool btn-primary">
                <i class="fas fa-plus"></i>&nbsp;&nbsp;{{__('lang.add_record')}}
              </a>
            </div>
		</div>
		<div class="card-body">
			<table class="table table-stripped dattable" data-url="{{ url('admin/getDriver') }}" data-json="{{ url('admin/getJSON/driver') }}">
				<thead>
					<tr>
						<th>#</th>
						<th>{{__('lang.profile_pic')}}</th>
						<th>{{__('lang.name')}}</th>
						<th>{{__('lang.mobile')}}</th>
						<th>{{__('lang.address')}}</th>
						<th>{{__('lang.status')}}</th>
						<th>{{__('lang.action')}}</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>{{__('lang.profile_pic')}}</th>
						<th>{{__('lang.name')}}</th>
						<th>{{__('lang.mobile')}}</th>
						<th>{{__('lang.address')}}</th>
						<th>{{__('lang.status')}}</th>
						<th>{{__('lang.action')}}</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>
@endsection