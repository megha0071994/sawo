@extends('admin.layout.app')
@section('content')
<section class="content">	  
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
              <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add-modal">
                <i class="fas fa-plus"></i>&nbsp;&nbsp;{{trans('add_record')}}
              </button>
            </div>
		</div>
		<div class="card-body">
			<table class="table table-stripped dattable" data-url="{{ url('admin/products/getCategory') }}" data-json="{{ url('admin/getJSON/category') }}">
				<thead>
					<tr>
						<th>#</th>
						<th>{{trans('name')}}</th>
						<th>{{trans('status')}}</th>
						<th>{{trans('action')}}</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>{{trans('name')}}</th>
						<th>{{trans('status')}}</th>
						<th>{{trans('action')}}</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	
	<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{trans('add')." ".trans('new')." ".trans('category')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form data-model="#add-modal" action="{{ url('admin/products/category/insert') }}" class="database_operations">
				<div class="form-group">
					{{csrf_field()}}
                    <label for="exampleInputEmail1">{{trans('enter')." ".trans('category')}}</label>
                    <input type="text" name="name" class="form-control" required placeholder="{{trans('enter')." ".trans('category')}}">
                </div>
				<div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{ trans('save') }}</button>
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
              <h4 class="modal-title">{{trans('edit')." ".trans('category')}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form data-model="#edit-modal" action="{{ url('admin/products/category/edit') }}" class="database_operations">
				<div class="form-group">
					{{csrf_field()}}
                    <label for="exampleInputEmail1">{{trans('enter')." ".trans('category')}}</label>
					<input type="hidden" name="id" id="id">
                    <input type="text" name="name" id="edit_name" class="form-control" required placeholder="{{trans('enter')." ".trans('category')}}">
                </div>
				<div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{trans('update')}}</button>
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