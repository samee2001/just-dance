<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #C20000;
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }

        .content {
            padding: 40px 30px;
            text-align: center;
            color: #555555;
        }

        .content h2 {
            font-size: 22px;
            color: #333333;
            margin-top: 0;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .button-container {
            margin: 30px 0;
        }

        .button {
            background-color: #C20000;
            color: #ffffff;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
        }

        .footer {
            background-color: #f9f9f9;
            padding: 30px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #C20000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>Just Dance</h1>
        </div>
        <div class="content">
            <h2>Thank You for Subscribing!</h2>
            <p>Welcome to the Just Dance family! We're thrilled to have you on board.</p>
            <p>You're now on the list to receive the latest news, updates on our classes, special offers, and more,
                directly to your inbox.</p>
            <div class="button-container">
                <a href="{{ url('/') }}" class="button">Visit Our Website</a>
            </div>
            <p>Get ready to move and groove with us!</p>
        </div>
        <div class="footer">
            <p><strong>Just Dance Academy</strong></p>
            <p>123 Rhythm Street, Colombo, Sri Lanka</p>
            <p>
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> | <a href="#">Unsubscribe</a>
            </p>
        </div>
    </div>
</body>

</html>