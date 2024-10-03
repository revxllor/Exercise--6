<?php
include 'phpheader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #3AAFA9 url('bgtech1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .form-container {
            margin-top: 20px;
            display: inline-block;
            text-align: left;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .form-container label {
            font-size: 1.2em;
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container input {
            font-size: 1em;
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container input:focus {
            outline: none;
            border-color: #004d40;
            box-shadow: 0 0 5px #004d40;
        }

        .form-container button {
            font-size: 1.2em;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            background-color: #004d40;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #00332e;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2em;
            border: 2px solid #004d40;
            border-radius: 5px;
            background-color: #fff;
            color: #004d40;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #004d40;
            color: #fff;
        }
    </style>
</head>
<body>
  <div style="height: 100px;"></div>

<div class="form-container">
    <form action="intprog.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" required>
        <button type="submit">Submit</button>
    </form>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = intval($_POST['age']);

    if (empty($name) || $age <= 0) {
        die('Invalid input');
    }
    header("Location: intprog.php?name=" . urlencode($name) . "&age=" . urlencode($age));
    exit();
}
?>
<div style="height: 300px;"></div>

<?php include 'footer.php';?>

</body>
</html>
