@extends('layouts.app')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            </div>

            <?php
            foreach ($Travels as $value){
              echo '<strong>Starting Point:</strong> ';
              echo $value->starting_point;
              echo '<br>';
              echo '<strong>Destination:</strong> ';
              echo $value->destination;
              echo '<br>';

            }
             ?>
        </div>
    </div>
</div>
@endsection
