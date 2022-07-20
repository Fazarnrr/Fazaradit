<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">

    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 40px 40px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>

    <body>
    <title>Dashboard Monitoring</title>
  </head>
  <body>
 <!-- Sidebar -->
 <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
 <h3 class="w3-bar-item" style="font-size:13px ;">Dashboard Monitoring</h3>
  <a href="{{url ('dashboard')}}" class="w3-bar-item w3-button">Dashboard</a>
  <a href="{{url ('timeline')}}" class="w3-bar-item w3-button">Create Projrct Timeline</a>
  <a href="{{url ('list')}}" class="w3-bar-item w3-button">List View Project</a>
  <a href="{{url ('document')}}" class="w3-bar-item w3-button">Upload Document</a>
  <a href="{{url ('task')}}" class="w3-bar-item w3-button">Task Progress Report</a>
  <a href="{{url ('')}}" class="w3-bar-item w3-button">logout</a>
</div>

<!-- Kolo Navbar -->

<ul>
  <li><a class="active" href="#home"></a></li>
  <li><a href="#news"></a></li>
</ul>

<div style="margin-left:25%">
<div class="w3-container ">
  <h1></h1>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>