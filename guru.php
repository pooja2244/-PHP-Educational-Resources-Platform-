<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuruJEE</title>
    <link rel="stylesheet" href="./prj2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <div class="sign">
          <div class="signup_link btn btn-outline-success my-2 my-sm-0"><a href="./prj2signup.php">Sign Up</a></div>
            <div class="signup_link btn btn-outline-success my-2 my-sm-0"><a href="./prj2signup.php">Sign In</a></div>
          </div>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="./images/gradient.jpg" alt="First slide">
            <div class="carousel-caption text-center">
                <img class="car3pf " src="./images/pf3.jpeg" alt="my pf">
                <p>Man needs the difficulties because they are necessary to enjoy the victory.</p>
              </div>
          </div>
          
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="./images/darkwall.jpg" alt="Second slide">
            <div class="carousel-caption">
                <img class="car3pf" src="./images/pf3.jpeg" alt="my pf">
                <p class="text-center" >Learn here All you Want</p>
              </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100  img-fluid" src="./images/nighttree.jpg" alt="Third slide">
            <div class="carousel-caption">
                <img class="car3pf " src="./images/pf3.jpeg" alt="my pf">
                <p>If you can't Explain it simply, you don't understand it well enough.
                   This is quote said by great scientist Albert Einstein. 
                </p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="d-flex flex-row justify-content-around bd-highlight mb-3">
        <div class="fb p-2 bd-highlight">
         <div para-heading> <h3 class="heads">NCERT</h3></div>
          <div para fb-para><p>Get the NCERT Solutions here.</p>
          </div>
          <div class="start">
  <div class="go-para">All the Best</div>
  <div class="go"><a href="../home.html">GO>>></a></div>
