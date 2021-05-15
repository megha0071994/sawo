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
			<table class="table table-stripped basic-datatable" >
				<thead>
					<tr>
						<th>#</th>
						<th>{{ __('lang.name') }}</th>
						<th>{{ __('lang.email') }}</th>
						<th>{{ __('lang.mobileNo') }}</th>
                        <th>{{ __('lang.comment') }}</th>
					</tr>
				</thead>
				<tbody>
				@foreach($requests as $key => $req)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $req['name'] }}</td>
                    <td>{{ $req['email'] }}</td>
                    <td>{{ $req['mobileNo'] }}</td>
                    <td>{{ $req['comment'] }}</td>
                </tr>
                @endforeach
				</tbody>
				<tfoot>
                    <tr>
						<th>#</th>
						<th>{{ __('lang.name') }}</th>
						<th>{{ __('lang.email') }}</th>
						<th>{{ __('lang.mobileNo') }}</th>
                        <th>{{ __('lang.comment') }}</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>
@endsection