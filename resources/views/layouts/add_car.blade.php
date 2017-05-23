@extends('layouts.app')

@section('content')
<style type="text/css">
.border{
  border-radius: 27px 27px 27px 27px;
-moz-border-radius: 27px 27px 27px 27px;
-webkit-border-radius: 27px 27px 27px 27px;
width:400px;
border: 4px double #087fff;
background-color:#FFFFFF;
background: rgba(0,0,0,.4);

}

select {
	width: auto;
	padding: 10px 10px;
	border: none;
	border-radius: 4px;
	background-color: #f1f1f1;
}

</style>
<script src=""{{asset('/../js/ckeditor.js')}}""></script>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
			<form  action="insert_car" method="post" class="" >

				 <h3>Plate</h3>
				 <input type="text" name="plate" class="" style="width:300px;" />
			 <br><br>

                  <h3>Color</h3>
                  <select name="color">
                    <option value=Black>Black</option>
     		             <option value=White>White</option>
     		              <option value=Red>Red</option>
     		               <option value=Blue>Blue</option>
     		                 <option value=Green>Green</option>
     		                  <option value=Gray>Gray</option>
                          <option value=Yellow>Yellow</option>
                          <option value=Orange>Orange</option>
                          <option value=Brown>Brown</option>
     	              </select>
       		<br><br>

									 <h3>Brand</h3>
									 <select name="brand">
										 <option value=BMW>BMW</option>
											<option value=Mercedes>Mercedes</option>
											 <option value=Renault>Renault</option>
												<option value=Chevrolet>Chevrolet</option>
													<option value=Honda>Honda</option>
													 <option value=Hyundai>Hyundai</option>
													 <option value=Volvo>Volvo</option>
													 <option value=Ford>Ford</option>
													 <option value=Toyota>Toyota</option>
													 <option value=Opel>Opel</option>
										 </select>

					 					<br><br>

             <h3>Model</h3>
             <input type="text" name="model" class="" style="width:300px;" />
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
