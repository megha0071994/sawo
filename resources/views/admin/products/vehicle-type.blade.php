@extends('admin.layout.app')
@section('content')
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
              <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add-modal">
                <i class="fas fa-plus"></i>&nbsp;&nbsp;{{__('lang.add_record')}}
              </button>
            </div>
		</div>
		<div class="card-body">
			<table class="table table-stripped dattable" data-url="{{ url('admin/getVehicleType') }}" data-json="{{ url('admin/getJSON/vehicle-type') }}">
				<thead>
					<tr>
						<th>#</th>
						<th>{{__('lang.name')}}</th>
						<th>{{__('lang.category')}}</th>
						<th>{{__('lang.sub_category')}}</th>
						<th>{{__('lang.status')}}</th>
						<th>{{__('lang.action')}}</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>{{__('lang.name')}}</th>
						<th>{{__('lang.category')}}</th>
						<th>{{__('lang.sub_category')}}</th>
						<th>{{__('lang.status')}}</th>
						<th>{{__('lang.action')}}</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	
	<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{__('lang.add')." ".__('lang.new')." ".__('lang.vehicle_type')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form data-model="#add-modal" action="{{ url('admin/vehicle-type/insert') }}" class="database_operations">
				<div class="form-group">
					{{csrf_field()}}
                    <label for="">{{__('lang.enter')." ".__('lang.vehicle_type')}}</label>
                    <input type="text" name="name" class="form-control" required placeholder="{{__('lang.enter')." ".__('lang.vehicle_type')}}">
                </div>
				<div class="form-group">
                    <label for="">{{__('lang.select')." ".__('lang.category')}}</label>
                    <select name="cat_id" class="form-control getRecordById" data-target="#sub_cat_id" data-url="get-sub-category-by-category/" required>
						<option value="">{{__('lang.select')." ".__('lang.category')}}</option>
						@foreach($categories as $category)
						<option value="{{$category['id']}}">{{$category['name']}}</option>
						@endforeach
					</select>
                </div>
				<div class="form-group">
                    <label for="">{{__('lang.select')." ".__('lang.sub_category')}}</label>
                    <select name="sub_cat_id" id="sub_cat_id" class="form-control" required>
						<option value="">{{__('lang.select')." ".__('lang.sub_category')}}</option>
					</select>
                </div>
				<div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{__('lang.add')}}</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

	  <div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{__('lang.edit')." ".__('lang.vehicle_type')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form data-model="#edit-modal" action="{{ url('admin/vehicle-type/edit') }}" class="database_operations">
				<div class="form-group">
					{{csrf_field()}}
                    <label for="">{{__('lang.enter')." ".__('lang.vehicle_type')}}</label>
					<input type="hidden" name="id" id="id">
                    <input type="text" name="name" id="edit_name" class="form-control" required placeholder="{{__('lang.enter')." ".__('lang.vehicle_type')}}">
                </div>
				<div class="form-group">
                    <label for="">{{__('lang.select')." ".__('lang.category')}}</label>
                    <select name="cat_id" id="cat_id" class="form-control getRecordById" data-target="#sub_cat_id1" data-url="get-sub-category-by-category/" required>
						<option value="">{{__('lang.select')." ".__('lang.category')}}</option>
						@foreach($categories as $category)
						<option value="{{$category['id']}}">{{$category['name']}}</option>
						@endforeach
					</select>
                </div>
				<div class="form-group">
                    <label for="">{{__('lang.select')." ".__('lang.sub_category')}}</label>
                    <select name="sub_cat_id" id="sub_cat_id1" class="form-control" required>
						<option value="">{{__('lang.select')." ".__('lang.sub_category')}}</option>
					</select>
                </div>
				<div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{__('lang.update')}}</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</section>
@endsection