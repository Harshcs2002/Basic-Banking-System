<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/d2747108de.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <title>Home</title>
  <style>body {
    background-image: url("background.jpg");
    background-size: cover;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }</style>
</head>

<body>
  <!--NAVIGATION BAR-->
  <div id="title">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark ">
      <img src="bank.png" alt="logo">
      <a id="navbar-brand" href="index.php">Cornerstone<span>  Bank</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
</div>

  <div class="intro">
   Welcome to Cornerstone Banking System
  </div>
  <div class="info">
  <p> Your trusted partner in banking. We are committed to providing our customers with reliable and innovative financial solutions that meet their unique needs. 
    You can access your accounts anytime, anywhere, and manage your finances with our secure and user-friendly online banking platform . Experience banking like never before with Cornerstone Bank.</p>
  </div>
  <div class="cont">
    <form action="">
      <br>
      <button id="vcustomer" class="btn btn-primary btn-lg btn-block " name="View Customer" value="View Customer"
        formaction="customer.php">View Customer</button><br>
      <button id="vhistory" class="btn btn-primary btn-lg btn-block " name="Transaction History"
        value="Transaction History" formaction="history.php">Transaction History</button>
    </form>
  </div>
</body>
<footer id="footer">
<nav id="navbar" >
<div class="center">
  <p> Stay Connected: Follow us on social media for news and updates </p>
  <i class="social-icon fas fa-phone-square-alt"></i>
  <i class="social-icon fab fa-twitter-square"></i>
  <i class="social-icon fas fa-envelope-square"></i>
</div>
</nav>
</footer>
</html>