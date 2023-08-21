<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="bio.php" method="POST">
        <h4>Form for submission</h4>
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="user" placeholder="User Name">
        <input type="email" name="mail" placeholder="User Email">
        <input type="password" name="pass" placeholder="User Password">
        <input type="number" name="number" placeholder="User Number">
        <label for="cars">Choose a car:</label>
        <select id="cars" name="car">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
        </select>
        <input type="submit" name="btn">

    </form>
</body>
</html>