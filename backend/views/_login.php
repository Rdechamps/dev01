<div class="registration">
	<form action="index.php?request=connection" autocomplete="off" class="registration-form" enctype="multipart/form-data" method="POST">
    	<fieldset>
        	<input type="text" name="login" placeholder="LOGIN" required>
			<?php if(isset($_REQUEST['request']) && $_REQUEST['request'] == "ERR_LOG") { ?>
				<div>The given login contains wrong caracters.</div>
            <?php } ?>
            <input type="password" name="pwd" placeholder="PASSWORD" required>
            <?php if(isset($_REQUEST['request']) && $_REQUEST['request'] == "ERR_PWD") { ?>
				<div>The given password contains wrong caracters.</div>
            <?php } ?>
            <div></div>
        </fieldset>
        <fieldset>
        	<input type="submit" value="CONNECT">
            <input type="reset" value="REFRESH">
        </fieldset>
    </form>
</div>