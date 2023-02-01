<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1 class="font_size">User Contact Form Submission:</h1>

<h2>A user has sent a contact form</h2>

<p>Name: <strong>{{ $details['name'] }}</strong></p>
<p>Email: <strong>{{ $details['email'] }}</strong></p>
<p>Phone Number: <strong>{{ $details['phone_number'] }}</strong></p>
<p>Message: <strong>{{ $details['message'] }}</strong></p>

</body>
</html>