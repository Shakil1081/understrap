<?php
/**
 * Template Name: Usermanagement Page Template
 *
 * Template for displaying for Usermanagement page.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="container">
    <?php get_sidebar(); ?>
    <div id="main-content" class="main-content col-md-10">

        <!-- #secondary -->
        <?php
// define variables and set to empty values
        $userName = $userEmail = $userRole = $assprojectname = "";
        $userNameErr = $userEmailErr = $userRoleErr = $assprojectnameErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["userName"])) {
                $userNameErr = "Name is required";
            } else {
                $userName = test_input($_POST["userName"]);
            }

            if (empty($_POST["userEmail"])) {
                $userEmailErr = "Email is required";
            } else {
                $userEmail = test_input($_POST["userEmail"]);
            }


            if (empty($_POST["assprojectname"])) {
                $assprojectnameErr = "project name is required";
            } else {
                $assprojectname = test_input($_POST["assprojectname"]);
            }


            if (empty($_POST["userRole"])) {
                $userRoleErr = "User Role is required";
            } else {
                $userRole = test_input($_POST["userRole"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

                <form method="post" action="http://54.236.4.195/dashboard/user-management/" class="col-sm-8 col-md-offset-2"> 
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Select a Project</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="projectlistdropdown" name="assprojectname"></select>
                        <?php echo $assprojectnameErr; ?>
                        </div>


                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">User Name</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control" name="userName"  required>
                            <?php echo $userNameErr; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">User Email</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="email" name="userEmail"  required>
                            <?php echo $userEmailErr; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">User Role</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control" name="userRole"  required>
                            <?php echo $userRoleErr; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-7 col-form-label"></label>
                        <div class="col-md-3">
                            <input type="submit" class="btn btn-success" name="submit" value="Submit"> 
                        </div>
                    </div>
                </form>
                <?php
                if ($userEmail) {// the message
                    echo "<h2>Your Email information:</h2>";
                    echo $assprojectname;
                    echo "<br>";
                    echo $userName;
                    echo "<br>";
                    echo $userRole;
                    echo "<br>";
                    echo $userEmail;
                    $msg = $assprojectname . "<br>" . $userName . "<br>" . $userRole . "<br>" . $userEmail;

                    // use wordwrap() if lines are longer than 70 characters
                    $msg = wordwrap($msg, 70);
                    $to = "d7716297@urhen.com";
                    $subject = "Independent Project Analysis";

                    /* $header = "From:abc@somedomain.com \r\n";
                      $header .= "Cc:afgh@somedomain.com \r\n"; */
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html\r\n";

                    $retval = mail($to, $subject, $msg, $header);

                    if ($retval == true) {
                        echo "Message sent successfully...";
                    } else {
                        echo "Message could not be sent...";
                    }
                }
                ?>


            </div>

        </div>
    </div>
</div>
<!-- #content -->

<script>
    $.ajax({
        type: "GET",
        url: "http://54.236.4.195/api/projects.php",
        dataType: "json",
        success: function (data) {
            var text = '';

            for (i = 0; i < data.length; i++) {
                text += '<option value="' + data[i].projectName + '">' + data[i].projectName + '</option>';
            }

            $('#projectlistdropdown').append(text);
        }


    });
</script>

<?php get_footer(); ?>
