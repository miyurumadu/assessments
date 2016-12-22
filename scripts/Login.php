<html>

    <title>
        Login
    </title>

    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <script type="text/javascript">
        $(document).ready(function () {
            $("input").css("background-color", "yellow");
        });
    </script>
    <body>
        <div align="left" style="margin-top: 5%;margin-left: 5%">New to here?<a href="addstudents.php">Create an Account</a></div>
        <div align="center" style="margin-top: 10%;">
            <h1>Login</h1></br></br>
            <form method="post" action="auth.php">
                <table>
                    <tr>
                        <td>
                            User Name: 
                        </td>
                        <td>
                            <input type="text" name="user" id="intro">
                            </br>
                            &nbsp;
                        </td>
                    </tr>
                   <!-- <tr><td>&nbsp;</td></tr>-->
                    <tr>
                        <td>
                            Password: 
                        </td>
                        <td>
                            <input type="password" name="pw">
                        </td>
                    </tr>
                </table>
                </br></br>
                <button type="submit" class="submitBtn">Login</button>
                <button type="reset" class="resetBtn">Cancel</button>
            </form>
            <div align="bottom"><a href="#">Forgot Password?</a></div>
        </div>
        
    </body>
</html>


