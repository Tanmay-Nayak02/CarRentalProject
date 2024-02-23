<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #1864ab;
        }

        .success-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .success-icon {
            color: #00cc00;
            font-size: 48px;
        }

        .message {
            margin-top: 10px;
            font-size: 18px;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">&#10004;</div>
        <div class="message">Payment Successful!</div>
        <h4>Thank You For Using Our Rental Service.
            We Are Happy To See You Again!!!!</h4>
        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>

</html>
