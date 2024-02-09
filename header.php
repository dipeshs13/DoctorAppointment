<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
  <header id="header">
    <nav id="nav_bar">
        <div class="logo">
            <img src="images/healthcare.png" alt="This is an logo" id="image1">

        </div>
        <div class="h1">
            <h1>Doctor Appointment System</h1>
        </div>
        
        <div class="center_nav">
            <div class="search">
                <input type="text" id="text"/>
                <button id="search_bar">
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    
        <ul>
          <li class="nav category">
            <a href="#">Category
            <span class="material-icons-outlined">
              </span>
            </a>
            <ul class="drop-down">
              <li><a href="#">Eye</a></li>
              <li><a href="#">Eye</a></li>
              <li><a href="#">Eye</a></li>
            </ul>
          </li>
        </ul>

        <!-- <ul class="bt">
       <li class="btn login">
         <button id="login" class="log_in">Login</button>
         <a href="#">Login


          </a> --> 
          <!-- <ul class="btn_dropdown">
             <li><a href="#">As a user</a></li>
             <li><a href="#">As a doctor</a></li>
          </ul>
       </li>
</ul> -->
<ul id="unorder">
  <li class="login">Login
    <ul id="ul_login">
      <li id="user"><a href="#">As a user</a></li>
      <li id="doctor"><a href="#">As a doctor</a></li>
    </ul>
  </li>
</ul>

       <div class="button">
         <button id="register">Register</button>
       </div>
    </nav>
  </header>