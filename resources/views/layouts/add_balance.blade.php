@extends('layouts.app')

@section('content')




<script src=""{{asset('/../js/ckeditor.js')}}""></script>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

			<form  action="insert_balance" method="post">
				<h3>Balance Amount</h3><br>
        <input type="number" name="balance" style="width:100px;"/>

				<br>


        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <p>

						<br><br>
            <input type="submit" value="Submit">
        </p>
      </form>
            </div>
        </div>
    </div>
</div>
@endsection
