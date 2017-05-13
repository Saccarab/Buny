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
                  <select name=title>
                    <option value="4">Istanbul Technical University</option>
     		             <option value="1">Bahcesehir University</option>
     		              <option value="2">Bilgi University</option>
     		               <option value="3">Isik University</option>
     		                 <option value="5">Koc University</option>
     		                  <option value="6">MEF University</option>
                          <option value="7">Ozyegin University</option>
                          <option value="8">Sabanci University</option>
                          <option value="9">Yeditepe University</option>
                          <option value="10">Yildiz Technical University</option>
     	              </select>
       		<br><br>

             <h3>Destination</h3>
             <input type="text" name="editor1" class="" style="width:300px;" />

				 <br><br>
				 <h3>Price</h3>
				 	<input type="number" name="price" class="" style="width:80px;" />

				<br><br>
  				<h3>Seats</h3>
  				<input type="number" name="seats" class="" style="width:80px;" />

          <br><br>
    				<h3>Date</h3>

            <input type="datetime-local" name="date">




				 <br><br>

             <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
             <p>
                 <input type="submit" value="Submit">
                 <input type="reset" value="Reset">
             </p>
         </form>
            </div>
        </div>
    </div>
</div>
@endsection
