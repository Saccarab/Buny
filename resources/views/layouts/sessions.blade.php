@extends('layouts.app')

@section('content')


<style type="text/css">
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #087fff;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 9px;
  width: 140px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
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
					 <br><br>
            </div>
<br><br>
            <?php
            foreach ($Travels as $value){
                ?>
                <div class="border" style="background-color:#FFFFFF; background: rgba(0,0,0,.4);color:#e6e6e6;">

              <?php
              echo '<strong>Driver Name: </strong>';
              echo $value->name;
				  echo ' ';
				  echo $value->surname;
				  echo '<br>';
				  echo '<strong>Driver Rating: </strong>';
				  if($value->session_completed == 0){
					  $result=0;
				  }
				  else{
					  $result = $value->rating/$value->session_completed;

			  	  }
				  echo $result;
				  echo '<br>';
				  echo '<strong>Feedback Count: </strong>';
				  echo $value->session_completed;
              echo '<strong><br> Starting Point:</strong> ';
              if($value->starting_point=='1'){
                echo 'Bahcesehir University';
              }
              else if($value->starting_point=='2'){
                echo 'Bilgi University';
              }
              else if($value->starting_point=='3'){
                echo 'Isik University';
              }
              else if($value->starting_point=='4'){
                echo 'Istanbul Technical University';
              }
              else if($value->starting_point=='5'){
                echo 'Koc University';
              }
              else if($value->starting_point=='6'){
                echo 'MEF University';
              }
              else if($value->starting_point=='7'){
                echo 'Ozyegin University';
              }
              else if($value->starting_point=='8'){
                echo 'Sabanci University';
              }
              else if($value->starting_point=='9'){
                echo 'Yeditepe University';
              }
              else if($value->starting_point=='10'){
                echo 'Bahcesehir University';
              }
              else{}
              echo '<br>';
              echo '<strong> Destination:</strong> ';
              echo $value->destination;
              echo '<br>';
              echo '<strong> Price: </strong> ';
              echo $value->price;
              echo ' ₺';
              echo '<br>';
              echo '<strong> Seats Available: </strong> ';
              echo $value->seatsAvailable;
              echo '<br>';
              echo '<strong> Starting Date & Time: </strong> ';
              echo $value->session_start;
              echo '<br>';
            ?>
            <a href="session_details&<?php echo $value->id; ?>">
              <button class="button" style="vertical-align:middle"><span>Join </span></button>
  </div>
</a>



            <?php

            }

             ?>



        </div>
    </div>
</div>
@endsection
