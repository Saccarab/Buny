@extends('layouts.app')

@section('content')


<div id="page-content-wrapper">
    <div class="container-fluid">

 <br>
   <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a><br>
   <br>
        <div class="row">
            <div class="col-lg-12">

            </div>

            <?php
            foreach ($profile as $value){
                ?>
                <div style="border: 1px solid black">

              <?php
              echo '<strong>User Name: </strong>';
              echo $value->name;
				  echo ' ';
				  echo $value->surname;
				  echo '<strong><br>Balance:</strong> ';
				  echo $value->balance;
              echo '<strong><br>College:</strong> ';
              if($value->college_id=='1'){
                echo 'Bahcesehir University';
              }
              else if($value->college_id=='2'){
                echo 'Bilgi University';
              }
              else if($value->college_id=='3'){
                echo 'Isik University';
              }
              else if($value->college_id=='4'){
                echo 'Istanbul Technical University';
              }
              else if($value->college_id=='5'){
                echo 'Koc University';
              }
              else if($value->college_id=='6'){
                echo 'MEF University';
              }
              else if($value->college_id=='7'){
                echo 'Ozyegin University';
              }
              else if($value->college_id=='8'){
                echo 'Sabanci University';
              }
              else if($value->college_id=='9'){
                echo 'Yeditepe University';
              }
              else if($value->college_id=='10'){
                echo 'Bahcesehir University';
              }
              else{}
              echo '<br>';
              echo '<strong>Date of Birth</strong> ';
              echo $value->date_of_birth;
              echo '<br>';
              echo '<strong>Student id: </strong> ';
              echo $value->student_id;

				  echo '<br>';
				  echo '<strong>Rating:</strong> ';
				  if($value->session_completed == 0){
					  $result=0;
				  }
				  else{
				  $result = $value->rating/$value->session_completed;
			  	  }
				  echo $result;

              echo '<br>';
              echo '<strong>Gender </strong> ';
              echo $value->gender;
              echo '<br>';
            ?>
  </div>

            <?php
            }

             ?>



        </div>
    </div>
</div>
@endsection
