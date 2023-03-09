<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title></title>
</head>
<body>
    <!-- get for basic information 'post is for sensitive data' -->
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            <label>Choose Operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="multi">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit">Calculate!</button>
    </form>
    
</body>
</html>

<!-- URL: for learning https://www.youtube.com/watch?v=STJfIu8T3kM -->