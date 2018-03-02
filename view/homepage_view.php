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
                <ul id="dropdown1" class="dropdown-content">
                    <li><a ><?= $userName ?></a></li>
                    <li><a id="logout">logout</a></li>
                </ul>
                <a class="brand-logo center">NotesApp</a>
                <ul class="right">
                    <li><a class="dropdown-button right" href="#!" data-activates="dropdown1">Logged in<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
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
            <h6 class="center" id="addSection">Add new note</h6>            
            <div class="row">
                <form class="col s12" method="GET">

                    <div class="row">
                        <div class="input-field col s8 m5 l5">
                            <i class="material-icons prefix">chat</i>
                            <input id="newNoteName" type="text" class="validate" name="noteName">
                            <label for="newNoteName">Name of note</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="newNoteContent" class="materialize-textarea" data-length="400" name="noteContent"></textarea>
                            <label for="newNoteContent">Contents of note</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s8 m6 l4">
                            <i class="material-icons prefix">date_range</i>
                            <input id="dueDate" type="text" class="datepicker" name="dueDate">
                            <label for="dueDate">Due date</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s8, m6 l4">
                            <i class="material-icons prefix">format_color_fill</i>
                            <select name="color">
                                <option value="red" selected>red</option>
                                <option value="purple">purple</option>
                                <option value="green">green</option>
                                <option value="indigo">indigo</option>
                                <option value="amber">amber</option>
                            </select>
                            <label>Color</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <button class="btn waves-effect waves-light " type="submit" name="action" onclick="form.submit()">Add note
                                <i class="material-icons right">add_circle_outline</i>
                        </button>
                    </div>
                </form>
                
            </div>

            <div class="divider"></div>
            <br/>

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="row">

                    <div id="noNotesMsg" class="col s12 m6 l4 offset-m3 offset-l4" style="display:<?= $displayNoNotesMsg ?>">
                        <p class="flow-text center">You have no notes to show</p>
                    </div>
                    <? foreach($userCards as $card):?>
                        <div class="col s12 m6 l4" id="card<?= $card->cardId ?>">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="./view/assets/note-<?= $card->color ?>.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?= $card->title ?><i class="material-icons right">more_vert</i></span>
                                    <p>DUE: <?=$card->dueDate?></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= $card->title ?><i class="material-icons right">close</i></span>
                                    <p>DUE: <?=$card->dueDate?></p>
                                    <p><?=$card->content?></p>
                                    <p class="delete-card" style="position:absolute; bottom:0; Color:red;" id="card<?= $card->cardId ?>">Delete</p>
                                    
                                </div>
                            </div>
                        </div>
                    <? endforeach?>                                            

                    </div>
                </div>
            </div>

            <div class="fixed-action-btn vertical">
                <a class="btn-floating btn-large pulse" id="editButton">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating red" id="publish"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating indigo" id="delete"><i class="material-icons">delete</i></a></li>
                    <li><a class="btn-floating green" href="#addSection" id="add"><i class="material-icons">add</i></a></li>
                </ul>
            </div>

        </div>

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
    <script type="text/javascript" src="./view/js/jquery.cookie.js"></script>
    <script>
        // init code        
        $(document).ready(function() {
            $('select').material_select();
            $('.datepicker').pickadate({
                minDate: new Date(),
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 50, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                format: 'yyyy/m/d',
                closeOnSelect: false // Close upon selecting a date,
            });
        });
        
        var cardsOpen = false;
        $('#delete').click(function(){
            if(cardsOpen){
                $('#editButton > .material-icons').html('mode_edit')
                $('.card-title').click();    
                cardsOpen = false;  
            }else{
                $('#editButton > .material-icons').html('delete')
                $('img.activator').click();    
                cardsOpen = true;  
            }
        });

        $('.delete-card').click(function(){
            $.ajax({
                    url: 'control/delete.php',
                    data:{
                        cardId: $(this).attr('id').replace(/\D/g,'')
                    }
                    });
            $('#' + $(this).attr('id')).remove();
            if($('#card').length == 0){
                $('#noNotesMsg').css('display', 'inline')
            }
        });

        $('#logout').click(function(){
            $.removeCookie("Loggedin");
            window.location.href = '/';
        });



         
    </script>
  </body>
</html>