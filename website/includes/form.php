<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="
                <?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>
            ">
        <span class="error"><?php echo $first_name_Err; ?></span>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="
                <?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>
            ">
        <span class="error"><?php echo $last_name_Err; ?></span>

        <label for="email">Email</label>
        <input type="email" name="email" value="
                <?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>
            ">
        <span class="error"><?php echo $email_Err; ?></span>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="
                <?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>
            ">
        <span class="error"><?php echo $phone_Err; ?></span>

        <label for="gender">Gender</label>
        <ul>

            <li>
                <input type="radio" name="gender" value="female" <? if(isset($_POST['gender']) &&
                    $_POST['gender']=='female' ) echo 'checked="checked"' ; ?>
                >Female
            </li>

            <li>
                <input type="radio" name="gender" value="male" <? if(isset($_POST['gender']) && $_POST['gender']=='male'
                    ) echo 'checked="checked"' ;?>
                >Male
            </li>

            <li>
                <input type="radio" name="gender" value="other" <? if(isset($_POST['gender']) &&
                    $_POST['gender']=='other' ) echo 'checked="checked"' ;?>
                >Other
            </li>

        </ul>

        <span class="error">
            <?php echo $gender_Err; ?>
        </span>

        <label for="wines">Favorite Wines</label>
        <ul>

            <li>
                <input type="checkbox" name="wines[]" value="cab"
                    <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"' ;?>>Cabernet
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="merlot"
                    <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"' ;?>>Merlot
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="syrah"
                    <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"' ;?>>Syrah
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="melbec"
                    <?php if(isset($_POST['wines']) && in_array('melbec', $wines)) echo 'checked="checked"' ;?>>Melbec
            </li>

            <li>
                <input type="checkbox" name="wines[]" value="blend"
                    <?php if(isset($_POST['wines']) && in_array('blend', $wines)) echo 'checked="checked"' ;?>>Red Blend
            </li>

        </ul>

        <span class="error">
            <?php echo $wines_Err;   ?>
        </span>

        <label for="regions">Regions</label>
        <select name="regions">
            <option value="" NULL
                <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected"' ;?>>
                Select One</option>
            <option value="nw"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected"' ;?>>
                Northwest</option>
            <option value="sw"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected"' ;?>>
                Southwest</option>
            <option value="mw"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "selected"' ;?>>Midwest
            </option>
            <option value="ne"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected"' ;?>>
                Northeast</option>
            <option value="se"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected = "selected"' ;?>>
                Southeast</option>
            <option value="so"
                <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected = "selected"' ;?>>South
            </option>
        </select>
        <span class="error">
            <?php echo $regions_Err;   ?>
        </span>


        <label for="comments">
            <textarea name="comments">
            <?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?>
        </textarea>

            <span class="error">
                <?php echo $comments_Err;   ?>
            </span>

            <label for="privacy">Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="agree" <? if(isset($_POST['privacy']) &&
                        $_POST['privacy']=='agree' ) echo 'checked="checked" ' ;?>
                    >I agree</li>
            </ul>
            <span class="error">
                <?php echo $privacy_Err;   ?>
            </span>


            <input type="submit" value="Send it">
            <p><a href="">Reset</a></p>
    </fieldset>
</form>