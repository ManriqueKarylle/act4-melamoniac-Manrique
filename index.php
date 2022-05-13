<?php
session_start();

//start
$song_lyrics1 = "Easy";
$song_lyrics2 = "Still";
$song_lyrics3 = "Comethru";
$song_lyrics4 = "Casual";
$song_lyrics5 = "Ligaya";

//
$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


//buttons eme
if(isset($_REQUEST['search_button'])=== true){
    //url nila
    if($_REQUEST['song_title'] == $song_lyrics1){
        header("Location: ".$url_add."?easy");
    }
    else if($_REQUEST['song_title'] == $song_lyrics2){
        header("Location: ".$url_add."?still");
    }
    else if($_REQUEST['song_title'] == $song_lyrics3){
        header("Location: ".$url_add."?comethru");
    }
    else if($_REQUEST['song_title'] == $song_lyrics4){
        header("Location: ".$url_add."?casual");
    }
    else if($_REQUEST['song_title'] == $song_lyrics5){
        header("Location: ".$url_add."?ligaya");
    }

        
        $_SESSION['ses_lyrics1'] = $song_lyrics1;
        $_SESSION['ses_lyrics2'] = $song_lyrics2;
        $_SESSION['ses_lyrics3'] = $song_lyrics3;
        $_SESSION['ses_lyrics4'] = $song_lyrics4;
        $_SESSION['ses_lyrics5'] = $song_lyrics5;
          
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> Melody Log </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light_gray" href="song1.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light_gray" href="song2.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light_gray" href="song3.php">Song 3</a></li>
                        <li class="nav-item"><a class="nav-link text-light_gray" href="song4.php">Song 4</a></li>
                        <li class="nav-item"><a class="nav-link text-light_gray" href="song5.php">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-secondary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Melody Log</h1>
                <p class="lead">"Music is the life itself."</p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <form method="POST" class="login-form">
                            <div class="form-group">


                            
                                <?php
                                //sa search
                                if(isset($_REQUEST['easy']) === true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song1.php");
                                }else if(isset($_REQUEST['still'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song2.php");
                                }else if(isset($_REQUEST['comethru'])===true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song3.php");
                                }else if(isset($_REQUEST['casual'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song4.php");
                                }else if(isset($_REQUEST['ligaya'])===true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song5.php");
                                }

                                    
                                ?>
                                

                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Song Title" name="song_title" ></div>
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="search_button"> Search </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-secondary">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Karylle M. Manrique</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>