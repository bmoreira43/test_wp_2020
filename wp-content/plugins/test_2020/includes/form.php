<h1>
    This is the form
</h1>

<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="form-group" method="post" action="options.php"> 
            <label class="col-md-4 control-label" for="textinput">Win Word</label>
            <div class="col-md-4">
                <input id="textinput" name="WinWord" type="text" placeholder="Win Word" class="form-control input-md">
            </div>
            <label class="col-md-4 control-label" for="textinput">Lose Word</label>
            <div class="col-md-4">
                <input id="textinput" name="Lose Word" type="text" placeholder="Lose Word" class="form-control input-md">
            </div>
            <label class="col-md-4 control-label" for="textinput">Tie Word</label>
            <div class="col-md-4">
                <input id="textinput" name="TieWord" type="text" placeholder="Tie Word" class="form-control input-md">
            </div>
            <label class="col-md-4 control-label" for="textinput">Minimum of matches to win(max: 5)
            </label>
            <div class="col-md-4">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="1" max="5" class="form-control input-md">
            </div>
            <div class="col-md-4">
                <?php submit_button(); ?>
            </div>
        </div>

    </fieldset>
</form>