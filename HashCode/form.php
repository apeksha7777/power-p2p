<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
  
}
.h2{
  

}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  
}

.left {
  left: 0;
  /* background-color: #111; */
  background-image: url("image/banner_home.png");
}

.right {
  right: 0;
  /* background-color: red; */
  background-image: url("image/red.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  margin-top: -40%;
  background-image:"image/banner_home.png";
}
  
}

.centered img {
  width: 150px;
  border-radius: 50%;
 
  
}
.forma {
  margin-top: 20%;
  margin-left: 30%;
 
}
.sub{
            margin-left: 27%;
          
            

        
}
.forma2 {
  margin-top: 2%;
  margin-left: 35%;
 
}
.sub2{
  margin-left: 21%;
  color:#111;
  padding:0%;
  

}
.pow2{
  margin-right: 20%;
}
</style>
</head>
<body>

<div class="split left">
  <div class="centered">
    
    <h2>ADD SURPLUS</h2>
    <p>Enter extra power in units</p>
  </div>
  <form action=# class="forma" style="margin-left: 100px; margin-right: 100px;">
    <fieldset><br>
    power (units): <input type="text" name="reqPower" style="margin-left: 40px;"><br><br><br>
      <div class="sub" ><button type="button" onclick="alert('Added!')" style="margin-bottom:10px; margin-left: 55px;">SUBMIT</button> </div>
</fieldset>
    </form> 
      <form action=transfer.html class="forma2" style="margin-top: 100px;margin-left: 100px; margin-right: 100px;">
     <fieldset> <center><h2>TRANSFER POWER</h2>
    <p>Transfer surplus power to others!</p></center>
    
      <div class="sub2" ><a href="transfer.html"><button type="button" style="margin-bottom:10px; margin-left: 55px;" >GO!</button> </a></div>
       
</fieldset>
        
  </form>
</div>

<div class="split right">
  <div class="centered">
    
    <h2 style="margin-top: 300px;">REQUEST ENERGY</h2>
    <p>Enter power required in units</p>
  </div>
  <form action=# class="forma" style="margin-left: 100px; margin-right: 100px;margin-top: 250px;">
  <fieldset>    
  power (units): <input type="text" name="reqPower3" style="margin-top:20px;margin-top:20px;"><br><br><br>
        <div class="sub" ><button type="button" onclick="alert('Added!')" style="margin-bottom:10px; margin-left: 55px;" >SUBMIT</button> </div>
         
</fieldset>      
          
    </form>
</div>
     
</body>
</html> 

