<html>
<head>
<script>
  <?php 
  $recipe_name = "";
  $name = $_POST;
  $file = 'ingredients' . '.json';
  if(file_put_contents($file,json_encode($_POST)))
  {
    
  }
  if(isset($name["cottage"])==1&&isset($name["tomato"])==1&&isset($name["onion"])==1&&isset($name["garlic"])==1&&isset($name["capsicum"])==1&&isset($name["coriander"])==1&&isset($name["red chilli"])==1&&isset($name["turmeric"])==1&&isset($name["fenugreek"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1) {
    $recipe_name = "Paneer Kadai";  
  }
  





  if(isset($name["tomato"])==1&&isset($name["ginger"])==1&&isset($name["greenChilli"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1){
    $recipe_name = "Tomato sabji";
  }
  





  if(isset($name["onion"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1){
    $recipe_name = "Onion sabji";
  }
  
  




  if(isset($name["potato"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1){
    $recipe_name = "Potato sabji";
  }
  





  
  if(isset($name["cabbage"])==1&&isset($name["tomato"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1) {
    $recipe_name = "Cabbage Sabji";
  }
  






  if(isset($name["cauliflower"])==1&&isset($name["tomato"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curry"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1) {
    $recipe_name = "Cauliflower Sabji";
  }
  






  if(isset($name["bread"])==1&&isset($name["butter"])==1&&isset($name["cheese"])==1) {
    $recipe_name = "Cheese Sandwhich";
  }
  






  if(isset($name["bread"])==1&& isset($name["onion"])==1&&isset($name["tomato"])==1&&isset($name["potato"])==1&&isset($name["butter"])==1) {
    $recipe_name = "Vegetable Sandwhich";
  }
  






  if(isset($name["bread"])==1&& isset($name["onion"])==1&&isset($name["tomato"])==1&&isset($name["potato"])==1&&isset($name["butter"])==1&&isset($name["cheese"])==1) {
    $recipe_name = "Vegetable Cheese Sandwhich";
  }
  






  if(isset($name["bread"])==1&& isset($name["onion"])==1&&isset($name["tomato"])==1&&isset($name["potato"])==1&&isset($name["butter"])==1&&isset($name["mayo"])==1) {
    $recipe_name = "Vegetable Mayo Sandwhich";
  }
  






  if(isset($name["bread"])==1&&isset($name["onion"])==1&&isset($name["tomato"])==1&&isset($name["potato"])==1&&isset($name["butter"])==1&&isset($name["mayo"])==1&&isset($name["cheese"])==1) {
    $recipe_name = "Vegetable Mayo Cheese Sandwhich";
  }
  






  if(isset($name["greenChilli"])==1&&isset($name["salt"])==1&&isset($name["lemon"])==1&&isset($name["ginger"])==1&&isset($name["corian"])==1) {
    $recipe_name = "Green Chutney";
  }
  






  if(isset($name["rice"])==1&&isset($name["lemon"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1) {
    $recipe_name = "Lemon Rice";
  }
  






  if(isset($name["rice"])==1&&isset($name["schezwan"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1){
    $recipe_name = "Schezwan Rice";
  }
  






  if(isset($name["rice"])==1&&isset($name["potato"])==1&&isset($name["onion"])==1&&isset($name["coriander"])==1&&isset($name["redChilli"])==1&&isset($name["turmeric"])==1&&isset($name["cumin"])==1&&isset($name["mustard"])==1&&isset($name["heeng"])==1&&isset($name["curryLeaf"])==1&&isset($name["salt"])==1&&isset($name["oil"])==1){
    $recipe_name = "Fried Rice";
  }
  
?>

function abc(){
	var xhttp2= new XMLHttpRequest();
  xhttp2.onreadystatechange = function(){
    if(this.readyState==4 && this.status== 200){
         myob1=JSON.parse(this.responseText); 
         var vidid=myob1.items[0].id.videoId;
         document.getElementById("play").src=`https://www.youtube.com/embed/${vidid}?autoplay=1`

          
}
  };
    xhttp2.open("GET",`https://www.googleapis.com/youtube/v3/search?part=id&q=<?php echo $recipe_name;?>&type=video&key=AIzaSyDdD_Q_6M_3t4fJ3-yLo5reUqr9w1Nqlq0&maxResults=20`,true);
            xhttp2.send();
        }
        function searchrecipe(){
  var xhttp= new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status== 200){
         myob=JSON.parse(this.responseText); 
         var vidid=myob.recipes[0].source_url;
         document.getElementById("recipe_get").href=vidid;
         var image=myob.recipes[0].image_url;
         document.getElementById("recipe_img").src=image;
}
  };
    xhttp.open("GET",`https://www.food2fork.com/api/search?key=b4de927cd175dc6f07c028e8269eaf65&q=<?php echo $recipe_name;?>`,true);
            xhttp.send();
        }

        function start(){
          abc();
          searchrecipe();
        }
        window.onload=start;
      </script>
    </head>
    <body>
      <iframe id="play" height="360" width="640"  src="https://www.youtube.com/embed/?autoplay=1" allow="autoplay" allow="encrypted-media" allowFullScreen="true"></iframe>
      <a id="recipe_get" href="">Click here to get to your recipe</a>
      <img id="recipe_img" src="">
    </body>