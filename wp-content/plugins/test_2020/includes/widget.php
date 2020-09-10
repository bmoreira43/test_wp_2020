<h1>
Widget UI
</h1>
<?php global $current_user; wp_get_current_user(); ?>


<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
        <div class="form-group" method="post" action="options.php">
            <label class="col-md-4 control-label" for="textinput">Name of the Opponent</label>
            <div class="col-md-4">
                <h1>
                Opponent: <?=$current_user->display_name?>
                </h1>
            </div>
            <br>

            <div class="col-md-4">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
            </div>
            <div class="col-md-4">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
            </div>
            <div class="col-md-4">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
                <input id="NumberInput" name="Minimum" type="number" placeholder="0" min="0" max="1" class="form-control input-md">
            </div>
            <div class="col-md-4">
                <?php submit_button(); ?>
            </div>

        </div>

    </fieldset>
</form>