<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    
    
    <title>CarPark</title>

    
</head>
<body>
    <header>
      <div class="navbar-area">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.php">
                <img src="image/logo.png" style="height: 50px;" class="d-inline-block align-center" alt="">
                <span class="align-items-center text-center fw-bold" style="color: #3B5998;">CarPark</span>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link active" href="lantai1.php">Lantai 1</a>
                  <a class="nav-link" href="lantai2.php">Lantai 2</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      
    </header>
    <section>
      <div class="welcome">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <p><span class="fw-bold spansatu">Selamat datang <span class="spandua">di Lantai 1</span> !</span> Parkirin mobil Anda di warna Hijau yaa...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="konten container-fluid text-center">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-3 p-3">
            <div class="card kosong" id="kosong">
              <div class="card-header">
                <h5>Tersedia</h5>
              </div>
              <div class="card-body">
                <span id="info-kosong"></span>
                <div id="yang-kosong"></div>
              </div>
            </div>
            
          </div>
          <div class="col-md-3 p-3">
            <div class="card terisi" id="terisi">
              <div class="card-header">
                <h5>Terisi</h5>
              </div>
              <div class="card-body">
                <span id="info-terisi"></span>
                <div id="yang-terisi"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <div class="container-fluid text-center">
          <div class="title">
            <h2>Area Parkir</h2>
          </div>
          <div class="row mt-5">
            <div class="col-sm ">
              <span>
                <img class="pintumasuk pt-5" style="height: 150px;" src="image/pintumasuk.png" alt="">
              </span>
            </div>
            <div class="col-sm col1">
              <div id="slot1" >
                <div class="fs-4 pt-2 fw-bold">1</div>
              </div>
            </div>
            <div class="col-sm" >
              <div id="slot2">
                <div class="fs-4 pt-2 fw-bold">2</div>
              </div>
            </div>
            <div class="col-sm">
              <div id="slot3">
                <div class="fs-4 pt-2 fw-bold">3</div>
              </div>
            </div>
            <div class="col-sm">
              <div id="slot4">
                <div class="fs-4 pt-2 fw-bold">4</div>
              </div>
            </div>
            <div class="col-sm">
              <span>
                <img class="pintukeluar pt-5" style="height: 150px;" src="image/pintukeluar.png" alt="">
              </span>
            </div>
          </div>
        </div>
    </section>
    <footer class="mt-5">
      <div class="footer text-white text-center">
        <div class="container">
          <div class="text-center p-3">
            ?? 2022 Copyright:
            <a class="text-white" href="#">carpark</a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>

    <script>
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      const firebaseConfig = {
        apiKey: "AIzaSyDCkT-8PQFSFdONF46T_rjxyL9RjmTuHmo",
        authDomain: "sensor-parkir-277f6.firebaseapp.com",
        databaseURL: "https://sensor-parkir-277f6-default-rtdb.firebaseio.com",
        projectId: "sensor-parkir-277f6",
        storageBucket: "sensor-parkir-277f6.appspot.com",
        messagingSenderId: "1072639960933",
        appId: "1:1072639960933:web:9bdd0397d010287aa0a38c",
        measurementId: "G-EQ33747T3V"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      

    </script>
    <script src="javascript/index.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/jquery-1.12.4.min.js"></script>
    
    <!-- <script src="javascript/wow.min.js"></script> -->
    <script>
      $(function (){
        "use strict"
        $(window).on('scroll', function(event){
          var scroll = $(window).scrollTop();
          if(scroll < 20){
            $(".navbar-area").removeClass("sticky");
          } else {
            $(".navbar-area").addClass("sticky");
          }
        })
      });
    </script>
    

</body>

</html>