<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        $name = $email = $gender = $comment = $website = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input(data: $_POST["name"]);
            $email = test_input(data: $_POST["email"]);
            $gender = test_input(data: $_POST["gender"]);
            $comment = test_input(data: $_POST["comment"]);
            $website = test_input(data: $_POST["website"]);
            $output = array($name, $email, $website, $gender, $comment);
        }
        function test_input($data): string{
            $data = trim(string: $data);
            $data = stripslashes(string: $data);
            $data = htmlspecialchars(string: $data);
            return $data;
        }
        
        ?>
        
        <h1>PHP Form Validation Example</h1>
        <div id="inputform">
            <form method="post" action="<?php echo htmlspecialchars(string: $_SERVER["PHP_SELF"]);?>">
            <table>
                <tr>
                    <th>
                        Name:
                    </th>
                    <td>
                        <input class="textinput" type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <th>
                        Email:
                    </th>
                    <td>
                        <input class="textinput" type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <th>
                        Website:
                    </th>
                    <td>
                        <input class="textinput" type="text" name="website">
                    </td>
                </tr>
                <tr>
                    <th>
                        Comment:
                    </th>
                    <td>
                        <textarea rows="5" cols="40" name="comment">Comment Here</textarea>
                    </td>
                </tr>
            </table>
            <br><br>
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Other" checked="checked">Other<br>
            <br><br>
            <input type="submit" name="submit" value="Submit"><br>
            </form>
        </div>
        <div id="output">
            <?php
                for($i = 0; $i <= count(value: $output)-1; $i++){
                    echo $output[$i]."<br>";
                }
            ?>
        </div>
    </body>
</html>