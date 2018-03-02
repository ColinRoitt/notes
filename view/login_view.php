<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./view/css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
        <nav>
            <div class="nav-wrapper">
                <a class="brand-logo center">NotesApp</a>
            </div>
        </nav>
        <br/>

        <div class="container">
            <div class="center">
                <h5>
                    Welcome to your notes app
                </h5>
            </div>
            <br/>
            <h6 class="center" id="addSection">Log in</h6>            
            <div class="row">
                <form class="col s12" method="POST">

                    <div class="row">
                        <div class="input-field col s8 m6 l6 offset-s2 offset-m3 offset-l3">
                            <i class="material-icons prefix">chat</i>
                            <input id="username" type="text" class="validate" name="username">
                            <label for="username">Username</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s8 m6 l6 offset-s2 offset-m3 offset-l3">
                            <i class="material-icons prefix">chat</i>
                            <input id="pword" type="password" class="validate" name="pword">
                            <label for="pword">Password</label>
                        </div>
                    </div>                    
                    
                    
                    <div class="row">
                        <div class="center">
                            <button class="btn waves-effect waves-light " type="submit" onclick="form.submit()">Log in</button>
                        </div>
                        </div>
                    </div>


                </form>
                
            </div>

            <div class="divider"></div>
            <br/>

            <footer class="page-footer">
                <div class="container">
                    <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                    © 2018 Copyright Text
                    </div>
                </div>
            </footer>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./view/js/bin/materialize.min.js"></script>
    <script>
        // init code        
        $(document).ready(function() {
            if (document.cookie.indexOf('Loggedin') != -1) {
                window.location.href = 'index.php';
            }
        });
                 
    </script>
  </body>
</html>