</div>
          </div>
        <div class="fb p-2 bd-highlight">  
          <div para-heading><h3 class="heads" >JEE Mains</h3></div>
         <div para fb-para><p>JEE Mains previous Year Papers.</p> </div>
          <div class="start">
            <div class="go-para">All the Best</div>
            <div class="go"><a href="../home.html">GO>>></a></div>
          </div>
        </div>
        <div class="fb p-2 bd-highlight"> 
          <div para-heading><h3 class="heads">JEE Advance</h3></div>
          <div para fb-para><p>JEE Advance previous year Question papers.</p></div>
            <div class="start">
              <div class="go-para">All the Best</div>
              <div class="go"><a href="../home.html">GO>>></a></div>
            </div>
          </div>
        <div class="fb p-2 bd-highlight"> <div para-heading><h3 class="heads">Practice</h3></div>
          <div para fb-para><p>Practice here content Developed by <a href="#">US</a>.</p></div>
          <div class="start">
            <div class="go-para">All the Best</div>
            <div class="go"><a href="../home.html">GO>>></a></div>
          </div>
        </div>
        <div class="sidebar">
          <div class="facebook"><a href="https://www.facebook.com" >facebook</a>
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQwOC43ODggNDA4Ljc4OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDA4Ljc4OCA0MDguNzg4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBzdHlsZT0iZmlsbDojNDc1OTkzOyIgZD0iTTM1My43MDEsMEg1NS4wODdDMjQuNjY1LDAsMC4wMDIsMjQuNjYyLDAuMDAyLDU1LjA4NXYyOTguNjE2YzAsMzAuNDIzLDI0LjY2Miw1NS4wODUsNTUuMDg1LDU1LjA4NQ0KCWgxNDcuMjc1bDAuMjUxLTE0Ni4wNzhoLTM3Ljk1MWMtNC45MzIsMC04LjkzNS0zLjk4OC04Ljk1NC04LjkybC0wLjE4Mi00Ny4wODdjLTAuMDE5LTQuOTU5LDMuOTk2LTguOTg5LDguOTU1LTguOTg5aDM3Ljg4Mg0KCXYtNDUuNDk4YzAtNTIuOCwzMi4yNDctODEuNTUsNzkuMzQ4LTgxLjU1aDM4LjY1YzQuOTQ1LDAsOC45NTUsNC4wMDksOC45NTUsOC45NTV2MzkuNzA0YzAsNC45NDQtNC4wMDcsOC45NTItOC45NSw4Ljk1NQ0KCWwtMjMuNzE5LDAuMDExYy0yNS42MTUsMC0zMC41NzUsMTIuMTcyLTMwLjU3NSwzMC4wMzV2MzkuMzg5aDU2LjI4NWM1LjM2MywwLDkuNTI0LDQuNjgzLDguODkyLDEwLjAwOWwtNS41ODEsNDcuMDg3DQoJYy0wLjUzNCw0LjUwNi00LjM1NSw3LjkwMS04Ljg5Miw3LjkwMWgtNTAuNDUzbC0wLjI1MSwxNDYuMDc4aDg3LjYzMWMzMC40MjIsMCw1NS4wODQtMjQuNjYyLDU1LjA4NC01NS4wODRWNTUuMDg1DQoJQzQwOC43ODYsMjQuNjYyLDM4NC4xMjQsMCwzNTMuNzAxLDB6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" /></div>
          <div class="insta"><a href="https://www.instagram.com" >instagram</a>
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDU1MS4wMzQgNTUxLjAzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTUxLjAzNCA1NTEuMDM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgkNCgkJPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyNzUuNTE3IiB5MT0iNC41NyIgeDI9IjI3NS41MTciIHkyPSI1NDkuNzIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMCA1NTQpIj4NCgkJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0UwOUIzRCIvPg0KCQk8c3RvcCAgb2Zmc2V0PSIwLjMiIHN0eWxlPSJzdG9wLWNvbG9yOiNDNzRDNEQiLz4NCgkJPHN0b3AgIG9mZnNldD0iMC42IiBzdHlsZT0ic3RvcC1jb2xvcjojQzIxOTc1Ii8+DQoJCTxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiM3MDI0QzQiLz4NCgk8L2xpbmVhckdyYWRpZW50Pg0KCTxwYXRoIHN0eWxlPSJmaWxsOnVybCgjU1ZHSURfMV8pOyIgZD0iTTM4Ni44NzgsMEgxNjQuMTU2QzczLjY0LDAsMCw3My42NCwwLDE2NC4xNTZ2MjIyLjcyMg0KCQljMCw5MC41MTYsNzMuNjQsMTY0LjE1NiwxNjQuMTU2LDE2NC4xNTZoMjIyLjcyMmM5MC41MTYsMCwxNjQuMTU2LTczLjY0LDE2NC4xNTYtMTY0LjE1NlYxNjQuMTU2DQoJCUM1NTEuMDMzLDczLjY0LDQ3Ny4zOTMsMCwzODYuODc4LDB6IE00OTUuNiwzODYuODc4YzAsNjAuMDQ1LTQ4LjY3NywxMDguNzIyLTEwOC43MjIsMTA4LjcyMkgxNjQuMTU2DQoJCWMtNjAuMDQ1LDAtMTA4LjcyMi00OC42NzctMTA4LjcyMi0xMDguNzIyVjE2NC4xNTZjMC02MC4wNDYsNDguNjc3LTEwOC43MjIsMTA4LjcyMi0xMDguNzIyaDIyMi43MjINCgkJYzYwLjA0NSwwLDEwOC43MjIsNDguNjc2LDEwOC43MjIsMTA4LjcyMkw0OTUuNiwzODYuODc4TDQ5NS42LDM4Ni44Nzh6Ii8+DQoJDQoJCTxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMl8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjc1LjUxNyIgeTE9IjQuNTciIHgyPSIyNzUuNTE3IiB5Mj0iNTQ5LjcyIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIDAgNTU0KSI+DQoJCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNFMDlCM0QiLz4NCgkJPHN0b3AgIG9mZnNldD0iMC4zIiBzdHlsZT0ic3RvcC1jb2xvcjojQzc0QzREIi8+DQoJCTxzdG9wICBvZmZzZXQ9IjAuNiIgc3R5bGU9InN0b3AtY29sb3I6I0MyMTk3NSIvPg0KCQk8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojNzAyNEM0Ii8+DQoJPC9saW5lYXJHcmFkaWVudD4NCgk8cGF0aCBzdHlsZT0iZmlsbDp1cmwoI1NWR0lEXzJfKTsiIGQ9Ik0yNzUuNTE3LDEzM0MxOTYuOTMzLDEzMywxMzMsMTk2LjkzMywxMzMsMjc1LjUxNnM2My45MzMsMTQyLjUxNywxNDIuNTE3LDE0Mi41MTcNCgkJUzQxOC4wMzQsMzU0LjEsNDE4LjAzNCwyNzUuNTE2UzM1NC4xMDEsMTMzLDI3NS41MTcsMTMzeiBNMjc1LjUxNywzNjIuNmMtNDguMDk1LDAtODcuMDgzLTM4Ljk4OC04Ny4wODMtODcuMDgzDQoJCXMzOC45ODktODcuMDgzLDg3LjA4My04Ny4wODNjNDguMDk1LDAsODcuMDgzLDM4Ljk4OCw4Ny4wODMsODcuMDgzQzM2Mi42LDMyMy42MTEsMzIzLjYxMSwzNjIuNiwyNzUuNTE3LDM2Mi42eiIvPg0KCQ0KCQk8bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzNfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjQxOC4zMSIgeTE9IjQuNTciIHgyPSI0MTguMzEiIHkyPSI1NDkuNzIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMCA1NTQpIj4NCgkJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0UwOUIzRCIvPg0KCQk8c3RvcCAgb2Zmc2V0PSIwLjMiIHN0eWxlPSJzdG9wLWNvbG9yOiNDNzRDNEQiLz4NCgkJPHN0b3AgIG9mZnNldD0iMC42IiBzdHlsZT0ic3RvcC1jb2xvcjojQzIxOTc1Ii8+DQoJCTxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiM3MDI0QzQiLz4NCgk8L2xpbmVhckdyYWRpZW50Pg0KCTxjaXJjbGUgc3R5bGU9ImZpbGw6dXJsKCNTVkdJRF8zXyk7IiBjeD0iNDE4LjMxIiBjeT0iMTM0LjA3IiByPSIzNC4xNSIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></div>
        
          <div class="linkedin"><a href="https://www.linkedin.com" >linkedin</a>
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDM4MiAzODIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4MiAzODI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwMDc3Qjc7IiBkPSJNMzQ3LjQ0NSwwSDM0LjU1NUMxNS40NzEsMCwwLDE1LjQ3MSwwLDM0LjU1NXYzMTIuODg5QzAsMzY2LjUyOSwxNS40NzEsMzgyLDM0LjU1NSwzODJoMzEyLjg4OQ0KCUMzNjYuNTI5LDM4MiwzODIsMzY2LjUyOSwzODIsMzQ3LjQ0NFYzNC41NTVDMzgyLDE1LjQ3MSwzNjYuNTI5LDAsMzQ3LjQ0NSwweiBNMTE4LjIwNywzMjkuODQ0YzAsNS41NTQtNC41MDIsMTAuMDU2LTEwLjA1NiwxMC4wNTYNCglINjUuMzQ1Yy01LjU1NCwwLTEwLjA1Ni00LjUwMi0xMC4wNTYtMTAuMDU2VjE1MC40MDNjMC01LjU1NCw0LjUwMi0xMC4wNTYsMTAuMDU2LTEwLjA1Nmg0Mi44MDYNCgljNS41NTQsMCwxMC4wNTYsNC41MDIsMTAuMDU2LDEwLjA1NlYzMjkuODQ0eiBNODYuNzQ4LDEyMy40MzJjLTIyLjQ1OSwwLTQwLjY2Ni0xOC4yMDctNDAuNjY2LTQwLjY2NlM2NC4yODksNDIuMSw4Ni43NDgsNDIuMQ0KCXM0MC42NjYsMTguMjA3LDQwLjY2Niw0MC42NjZTMTA5LjIwOCwxMjMuNDMyLDg2Ljc0OCwxMjMuNDMyeiBNMzQxLjkxLDMzMC42NTRjMCw1LjEwNi00LjE0LDkuMjQ2LTkuMjQ2LDkuMjQ2SDI4Ni43Mw0KCWMtNS4xMDYsMC05LjI0Ni00LjE0LTkuMjQ2LTkuMjQ2di04NC4xNjhjMC0xMi41NTYsMy42ODMtNTUuMDIxLTMyLjgxMy01NS4wMjFjLTI4LjMwOSwwLTM0LjA1MSwyOS4wNjYtMzUuMjA0LDQyLjExdjk3LjA3OQ0KCWMwLDUuMTA2LTQuMTM5LDkuMjQ2LTkuMjQ2LDkuMjQ2aC00NC40MjZjLTUuMTA2LDAtOS4yNDYtNC4xNC05LjI0Ni05LjI0NlYxNDkuNTkzYzAtNS4xMDYsNC4xNC05LjI0Niw5LjI0Ni05LjI0Nmg0NC40MjYNCgljNS4xMDYsMCw5LjI0Niw0LjE0LDkuMjQ2LDkuMjQ2djE1LjY1NWMxMC40OTctMTUuNzUzLDI2LjA5Ny0yNy45MTIsNTkuMzEyLTI3LjkxMmM3My41NTIsMCw3My4xMzEsNjguNzE2LDczLjEzMSwxMDYuNDcyDQoJTDM0MS45MSwzMzAuNjU0TDM0MS45MSwzMzAuNjU0eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></div>
          <div class="twitter"><a href="https://www.twitter.com" >twitter</a>
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQxMC4xNTUgNDEwLjE1NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDEwLjE1NSA0MTAuMTU1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBzdHlsZT0iZmlsbDojNzZBOUVBOyIgZD0iTTQwMy42MzIsNzQuMThjLTkuMTEzLDQuMDQxLTE4LjU3Myw3LjIyOS0yOC4yOCw5LjUzN2MxMC42OTYtMTAuMTY0LDE4LjczOC0yMi44NzcsMjMuMjc1LTM3LjA2Nw0KCWwwLDBjMS4yOTUtNC4wNTEtMy4xMDUtNy41NTQtNi43NjMtNS4zODVsMCwwYy0xMy41MDQsOC4wMS0yOC4wNSwxNC4wMTktNDMuMjM1LDE3Ljg2MmMtMC44ODEsMC4yMjMtMS43OSwwLjMzNi0yLjcwMiwwLjMzNg0KCWMtMi43NjYsMC01LjQ1NS0xLjAyNy03LjU3LTIuODkxYy0xNi4xNTYtMTQuMjM5LTM2LjkzNS0yMi4wODEtNTguNTA4LTIyLjA4MWMtOS4zMzUsMC0xOC43NiwxLjQ1NS0yOC4wMTQsNC4zMjUNCgljLTI4LjY3Miw4Ljg5My01MC43OTUsMzIuNTQ0LTU3LjczNiw2MS43MjRjLTIuNjA0LDEwLjk0NS0zLjMwOSwyMS45LTIuMDk3LDMyLjU2YzAuMTM5LDEuMjI1LTAuNDQsMi4wOC0wLjc5NywyLjQ4MQ0KCWMtMC42MjcsMC43MDMtMS41MTYsMS4xMDYtMi40MzksMS4xMDZjLTAuMTAzLDAtMC4yMDktMC4wMDUtMC4zMTQtMC4wMTVjLTYyLjc2Mi01LjgzMS0xMTkuMzU4LTM2LjA2OC0xNTkuMzYzLTg1LjE0bDAsMA0KCWMtMi4wNC0yLjUwMy01Ljk1Mi0yLjE5Ni03LjU3OCwwLjU5M2wwLDBDMTMuNjc3LDY1LjU2NSw5LjUzNyw4MC45MzcsOS41MzcsOTYuNTc5YzAsMjMuOTcyLDkuNjMxLDQ2LjU2MywyNi4zNiw2My4wMzINCgljLTcuMDM1LTEuNjY4LTEzLjg0NC00LjI5NS0yMC4xNjktNy44MDhsMCwwYy0zLjA2LTEuNy02LjgyNSwwLjQ4NS02Ljg2OCwzLjk4NWwwLDBjLTAuNDM4LDM1LjYxMiwyMC40MTIsNjcuMyw1MS42NDYsODEuNTY5DQoJYy0wLjYyOSwwLjAxNS0xLjI1OCwwLjAyMi0xLjg4OCwwLjAyMmMtNC45NTEsMC05Ljk2NC0wLjQ3OC0xNC44OTgtMS40MjFsMCwwYy0zLjQ0Ni0wLjY1OC02LjM0MSwyLjYxMS01LjI3MSw1Ljk1MmwwLDANCgljMTAuMTM4LDMxLjY1MSwzNy4zOSw1NC45ODEsNzAuMDAyLDYwLjI3OGMtMjcuMDY2LDE4LjE2OS01OC41ODUsMjcuNzUzLTkxLjM5LDI3Ljc1M2wtMTAuMjI3LTAuMDA2DQoJYy0zLjE1MSwwLTUuODE2LDIuMDU0LTYuNjE5LDUuMTA2Yy0wLjc5MSwzLjAwNiwwLjY2Niw2LjE3NywzLjM1Myw3Ljc0YzM2Ljk2NiwyMS41MTMsNzkuMTMxLDMyLjg4MywxMjEuOTU1LDMyLjg4Mw0KCWMzNy40ODUsMCw3Mi41NDktNy40MzksMTA0LjIxOS0yMi4xMDljMjkuMDMzLTEzLjQ0OSw1NC42ODktMzIuNjc0LDc2LjI1NS01Ny4xNDFjMjAuMDktMjIuNzkyLDM1LjgtNDkuMTAzLDQ2LjY5Mi03OC4yMDENCgljMTAuMzgzLTI3LjczNywxNS44NzEtNTcuMzMzLDE1Ljg3MS04NS41ODl2LTEuMzQ2Yy0wLjAwMS00LjUzNywyLjA1MS04LjgwNiw1LjYzMS0xMS43MTJjMTMuNTg1LTExLjAzLDI1LjQxNS0yNC4wMTQsMzUuMTYtMzguNTkxDQoJbDAsMEM0MTEuOTI0LDc3LjEyNiw0MDcuODY2LDcyLjMwMiw0MDMuNjMyLDc0LjE4TDQwMy42MzIsNzQuMTh6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" /></div>
      </div>
      
</body>
</html>

