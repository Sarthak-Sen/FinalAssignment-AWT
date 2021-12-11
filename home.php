<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to Student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>Favourite Players</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Viswanathan_Anand"><img src="https://images.indianexpress.com/2019/12/vishwanathan-anand-1200.jpg" alt="Vishwanathan Anand"></a> 
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Magnus_Carlsen"><img src="https://en.chessbase.com/Portals/all/thumbs/093/93995.jpeg" alt="Magnus Carlsen"></a>
            </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Neeraj_Chopra"><img src="https://images.livemint.com/img/2021/08/08/1600x900/20210807249L_1628383741092_1628383767512.jpg" alt="Neeraj Chopra"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/MS_Dhoni"><img src="https://im.indiatimes.in/facebook/2019/Jul/ms_dhoni_himself_has_not_spoken_on_his_retirement_plans_1563350842.jpg" alt="Mahendra Singh Dhoni"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Garry_Kasparov"><img src="https://image.cnbcfm.com/api/v1/image/105921424-1558273828341gettyimages-10021503161.jpg?v=1558273879&w=1600&h=900" alt="Garry Kasparov"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
