<?php

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],'email'=>['ahmed@gmail.com','test@test.com']
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],'email'=>['mohamed@gmail.com','test@test.com','test@test.com']

    ],
    (object)[
        'id' => 3,
        'name' => 'mena',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],'email'=>[]
    ]
];


$table = " <table class='table table-hover  text-center '> 
       <thead>   <tr>" ;

     //loop on th == key//

foreach($users[0] AS $key=>$value){
    $table .= "<th scope='col'>" . $key  ."</th>";
}

 $table .=  "</tr> 
 </thead>  
 <tbody> " ;
  

//loop on value of arrey//
foreach($users AS $key=>$value){
    $table .= "<tr>" ;
foreach($value AS $key1=>$value1){
    $table .= "<td>";
    if(gettype($value1) != 'array' && gettype($value1) != 'object'){
      $table .= $value1 ;  
    }else{
        foreach($value1 AS $key2=>$value2){
            if($key2 == 'gender'){
                if($value2 == 'm')  //why don't use curly-practice//
                    $value2 = "male";
                else
                    $value2 = "fmale";
               } 
                $table .= $value2 . "  / ";
        }
             
        }
    
    
    $table .= "</td>";  
    }
    $table .= "</tr> ";
}

$table .= "</tbody> </table>" ;



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Table/one</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="container text-center">
      <h2>dynamic table using php</h2>
        <div class="row">
            <div class="col-12">
               <?php echo  $table; ?>   
            </div>
        </div>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>