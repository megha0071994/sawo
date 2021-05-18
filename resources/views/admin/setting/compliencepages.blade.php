@extends('admin.layout.app')
@section('title','General Setting')
@section('parent','Users')
@section('content')
   <section class="content">
      <div class="container-fluid">
           <div class="card">
              <div class="card-body">
              <div class="table-responsive p-3">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#home">About</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu1">Privacy Policy</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu2">Term & Conditions</a>
			  </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane container active" id="home">
			  <form action="{{ url('admin/setting/save_text_setting') }}" class="setting_form">	
			  	<div class="form-group">
			  		<label>Enter About Description</label>
			  		{{ csrf_field() }}
			  		<textarea class="about_desc" name="about_desc">{{ get_text('about_desc') }}</textarea>
			  	</div>
			  	<div class="form-group">
			  		<button class="btn btn-info" type="submit">Save</button>
			  	</div>
			  </form>
			  </div>

			  <div class="tab-pane container fade" id="menu1">
			  	<form action="{{ url('admin/setting/save_text_setting') }}" class="setting_form">	
			  	<div class="form-group">
			  		<label>Enter Privacy Policy</label>
			  		{{ csrf_field() }}
			  		<textarea class="privacy_policy_desc" name="privacy_policy_desc">{{ get_text('privacy_policy_desc') }}</textarea>
			  	</div>
			  	<div class="form-group">
			  		<button class="btn btn-info" type="submit">Save</button>
			  	</div>
			  </form>
			  </div>
			  <div class="tab-pane container fade" id="menu2">
			  	<form action="{{ url('admin/setting/save_text_setting') }}" class="setting_form">	
			  	<div class="form-group">
			  		<label>Enter Term & Conditions</label>
			  		{{ csrf_field() }}
			  		<textarea class="termconditions_desc" name="termconditions_desc">{{ get_text('termconditions_desc') }}</textarea>
			  	</div>
			  	<div class="form-group">
			  		<button class="btn btn-info" type="submit">Save</button>
			  	</div>
			  	</form>
			  </div>
			</div>
		</div>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!--/. container-fluid -->
    </section>
@endsection