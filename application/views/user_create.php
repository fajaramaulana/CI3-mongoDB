<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Codeigniter MongoDB Create Read Update Delete Example</title>
</head>

<body>
    <div id="container">
        <div>
            <a href="<?php echo site_url('/user'); ?>">Back To users</a>
        </div>

        <div id="body">
            <?php
            if (isset($error)) {
                echo '<p style="color:red;">' . $error . '</p>';
            } else {
                echo validation_errors();
            }
            ?>

            <form action="<?php base_url("create-user") ?>" method="POST" name="form" id="form">
                <h5>Full Name</h5>
                <input type="text" name="name" value="<?php echo set_value('name'); ?>" size="50" />

                <h5>Email Address</h5>
                <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

                <p><input type="submit" name="submit" value="Submit" /></p>

            </form>

        </div>
    </div>
</body>

</html>