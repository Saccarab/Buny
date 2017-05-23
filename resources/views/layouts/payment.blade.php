@extends('layouts.app')

@section('content')
<script src=""{{asset('/../js/ckeditor.js')}}""></script>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
			<form  action="insert_payment" method="post">

                     <h3>Credit Card Number</h3>
                     <input type="text" name="credit_card_number" class="" style="width:300px;" />
        	 				 <br><br>

                      <h3>Name On Card</h3>
                      <input type="text" name="name_on_card" class="" style="width:300px;" />
             				 <br><br>

				 <h3>CVC</h3>
				 <input type="text" name="cvc" class="" style="width:300px;" />
			 <br><br>

     				<h3>Expiration Date</h3>

          	<select name="EMonth">
          	<option> - Month - </option>
          	<option value="January">January</option>
          	<option value="Febuary">Febuary</option>
          	<option value="March">March</option>
          	<option value="April">April</option>
          	<option value="May">May</option>
          	<option value="June">June</option>
          	<option value="July">July</option>
          	<option value="August">August</option>
          	<option value="September">September</option>
          	<option value="October">October</option>
          	<option value="November">November</option>
          	<option value="December">December</option>
          	</select>

          	<select name="EDay">
          	<option> - Day - </option>
          	<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
          	<option value="11">11</option>
          	<option value="12">12</option>
          	<option value="13">13</option>
          	<option value="14">14</option>
          	<option value="15">15</option>
          	<option value="16">16</option>
          	<option value="17">17</option>
          	<option value="18">18</option>
          	<option value="19">19</option>
          	<option value="20">20</option>
          	<option value="21">21</option>
          	<option value="22">22</option>
          	<option value="23">23</option>
          	<option value="24">24</option>
          	<option value="25">25</option>
          	<option value="26">26</option>
          	<option value="27">27</option>
          	<option value="28">28</option>
          	<option value="29">29</option>
          	<option value="30">30</option>
          	<option value="31">31</option>
          	</select>

          	<select name="EYear">
          	<option> - Year - </option>
          	<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>

          	</select>
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
