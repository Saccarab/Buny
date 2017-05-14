@extends('layouts.app')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
					 <br><br>
            </div>

            <?php
            foreach ($Travels as $value){
              echo '<strong>Driver ID: </strong>';
              echo $value->driver_id;
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
              echo $value->seatsAvailable;
              echo '<br>';
              echo '<strong>Starting Date & Time: </strong> ';
              echo $value->session_start;
              echo '<br><hr>';

            }
             ?>
        </div>
    </div>
</div>
@endsection
