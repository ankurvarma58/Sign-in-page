<!DOCTYPE html>
<html>
    <head>
        <title>Sign-up</title>
            <link rel="icon" type="image/ico" href="image/1.png" />
            <link rel="stylesheet" type="text/css" href="style.css"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body align = "center" bgcolor="#34495e">
        <font color="white">
        <form action="c.html" class="box">
            <fieldset>
                <legend><h1>Sign-up</h1></legend>
                    Name:<input type = text placeholder = "Your Name" required>
                    Age:<input type = number placeholder = "20" required>
                    Phone Number:<input type = number placeholder = "call" required>
                    Email:<input type = text placeholder = "xyx@abc.com" required>
                    Address:<textarea placeholder = "your permanent address" cols ="20" rows = "4" required></textarea>
                    Gender:<div><input type = radio name = "a">Male<input type = radio name = "a" required>Female</div>
                    Taste:<div><input type = checkbox>Veg <input type = checkbox required>Non-Veg</div>
                    Country:<select class="box" required><option value="India" selected>INDIA</option><option value="Bangladesh">BANGLADESH</option><option value="Pakistan">PAKISTAN</option></select>
                    Upload CV:<input class="alert" type = file required>
                    Reference:<input class="alert" type = text required placeholder="xyz">
                    <input  type = "submit" name = "go" value ="GO">
            </fieldset>
        </form>
            <?php include 'back.php';?>
        </font>
        <?php include 'footer1.php';?>
    </body>
</html>