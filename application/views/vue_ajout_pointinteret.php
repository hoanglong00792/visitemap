<html>

<meta charset="utf-8"/>

<link rel="stylesheet" href="<?php echo css_url('foundation') ?>">
<link rel="stylesheet" href="<?php echo css_url('font-awesome/css/font-awesome.min') ?>">
<link rel="stylesheet" href="<?php echo css_url('css_ajout_pointinteret') ?>">
<link rel="stylesheet" href="<?php echo css_url('Jquery-ui/jquery-ui-1.10.4.custom.min') ?>">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="<?php echo js_url('jquery-ui-1.10.4.custom.min') ?>"></script>
<script src="<?php echo js_url('jquery.raty') ?>"></script>
<script src="<?php echo js_url('js_ajout_pointinteret') ?>"></script>


<h1> VisiteMap </h1>


<!-- Header and Nav -->

<div class="row">
    <div class="large-3 columns">
        <h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
    </div>
    <div class="large-9 columns">
        <ul class="inline-list right">
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
        </ul>
    </div>
</div>

<!-- End Header and Nav -->


<div class="row">

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">

        <form method='POST' action=''>
            <fieldset>
                <legend>Ajouter un point d'interet</legend>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="name_input" class="right"> Nom </label>
                    </div>
                    <div class="small-6 columns">
                        <input id="name_input" type="text" name="name"/>
                    </div>
                    <div class="small-1 columns"></div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="price_input" class="right"> Coût </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="price_input" type="text" name="price"/>
                    </div>
                    <div class="small-6 columns"></div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="date_input" class="right"> Date ouverture </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="date_input"  type="text" name="date" placeholder="JJ/MM/YYYY"/>
                    </div>
                    <div class="small-4 columns"></div>

                    <!-- <i id="datepickerImage" class="fa fa-calendar fa-2x"></i> -->

                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="location_input" class="right"> Position </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="location_input" type='text' name='location'/>
                    </div>
                    <i class="fa fa-globe fa-2x"></i>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="dragandrop" class="right"> Photo(s) </label>
                    </div>
                    <div class="small-9 columns">
                        <div id="dragandrop">Déposez vos photos ici</div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="http_title" class="right"> Vidéo </label>
                    </div>

                    <div class="small-8 columns">
                        <input id="video_input" type="text" name="video" placeholder="http://" />
                    </div>
                    <i id="add_video_link"  class="fa fa-plus-circle fa-2x"></i>
                    <div class="small-1 column"></div>

                </div>


                <div class="row">
                    <div class="small-3 columns">
                        <label for="description_input" class="right"> Description </label>
                    </div>
                    <div class="small-9 columns">
                        <textarea id="description_input" rows="4" cols="45" name="description"/></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="rating" class="right"> Note </label>
                    </div>
                    <div class="small-9 columns">

                        <span class="rating"></span>
                        <div id="rating"/></div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-7 columns"></div>
                    <div class="small-2 columns">
                        <input type="hidden" name="send" value="1" />
                        <input class="button" type="submit"/>
                    </div>
                </div>
            </fieldset>
        </form>


    </div>


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 pull-9 columns">
        <ul class="side-nav">
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
            <li><a href="#">Section 5</a></li>
            <li><a href="#">Section 6</a></li>
        </ul>
        <p><img src="http://placehold.it/320x240&text=Ad"/></p>
    </div>
</div>


<!-- Footer -->

<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-6 columns">
                <p>&copy; Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li><a href="#">Section 1</a></li>
                    <li><a href="#">Section 2</a></li>
                    <li><a href="#">Section 3</a></li>
                    <li><a href="#">Section 4</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>