<!--HEADER CODE-->
<?php
    include 'admin_header.php';
?>
<?php
    if(!isset($_SESSION['user']))
    {
        header("Location: ../enter.php");
        exit();
    }
?>

<!--BODY CODE-->
<style>
    section{
        margin-bottom: 3em;
        margin-top: 2em;
        margin-left: 40%;
    }
</style>
<section>
    <h2>Admin Profile Details</h2>
    <div>
        <p>&nbsp;&nbsp;Your account details are below:</p>
        <table>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Admin ID:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['id']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>A. Name:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['name']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email ID:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['user']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Contact:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['contact']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['address']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pin Code:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['pincode']);
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
  </section>


<!--FOOTER CODE-->
<?php
    include 'admin_footer.php';
?>