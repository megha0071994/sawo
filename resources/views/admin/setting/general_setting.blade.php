@extends('admin.layout.app')
@section('title','General Setting')
@section('parent','Users')
@section('content')
   <section class="content">
      <div class="container-fluid">
           <div class="card">
              <div class="card-body">
               <!-- Nav tabs -->
				<ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="tab" href="#home">Basic Setting</a>
				  </li>
				   <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#contact_info_tab">Contact Information</a>
				  </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane container active pt-4" id="home">
				  	<form action="{{ url('admin/setting/save_text_setting') }}" class="setting_form">
				  	<div class="row">
				  		<div class="col-sm-12">
				  			<div class="form-group">
				  				<label>Site Title</label>
				  				{{ csrf_field() }}
				  				<input type="text" value="{{ get_text('site_title') }}" class="form-control" name="site_title" >
				  			</div>
				  		</div>
				  		<div class="col-sm-12">
				  			<div class="form-group">
				  				<label>Site Author</label>
				  				<input type="site_author" value="{{ get_text('site_author') }}" class="form-control" name="site_author">
				  			</div>
				  		</div>
				  		<div class="col-sm-12">
				  			<div class="form-group">
				  				<label>Meta Description</label>
				  				<textarea name="site_metddesc" class="form-control">{{ get_text('site_metddesc') }}</textarea>
				  			</div>
				  		</div>
				  		<div class="col-sm-12">
				  			<div class="form-group">
				  				<label>Meta Keyword</label>
				  				<textarea name="site_metakeyword" class="form-control">
				  					{{ get_text('site_metakeyword') }}
				  				</textarea>
				  			</div>
				  		</div>
				  		<div class="col-sm-12">
				  			<div class="form-group">
				  				<button class="btn btn-info">Save</button>
				  			</div>
				  		</div>
				  	</div>
				  </form>
				  </div>
				  <div class="tab-pane container fade pt-4" id="contact_info_tab">
				  	<form action="{{ url('admin/setting/save_text_setting') }}" class="setting_form">
					  	<div class="row">
					  		<div class="col-sm-12">
					  			<div class="form-group">
					  				<label>Enter Contact E-Mail</label>
					  				{{ csrf_field() }}
					  				<input type="email" value="{{ get_text('contact_email') }}" name="contact_email" class="form-control">
					  			</div>
					  		</div>
					  		<div class="col-sm-12">
					  			<div class="form-group">
					  				<label>Enter Contact Mobile No</label>
					  				<input type="text" value="{{ get_text('contact_mobile') }}" name="contact_mobile" class="form-control">
					  			</div>
					  		</div>
					  		<div class="col-sm-12">
					  			<div class="form-group">
					  				<label>Enter Contact Address</label>
					  				<textarea class="form-control" name="contact_address">{{ get_text('contact_address') }}</textarea>
					  			</div>
					  		</div>
					  		<div class="col-sm-12">
					  			<div class="form-group">
					  				<label>Enter Contact Time</label>
					  				<input type="text" value="{{ get_text('contact_time') }}" name="contact_time" class="form-control">
					  			</div>
					  		</div>
					  		<div class="col-sm-12">
					  			<div class="form-group">
					  				<button class="btn btn-info">Save</button>
					  			</div>
					  		</div>
					  	</div>
				  	</form>
				  </div>
				</div>

              </div>
              <!-- /.card-body -->
            </div>
      </div><!--/. container-fluid -->
    </section>
@endsection