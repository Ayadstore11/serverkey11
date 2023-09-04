<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0x;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg2.png);
    background-size: cover;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }

  </style>
	<a style="color:black;" class="nav-link" href="documentation.html">Back to Dashboard </a>
	
<br>	
            <div class="select is-rounded is-info is-fullwidth">
            <div class="select-time">
              <select class="form-control" name="choose-time">
								<option value="1 Hour">1 Hour</option>
								<option value="2 Hour">2 Hour</option>								
                <option value="1 days">1 Day</option>
                <option value="7 days">7 Week</option>
                <option value="14 days">14 Week</option>    
                <option value="30 days">30 Month</option>
                <option value="60 days">60 Months</option>  
                <option value="90 days">90 Months</option>                                            
                <option value="182 days">182 Months</option>
                <option value="365 days">365 Year</option>
              </select>
            </div>
					</div>	
  <title>AYAD-STORE</title>
</head>
<body>
  <div class="box">
    <h2></h2>
    <h2>BY:AYAD-STORE</h2>
    <form action="">
      <div class="input-box">
        <input type="text" name="texte" autocomplete="off" required >
        
      </div>
        <input type="submit" value="Save">
    </form>
  </div>
</body>
</html>
<?php
    extract($_REQUEST);
    $file=fopen("form-save.html","a");

    
    fwrite($file, $texte ."\n");
  
    fclose($file);
   
 ?>

    

