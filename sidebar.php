<div class="sidebar">

	<script type="text/javascript" src="https://naijaramz.com/jquery.js"></script>


<center><a target="blank"  style="color:rgb(211,20,20);font-size:14px;font-weight:bold;" href="https://naijaramz.com/contact">Contact Us</a>
</center>
<br><br>



<h6 class="put" >Search For Post <span style="text-indent: 10px;">
    <i class="fa fa-search"></i></span></h6>

<center>
<div class="search-container" style="position: relative;border:none;">

<span class="search-sit" style="position:absolute;top:-20px;padding:2px;display:inline-block;left:10px;font-size:11px;" id="disError"></span>

<form action="https://naijaramz.com/search_server.php" method="get" onsubmit="return searchPost()">
    
    <select class="sellect" name="category">
        
        <option value="post">Post</option>
        <option value="movie">Movies</option>
        <option value="music">Music</option>
        
    </select>
    
<input type="text" id="inp" name="q" placeholder="Search here....."  style="font-size:10px;background:none;border:1px solid rgb(200,200,200);outline:none;width:25%;" />
<button type="submit"   style="cursor:pointer;border:none;outline:none;width:16%;font-size:13px;background: rgb(40,40,40);color:white;padding: 4px;"><i class="fa fa-search"></i></button>


    
</form>
</div>
</center>
    <script type="text/javascript">
      
      function _(el){

        return document.getElementById(el);
      }



         function searchPost(){


          var input = _('inp').value;
          var error = _('disError');

          if(input == ''){

error.style.color = 'red'
error.innerHTML  = 'pls enter something in this field';
           return false;
          }

         }



    </script>

  
</center>

<br>

<style>
    
    
</style>

<br>

<nav>
<h6 class="put" >All Categories</h6>   
    
       <ul id="sas" style="margin:0;padding:0;">
             
    




       
    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/forum.php" title="Ask question" >Talk Forum</a>

        </li>

    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/Music" title="latest naija gist" >Music & lyrics</a>

        </li>
   

 <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/articles.php" >Articles</a>

        </li>

    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/howto.php" >How to Guide</a>

        </li>
   


    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/Entertainment" style="position:relative;" title="updates on latest entertaintaining gist" >Entertainment
        
      <!--  <span style="position:absolute;display:inline-block;top:20px;left:0;width:100px;height:100px;background:white;border:1px solid black;"></span>
    -->
        </a>

        </li>



    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/Sport" title="latest sport informations" > Sport News</a>

        </li>



    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/movie.php" title="download latest yoruba movie " >
       Nollywood Movies</a>
</li>




    <li>

        <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/SportPrediction">
       100% Sport Prediction</a>
</li>
 

       </ul>

<br>





   
<h6 class="put" >Recent Comments</h6>   
        

<?php



$comment_query = mysqli_query($conn,"SELECT * FROM comment  ORDER BY id DESC LIMIT 5");


while($datas = mysqli_fetch_array($comment_query)){
    


$comm_id = $datas['comment_id'];
$comm = $datas['comment'];
$name= substr($datas['name'],0,60);


$date = $datas['date'];


$check_query = mysqli_query($conn,"SELECT * FROM posts  WHERE comment_id = '$comm_id' ORDER BY id DESC LIMIT 1");

$datase = mysqli_fetch_array($check_query);
$tit = $datase['title'];
$ti_url = $datase['cleanurl'];
$cat = $datase['category'];


$date = date('l d-M-Y', $date);


echo   '<a style="text-decoration:none;" href="https://'.$_SERVER["SERVER_NAME"].'/' .$cat . '/'. $ti_url .'#comment">
<p style="font-size:12px;font-family:arial;"><b> '. ucfirst($name) .'</b> :' .$comm  .' <small style="color:brown;">On:'. $date .'</small>' .'<small style="color:gray;">
'. $tit .'</small></p></a>';








}





?>






  <br/>  
  
  
  <div class="twitterbar" style="height:300px;overflow:auto;">
      
      
 
<!--<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->

  </div>


<style>

* width */
body::-webkit-scrollbar {
  width: 4px;
}

/* Track */
body::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
body::-webkit-scrollbar-thumb {
  background:#888 ;
    border-radius: 10px;

}

/* Handle on hover */
body::-webkit-scrollbar-thumb:hover {
  background: #555;
}


body::-webkit-scrollbar {
  width:4px;
}

/* Track */
body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}



    
  .twitterbar::-webkit-scrollbar {
  width: 8px;
}
    
</style>

  <br/>  
  
    <br>


</nav>



<script>
    
    var mytags = document.getElementsByClassName('mytag');
    
    
    mytags[0].style.fontSize = "30px";
    mytags[4].style.fontSize = "30px";
    mytags[6].style.fontSize = "30px";
    mytags[10].style.fontSize = "30px";
    mytags[14].style.fontSize = "29px";
    mytags[16].style.fontSize = "30px";
    mytags[16].style.fontFamily = "segoe script";
    mytags[18].style.fontSize = "30px";
    mytags[22].style.fontSize = "27px";
    mytags[25].style.fontSize = "31px";
    mytags[25].style.fontFamily = "segoe script";
    mytags[29].style.fontSize = "29px";
    mytags[34].style.fontSize = "30px";
    mytags[41].style.fontSize = "20px";
    mytags[44].style.fontSize = "20px";
    mytags[47].style.fontSize = "30px";
    mytags[50].style.fontSize = "30px";
    mytags[51].style.fontSize = "30px";
    
    
    
    
    
</script>
  

</div>

</div
