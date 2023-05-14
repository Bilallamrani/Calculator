<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<?php $bg_image = "/TheDream/image/img6.jpg";?>

<body style="background-image: url(<?php echo $bg_image; ?>); background-size:cover; background-repeat: no-repeat">

<?php

require "function.php";
$num = "";
$_SESSION['value'] = '';
$operator =['+','-','*','/','%'];
$op = '';


 if(isset($_POST['num'])){

    $num = $_POST['result'].$_POST['num'];
    $_SESSION['value'] = $num;
 }
 

if(isset($_POST['egale'])){
    $_SESSION['value'] = $_POST['result'];

    $numbers = str_split($_SESSION['value'],1);

    foreach($numbers as $all_numbers){

        if(in_array($all_numbers, $operator)){

            $op = $all_numbers;
        }
    }
    $value = explode("$op", $_SESSION['value']);

    if(count($value) == 2){
    $value1 = floatval($value[0]);
    $value2 = floatval($value[1]);
    $num = calculator($value1,$value2,$op);
    // $_SESSION['last_calculation'] = $num;

    }if(isset($_POST['clear'])){
        $num = "";
        $_SESSION['value'] = '';
        // unset($_SESSION['last_calculation']);
    }
}

  
 ?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand mx-3" href="#">Calculator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="#">New Account</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Sign in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row pt-4">
        <div class = "col-md-5 col-sm-9">
            <?php $image7 = "/TheDream/image/img7.webp";?>
                <img src= "<?php echo $image7; ?>" alt="image" class="img-fluid">
        </div>
        <div class="col-md-7 col-sm-6 pt-5">
        <form action="" method="POST" style="background-image: url('/TheDream/image/img5.jpg');">
        <a href="#" class="btn btn-primary btn-lg me-4 m-1 rounded-5">Calculator</a>
        <a href="#" class="btn btn-outline-primary btn-lg me-4 m-1 rounded-5" style="color: white;">Currency Converter</a>
            <div class="div-result"> 
                <input  name="result" value="<?=$num?>" type="text">
            </div>
            <br>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="clear" value="C">C</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="parent" value="()">()</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="%">%</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="/">÷</button>
            <br>
            <button style="cursor:pointer;" type="submit" name="num" value="7">7</button>
            <button style="cursor:pointer;" type="submit" name="num" value="8">8</button>
            <button style="cursor:pointer;" type="submit" name="num" value="9">9</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="*">x</button>
            <br>
            <button style="cursor:pointer;" type="submit" name="num" value="4">4</button>
            <button style="cursor:pointer;" type="submit" name="num" value="5">5</button>
            <button style="cursor:pointer;" type="submit" name="num" value="6">6</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="-">-</button>
            <br>
            <button style="cursor:pointer;" type="submit" name="num" value="1">1</button>
            <button style="cursor:pointer;" type="submit" name="num" value="2">2</button>
            <button style="cursor:pointer;" type="submit" name="num" value="3">3</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="+">+</button>
            </br>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="num" value="+/-">+/-</button>
            <button style="cursor:pointer;" type="submit" name="num" value="0">0</button>
            <button style="cursor:pointer;" type="submit" name="num" value=".">.</button>
            <button style="cursor:pointer; background-color: lightblue;" type="submit" name="egale" value="=">=</button>
        </form>
      </div>
   </div>
</div>
 
<?php

echo '<style>


.navbar-brand {
    font-size: 35px;
    font-weight: bold;
    color:white;
}

.navbar-nav .nav-item .nav-link {
    font-size: 20px;
    color:white;
}  

form {
    display: flex;
    flex-wrap: wrap;
    width: 390px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
  }


  .div-result {
    width: 100%;
    text-align: right;
    padding-right: 25px;
    padding: 10px;
    background-color: lightblue;
    border-radius: 5px;
  }

  input[name="result"] {
    width: 100%;
    height: 100px;
    font-size: 25px;
    text-align: right;
  }

  button {
    width: 65px;
    height: 40px;
    margin: 10px;
    font-size: 20px;
    background-color: white;
    border-radius: 5px;
    border: 1px solid gray;
    cursor: pointer;
  }
</style>';

?>
</body>
</html>
 
