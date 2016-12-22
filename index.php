<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Assessment Results 2016 
        </title>

    </head>
    <body>
        <div align="center" style="width: 100%;margin-top:10%;">
            <h1>Assessment Results 2016 </h1></br>
            <form method="post" action="scripts/save.php">
                <table>
                    <tr>
                        <td>
                            Student Reg.No:
                            
                        </td>
                        <td>
                           <!-- <input type="text" name="regno">-->
                            <?php echo $_SESSION["username"]?>
                            </br>
                            &nbsp;
                        </td> 
                    </tr>

                    <tr>
                        <td>
                            Subject code: 
                        </td>
                        <td>
                            <select id="subject" name="subject">
                                <option value="ICT2212">ICT2212</option>
                                <option value="ICT2222">ICT2222</option>
                                <option value="ICT2232">ICT2232</option>
                                <option value="ICT2243">ICT2243</option>
                                <option value="ICT2252">ICT2252</option>
                                <option value="ICT2262">ICT2262</option>
                                <option value="ICT2272">ICT2272</option>
                                <option value="ACU2210">ACU2210</option>
                            </select> 
                            </br>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Assessment name:
                        </td>
                        <td>
                            <select id="ass" name="ass">
                                <option value="ICA01">ICA01</option>
                                <option value="ICA02">ICA02</option>
                                <option value="ICA03">ICA03</option>
                            </select>
                            </br>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Grade:</td>
                        <td>
                            <input type="text" name="grade"></br></br>
                        </td>
                    <tr>
                </table>
                <button type="submit" id="save">Save</button> 
                <button type="reset" id="cancel">Cancel</button> 
            </form>
        </div>
    </body>
</html>
