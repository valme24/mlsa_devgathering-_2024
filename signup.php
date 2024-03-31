<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $choice = $_POST['choice'];
    
    // Outputting the values below the form
    echo "<h2>Submitted Form Values:</h2>";
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Choice(s): " . implode(", ", $choice) . "</p>"; // If multiple choices are selected
    
    // Additional processing or storage of form data can be done here
    
    // Exit to prevent the form from being displayed again
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 20px;
            padding: 20px;
            margin-left: 400px;
            margin-right: 400px;
        }

        #signup_form {
            width: 500px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        #signup_head {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="checkbox"],
        input[type="radio"] {
            width: calc(100% - 22px);
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="button"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        label {
            margin-left: 5px;
            display: block;
        }

        .subscription-option {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        #othersText {
            display: none;
        }

    </style>
    <script>
        function toggleOtherTextInput() {
            var othersCheckbox = document.getElementById("others");
            var othersTextInput = document.getElementById("othersText");
            if (othersCheckbox.checked) {
                othersTextInput.style.display = "inline";
            } else {
                othersTextInput.style.display = "none";
            }
        }
    </script>
</head>
<body>
<div id="signup_form">
    <h1 id="signup_head">Sign Up</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="subscription-option">
            <label for="email">Email Id:</label>
            <input type="email" name="email" required>
        </div>
        <div class="subscription-option">
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <div class="subscription-option">
            <label for="gender">Gender:</label>
            <input type="radio" id="gender" name="gender" value="Male">Male
            <input type="radio" id="gender" name="gender" value="Female">Female
        </div>
        <div class="subscription-option">
            <h3>Choose subscriptions you have:</h3>
            <input type="checkbox" id="amazon" name="choice[]" value="amazon">
            <label for="amazon">Amazon</label>
            <input type="checkbox" id="Netflix" name="choice[]" value="netflix">
            <label for="Netflix">Netflix</label>
            <input type="checkbox" id="Myntra" name="choice[]" value="myntra">
            <label for="Myntra">Myntra</label>
            <input type="checkbox" id="Flipkart" name="choice[]" value="flipkart">
            <label for="Flipkart">Flipkart</label>
            <input type="checkbox" id="others" name="choice[]" value="others" onchange="toggleOtherTextInput()">
            <label for="Other">Other</label>
            <input type="text" id="othersText" name="othersText" placeholder="Other subscription">
        </div>
        <input type = "button" value = "Submit" name = "submit" onclick = "location.href = 'home.php' ">
    </form>
</div>
</body>
</html
