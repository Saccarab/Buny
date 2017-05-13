@extends('layouts.app')

@section('content')
<script src=""{{asset('/../js/ckeditor.js')}}""></script>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
			<form  action="insert_travel" method="post">
                  <h3>Starting Point</h3>
             <input type="text" name="title" class="" style="width:300px;" />
       		<br><br>

             <h3>Destination</h3>
             <input type="text" name="editor1" class="" style="width:300px;" />

				 <br><br>
				 <h3>Price</h3>
				 	<input type="number" name="price" class="" style="width:80px;" />

				<br><br>
  				<h3>Seats</h3>
  				<input type="number" name="seats" class="" style="width:80px;" />

				 <br><br><br><br>
             <script>
                 CKEDITOR.replace( 'editor1' );
             </script>
             <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
             <p>
                 <input type="submit" value="Submit">
             </p>
         </form>
            </div>
        </div>
    </div>
</div>
@endsection
