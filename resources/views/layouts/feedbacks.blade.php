@extends('layouts.app')

@section('content')
<style type="text/css">
.border{
 border-radius: 27px 27px 27px 27px;
-moz-border-radius: 27px 27px 27px 27px;
-webkit-border-radius: 27px 27px 27px 27px;
border: 4px double #087fff;

}

</style>
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            </div>


            <?php
            foreach ($Feedback as $value){
              ?>
              <br><br><div class="border" style="background-color:#FFFFFF; background: rgba(0,0,0,.4);color:#e6e6e6;">
                <?php
				  echo '<br>';
              echo '<strong> Driver Name:</strong> ';
              echo $value->name;
              echo ' ';
              echo $value->surname;
              echo '<br>' ;
				  echo '   ';
              echo '<strong>   Comment:</strong> ';
              echo $value->comment;
              echo '<br>';
              echo '<strong>   Rating:</strong> ';
              echo $value->rating;
              echo '<br><br>';
              ?>
            </div>
          <?php  }?>


        </div>
    </div>
</div>
@endsection
