
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission Received</title>
    <style>
        /* Reset default styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
        /* Container styles */
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        /* Header styles */
        h1 {
            color: #333;
            text-align: center;
        }
        /* Details styles */
        .details {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* Footer styles */
        p.footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
    
        <h1>Contact from <a href="https://techalphainstitute.com/">techalphainstitute</a></h1>
        <div class="details">
            <p><strong>Name:</strong> {{ $formData['name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone Number:</strong> {{ $formData['phone'] }}</p>
            <p><strong>Message:</strong> {{ $formData['comments'] }}.</p>
        </div>
        <p class="footer">This email is generated automatically in response to a contact form submission. Please do not reply to this email.</p>
    </div>
</body>
</html>


