<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Home</title>

</head>

<body>
  <div class="home-project">
    <header>
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-light bg-light justify-content-between">
            <h1 class="navbar-title">Quản lý danh sách bài tập lớn</h1>
            <div class="search-box">
              <form class="search-form" action=""> <input class="form-control" placeholder="Search" type="text">
                <button class="btn btn-link search-btn"> <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </nav>
        </div>
        <div class="row">
          <div class="tools">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Home</a>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="library.php">Library <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Manage</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="banner">
          <img src="../image/undraw_Add_tasks_re_s5yj.svg" alt="">
        </div>
        <div class="banner-content">

        </div>
        <div class="main-content">
          <h2 class="title-cap">Your Library</h2>
          <hr>
          <div class=" subject-card">
            <div class="card col-3">
              <img class="card-img-top" src="../image/undraw_Friends_online_re_r7pq.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kỹ thuật lập trình </h5>
                <a href="view.php?mon=Kỹ%20thuật%20lập%20trình" class="btn btn-primary">View <i class="fa fa-street-view" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="card col-3">
              <img class="card-img-top" src="../image/undraw_join_of2w.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Lập trình mạng </h5>
                <a href="view.php?mon=Lập%20trình%20mạng" class="btn btn-primary">View <i class="fa fa-street-view" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="card col-3">
              <img class="card-img-top" src="../image/undraw_No_data_re_kwbl.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Lập trình Web </h5>
                <a href="view.php?mon=Lập%20trình%20Web" class="btn btn-primary">View <i class="fa fa-street-view" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="card col-3">
              <img class="card-img-top" src="../image/undraw_Taken_re_yn20.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Lập trình hướng đối tượng</h5>
                <a href="view.php?mon=Lập%20trình%20hướng%20đối%20tượng" class="btn btn-primary">View <i class="fa fa-street-view" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
    </main>
  </div>
  <script src="main.js"> </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>