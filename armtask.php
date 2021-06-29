<!DOCTYPE html>

<html>
<head>
    <title>MOTOR ARM</title>
    <link rel="stylesheet" href="style22.css"> 
</head>
<body>
    <div class="header">
    <h1> Motor Arm</h1>
    </div> 
<form  action="insertDB.php" method="post"> 
    
<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" name="one" id="myRange"> <!-- السلايدر الاول-->
  <p>Value Motor 1 : <span id="demo"></span></p>  <!-- قيمة تحريك السلايدر-->
</div>

<script> //Activate the value based on the ID for each input 
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

 <!-- ........................ -->
 
<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider"  name="two" id="myRange1">  <!-- السلايدر الثاني-->
  <p>Value Motor 2 : <span id="demo1"></span></p>  <!-- قيمة تحريك السلايدر-->
</div>

<script> //Activate the value based on the ID for each input 
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>

 <!-- ........................ -->

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider"  name="three" id="myRange2"> <!--السلايدر الثالث-->
  <p>Value Motor 3 : <span id="demo2"></span></p>  <!-- قيمة تحريك السلايدر-->
</div>

<script> //Activate the value based on the ID for each input 
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>

 <!-- ........................ -->
 
<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider"  name="four" id="myRange3"> <!--السلايدر الرابع-->
  <p>Value Motor 4 : <span id="demo3"></span></p> <!-- قيمة تحريك السلايدر-->
</div>

<script> //Activate the value based on the ID for each input 
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
</script>

 <!-- ........................ -->

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider"  name="five" id="myRange4">  <!-- السلايدر الخامس -->
  <p>Value Motor 5: <span id="demo4"></span></p>
</div>

<script>
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
</script>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider"  name="six" id="myRange5">  <!-- السلايدر السادس -->
  <p>Value Motor 6 : <span id="demo5"></span></p>
</div>

<script>
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
</script>
  <div class="submit">
    <input type="submit" id="join-btn" name="submit" value="save"> <!-- زر حفظ القيم وارسالها لقاعدة البيانات-->
    <input type="submit" id="join-btn" name="run" value="run"> <!--زر التشغيل-->
   
   

</div>
</body>
</html>
