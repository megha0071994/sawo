@extends('admin.layout.app')
@section('content')
<section class="content">	  
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">{{$page_title2}}</h3>
			<div class="card-tools">
              <button type="button" class="btn btn-tool btn-primary" data-toggle="modal" data-target="#add-modal">
                <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Record
              </button>
            </div>
		</div>
		<div class="card-body">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th>First Column</th>
						<th>Second Column</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Data - 1</td>
						<td>Data - 2</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>First Column</th>
						<th>Second Column</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	
	<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
				<div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
				<div class="form-group text-right">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
            <div class="modal-footer text-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</section>
@endsection