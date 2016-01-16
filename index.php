<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="js/ajax_conn.js" type="text/javascript"></script>
    </head>
    <body>
        <!--<form id="form1" name="MainForm" method="get">-->
            Crud Search 
            <input type="search" name="searchKey" id="searchKey" value="walid" />
            <!--<input type="submit" class="search_btn" name="" value=" Search " />-->
        <!--</form>-->
        <div style="margin-bottom: 15px;float: right;"><a href="enter_form.php">Enter Form</a></div>
        <table cellpadding="9" cellspacing="7" border="2">
            <tr style="background-color:#000;color:#fff;">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Dept</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
        </table>
        <table class="data" cellpadding="9" cellspacing="7" border="2">
            <tr>
                <td>1</td>
                <td>walid</td>
                <td>rezk</td>
                <td>21</td>
                <td>php developer</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">remove</a></td>
            </tr>

        </table>
    </body>
</html>
