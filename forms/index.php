<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="get.php" method="post" name="" id="" class="">

        <input type="text" placeholder="Name:" name="name" id="">
        <br>

        <label for="male">Male</label>
        <input type="radio" name="gender" value="male" id="male">
        <br>

        <label for="female">Female</label>
        <input type="radio" name="gender" value="female" id="female">
        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
        </select>
        <br>

        <label for="terms">Accept Terms</label>
        <input type="checkbox" name="terms" id="terms" value="ok">
        <br>

        <input type="submit" value="send">

    </form>
    
</body>
</html> 
