<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .verification-code { 
            font-size: 24px; 
            font-weight: bold; 
            text-align: center;
            padding: 20px;
            background: #f5f5f5;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Email Verification</h2>
        <p>Hello,</p>
        <p>Thank you for registering. Please use the following verification code to verify your email address:</p>
        
        <div class="verification-code">
            {{ $code }}
        </div>

        <p>This code will expire in 24 hours.</p>
        
        <p>If you didn't create an account, you can safely ignore this email.</p>
        
        <p>Best regards,<br>Your Application Team</p>
    </div>
</body>
</html>
