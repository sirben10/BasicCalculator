<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>My Simple PHP Calculator</title>

    <style>
    body {
       
        position: relative;
        margin-top: 5%;
        font-family: sans-serif;
        background-color: #cfe2cf;
       
        }

   div {
         position: absolute;
         margin-left: 35%;
         border: 5px solid 	#8FBC8F;
         border-radius: 7px;
         padding: 30px;
         background-color: #dfecdf;
         font-family: Times;
         font-size: 20px
      
   }
   label{
        padding:5px;
        display: block;
        margin: 0 0 20px 0;
   }
   input{
       margin: 0 5px 0 100px;
      border: 1px solid #8FBC8F;
      border-radius:7px;
      box-sizing: border-box;
      padding: 12px 20px;
      background-color: #dfecdf;
   }
   select, button{
       display: inline;
       border: 1px solid #8FBC8F;
       
  }
  select{
      margin-left:33%;
     padding: 5px 10px
  }
  button{
      background-color: #609f60;
      color: #fff;
      padding: 10px 15px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
  }
  select:hover{
         background-color: #dfecdf;
      color: #000;
      transition-duration: 0.4s ease-out;
      -webkit-transition-duration: 0.4s; /* Safari */
  }
 .submit:hover{
      background-color: #4d804d;
      color: #fff;
      transition-duration: 0.4s ease-out;
      -webkit-transition-duration: 0.4s; /* Safari */
     
  }


    </style>
</head>
<body>
<div>
    <form action="" method="POST">
    <label for="num1"> Number 1:
     <input type="text" name="num1" placeholder="Enter Number 1" required></label>
     <label for="num2"> Number 2:
    <input type="text" name="num2" placeholder="Enter Number 2" required></label>
    <select name="operations" required=true>
        <option >Choose</option>
        <option >Add</option>
        <option >Subtract</option>
        <option >Multiply</option>
        <option value="">Divide</option>
    </select> 
    <button type="submit" class="submit" name="calculate">Calculate</button>
    </form>
    
<p> The Answer is:  

<?php
    if (isset($_POST['calculate'])) {
       $num1 = htmlspecialchars(stripslashes($_POST['num1']));
       $num2 = htmlspecialchars(stripslashes($_POST['num2']));
       $operations = $_POST['operations'];
    switch ($operations) {
        case 'Choose':
           ?><p style="color:red"><?php echo("Error! Please Select an operation to perfom");?></p>
           <?php
            break;
    
            case 'Add':
               echo  $num1 + $num2;
              
                break;

           case 'Subtract':
          echo  $num1 - $num2;
   
            break;

                case 'Multiply':
                echo  $num1 * $num2;
                 
            break;
    
            case 'Divide':
   echo  $num1 - $num2;
              
                 break;
        
      
    }
    
    
    
    }




?></p>

</div>

</body>