<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="selection">
            <label for="category">Category</label>
            <select name="category" id="category_dropdown"
              <option value="eye">Eye</option>
              <option value="eye">Eye</option>
              <option value="eye">Eye</option>
              <option value="eye">Eye</option>
            </select>
        </div>
       <div class="button">
         <button id="login">Login</button>
       </div>
       <div class="button">
         <button id="register">Register</button>
       </div>
    </nav>
  </header>