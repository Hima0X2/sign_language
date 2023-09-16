
<!DOCTYPE html>
<html>
<?php
session_start();
if (empty($_SESSION['email'])) {
    
    header("location: LogIn.php");
}
?>
<head>
    <title>Sign language detection</title>
    <style>
       body {
            background-image: url('colors.gif'); /* Replace 'your-background-image.gif' with the path to your GIF image */
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: slide-up 1s ease-out;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 18px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Enter letters to display sign language images:</h1>
        <form method="post">
            <label for="letters">Letters:</label>
            <input type="text" id="letters" name="letters" placeholder="Enter letters">
            <button type="submit" formaction="process.php">Translate</button>
            <button type="submit" formaction="dynamic.php">Show Dynamically</button>
        </form>
    </div>
</body>

</html>