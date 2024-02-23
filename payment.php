<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
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

        .payment-form {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px
        }

        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Payment Information</h2>
        <form action="success.php" method="POST">
            <div class="form-group">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" placeholder="XXXX-XXXX-XXXX" required minlength="11" maxlength="12">
            </div>

            <div class="form-group">
                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required minlength="5" maxlength="5">
            </div>

            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="password" id="cvv" name="cvv" placeholder="***" required minlength="2" maxlength="3">
            </div>

            <div class="form-group">
                <label for="price">PRICE:</label>
                <input type="number" id="price" name="price" placeholder="Price" required>
            </div>

            <button type="submit" class="btn">Submit Payment</button>
        </form>
    </div>
</body>

</html>
