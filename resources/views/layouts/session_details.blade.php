@extends('layouts.app')

@section('content')


<style type="text/css">
.button {
  display: inline-block;
  border-radius: 2px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
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
</style>

<div id="page-content-wrapper">
    <div class="container-fluid">
      <h2>Details</h2>
 <br>
   <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a><br>
   <br>
        <div class="row">
            <div class="col-lg-12">
            </div>

            <?php
            foreach ($Travels as $value){
                ?>
                <div style="border: 1px solid black">

              <?php
              echo '<strong>Driver Name: </strong>';
              echo $value->name;
				  echo ' ';
				  echo $value->surname;
              echo '<br>';
              echo '<strong>Driver ID:</strong> ';
              echo $value->driver_id;
				  echo '<strong> (You need this ID to add comments!)</strong> ';
              echo '<strong><br>Starting Point:</strong> ';
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
              echo '<strong>Destination:</strong> ';
              echo $value->destination;
              echo '<br>';
              echo '<strong>Price: </strong> ';
              echo $value->price;
              echo ' ₺';
              echo '<br>';
              echo '<strong>Seats Available: </strong> ';
              echo $value->seatsAvailable-1;
              echo '<br>';
              echo '<strong>Starting Date & Time: </strong> ';
              echo $value->session_start;
				  echo '<br>';
				  echo '<strong>Your car: </strong> ';
              echo $value->color_name;
				  echo ' ';
				  echo $value->brand_name;
				  echo ' ';
				  echo $value->model_name;

            ?>
  </div>

            <?php

            }

             ?>



        </div>
    </div>
</div>
@endsection
