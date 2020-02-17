 <!--Intro bar-->
    <div class="intro">
        <img src="img/logo.png" alt="">
        <h1 class="head">ICT ASSETS MANAGEMENT SYSTEM</h1>
        <div class="dropdown">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
              User Name
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Log Out</a>
            </div>
          </div>
    </div>

    <!--Nav Bar-->
    <div class="nav-container" >
        <div class="nav-item" >
            <a class="link" href="index.php">HOME<a>
        </div>
        <div class="nav-item">
            <a class="link" href="datacapture.php">DEPLOYMENT<a>
        </div>
        <div class="nav-item">
            <a class="link" href="#">DATA APPROVAL</a>
        </div>
        <div class="nav-item">
            <a class="link" href="#">CHANGE OWNERSHIP</a>
        </div>
        <div class="nav-item">
            <a class="link" href="#">ASSET REPAIRS</a>
        </div>
        <div class="nav-item">
            <a class="link" href="#">REPORTS</a>
        </div>
    </div>

    <style type="text/css">
        /* body styling */
body{
    font-family: "Montserrat", sans-serif;
    font-size: 15px;
}

/* Intr0 */
.intro{
    margin-top: 10px;;
    display: flex;
    justify-content: space-evenly;
}

.head{
   text-align: center;
    color: #ff0613;
    font-weight: 600;
    font-size: 35px;
    margin-top: 1%;
}

.dropdown{
    color: blue;
    font: bold;
     margin-top: 1%;
}

/* Nav bar */
.nav-container{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    background-color: #ff0613;
    color: white;
}

.nav-item{
    margin: 10px;
}

.nav-item a{
    color: white;
    font-size: 13px;
}

.link:hover{
    color: black;
}

/* search form */
.search{
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

#label{
    margin: 10px;

}

/* footer */
.footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: rgba(73, 63, 63, 0.788);
    color: white;
}

.copyright{
    margin: 15px;
}
    </style>