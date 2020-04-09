<style>
  *{
    margin: 0;
    padding: 0;
}

.header{
    height: 100vh;
    background-image:linear-gradient(45deg, rgba(125,173,163,.1) 0%, rgba(229,227,223,.3) 46%, rgba(255,186,178,1) 100%),url(https://upload.wikimedia.org/wikipedia/commons/f/fc/An_aerial_view_of_Strathmore-University_Keri_campus.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    overflow-x:hidden;
}


.navbar{
    padding-top: 20px !important;
}

.nav-item{
    margin-left: 40px !important;
    margin-bottom: 10px !important;
}

.nav-link{
    color: #fff !important;
    font-size: 21px !important;
    padding: 0 0 5px 0 !important;
    display: unset;
    font-weight:500;
    letter-spacing: .5px;
    text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    transition: .3s linear;
}

.navbar-brand img{
    width: 300px;
}

.active-home{
    border-bottom: 2px solid #fff;
   
}

.nav-link:hover{
    border-bottom: 2px solid #fff;
}

.banner{
    color: #fff;
    margin-top: 8%;
}

.banner h1{
    margin: 80px 0 50px;
    font-weight: 600;
    font-size: 60px;
}

#hero{
    color: #D3AB35;
  -webkit-text-stroke-color: rgba(152,66,45);
  -webkit-text-stroke-width: 1.5px; 
    text-shadow: 2px 4px 3px rgba(0,0,0,0.6);
}

.banner a{
    padding: 12px;
    width: 150px;
    display: block;
    text-decoration: none !important;
    color: rgba(152,66,45);
    background: #D3AB01;
    border: 1.5px solid rgba(152,66,45);
    border-radius: 5px;
    text-align: center;
    margin: 30px auto;
    font-weight: bold;
    font-size: 14px;
    box-shadow: 2px 4px 3px rgba(0,0,0,0.2);
    transition: .38s ease;
}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title></title>
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>   
</head>
<body>
    <section class="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="/"><img src="https://kenyacic.org/sites/default/files/images/partners/strathmore.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-right">
                  <li class="nav-item">
                    <a class="nav-link active-home" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://github.com/JeanPierreNdagijimana/Jean_Pierre">Github link</a>
                  </li>
                </ul>
              </div>
            </nav>
            
            <div class="row banner">
                <div class="col-md-6">
                    <h1>Fee Management System<br>By <span id="hero">Jean Pierre</span></h1>

                     <div>
                     <a class="btn btn-primary" href="/student" role="button">Add Student</a>
    </div> 
    <div>
        <div>
        <a class="btn btn-primary" href="/fees" role="button">Update Fees</a>
    </div> 
    </div>

                </div>         
            </div>        
        </div>
    </section>
</body>
</html>
