@extends('layouts.app')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            </div>

            <?php
            foreach ($Feedback as $value){
              echo '<strong>Comment:</strong> <br>';
              echo $value->comment;
              echo '<br><br>';
              echo '<strong>Rating:</strong> <br>';
              echo $value->rating;
              echo '<br><hr>';
            }
             ?>
        </div>
    </div>
</div>
@endsection
