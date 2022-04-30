<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/style/style.css">
    <meta name="description" content="contact hackers poulette">
    <title>Hackers Poulettes</title>
</head>
<body>
   <header class="container-fluid myheader" >
       
    
       
    <nav class="navbar navbar-expand-lg navbar-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav gap-4 ms-4">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
       
<div class="logo d-flex flex-row-reverse ">
    <img src="assets/img/hackers-poulette-logo.png" class="img-fluid justify-content-end imglogo " alt="Hackers Poulette Logo"></div>   
</header>


<div class="position-form">
 <div class="contact">
     <div>
    <p>Contact</p>
    <span class="us"><p>Us...</p></span>
     </div>
</div>   
   <div class="container-formulaire ">
<form class="form row g-9 gap-3" action="" method="POST">




<div class="gender col-ls">
    <label for="gender">Gender</label>


<div class="checkbox">
    <input type="radio"  name="thegender" value="Man">
    <label for="men">Mr</label><br>
    <input type="radio" name="thegender" value="Woman">
    <label for="women">Mlle</label>
</div></div>
<!-- Name -->
  
<div class="col-lg">
    <label for="name" class="col-form-label">Name</label>
  </div>
  <div class="col-auto">
    <input type="text" placeholder="Enter your name" id="name" class="myinput form-control" aria-describedby="name">
  </div>
  <!-- Lastname -->
  <div class="col-lg">
    <label for="lastname" class="col-form-label">Lastname</label>
  </div>
  <div class="col-auto">
    <input type="text" placeholder="Enter your lastname" id="lastname" class="myinput form-control" aria-describedby="lastname">
  </div>

  <!-- email -->
  <div class="col-lg">
    <label for="email" class="col-form-label">E-mail</label>
  </div>
  <div class="col-auto">
    <input type="email" placeholder="@Enter your e-mail " id="email" class="myinput form-control" aria-describedby="email">
  </div>
  <!-- country -->
  <div class="col-lg">
    <label for="country" class="col-form-label">Country</label>
  </div>
  <div class="col-auto">
    <input type="text" placeholder="Where are you from ?" id="country" class="myinput form-control" aria-describedby="country">
  </div>

  
    <!-- Subjects -->
    <div class="col-lg">
    <label for="subject" class="col-form-label">Subject</label>
  </div>
  <div class="myselect col-5">
   
  
    <select class="form-select" aria-label="Default select example">
  <option selected>Choose Subject</option>
  <option value="1">About Product</option>
  <option value="2">Technical Problem</option>
  <option value="3">Job offer</option>
  
</select>

 </div>
<div class="col-lg">
    <label for="message" class="col-form-label">Message</label>
  </div>
  <div class="col-auto">
    <textarea rows="2" placeholder="Enter your message" cols="21" id="message" class="form-control" aria-describedby="message"></textarea>
  </div>
  
<div class="button">
  <input class="submit" type="submit" name="submit" value="SEND"> 
</div>
</form>




  
</div>


</body>

</html>