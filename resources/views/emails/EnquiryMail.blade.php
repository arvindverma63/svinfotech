<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Received</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .footer {
            background-color: #f8f9fa;
            color: #6c757d;
            padding: 10px;
            font-size: 12px;
            text-align: center;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="header text-center">
        <h2>New Enquiry Received</h2>
    </div>

    <div class="content">
        <p class="fw-bold">Full Name:</p>
        <p>{{ $data['fullName'] }}</p>

        <p class="fw-bold">Email:</p>
        <p>{{ $data['email'] }}</p>

        <p class="fw-bold">Phone Number:</p>
        <p>{{ $data['phoneNumber'] }}</p>

        <p class="fw-bold">Message:</p>
        <p>{{ $data['body'] }}</p>
    </div>

    <div class="footer">
        <p>Thank you for reaching out to us. We will get back to you shortly.</p>
    </div>
</div>

</body>
</html>
