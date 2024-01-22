<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameter Modifier</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            color: #333;
            text-align: center;
        }
    </style>    

</head>
<body>
    <h2>URL Parameter Modifier</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="platform">Select Platform:</label>
        <select name="platform" id="platform">
            <option value="Microsoft">Microsoft</option>
            <option value="Linux">Linux</option>
        </select>
        <br><br>
        <label for="url">Enter URL:</label>
        <textarea name="url" id="url" rows="4" cols="50"></textarea>
        <br><br>
        <input type="submit" value="Generate Modified URL">
    </form>
</body>
</html>