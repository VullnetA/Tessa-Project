<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1 class="font_size">HAIRDRESSER ACCOUNT REQUEST:</h1>

<h2>A new user has requested to obtain a hairstylist acccount for Tessa.com</h2>

<p>Name: <strong>{{ $data['name'] }}</strong></p>
<p>Surname: <strong>{{ $data['surname'] }}</strong></p>
<p>Saloon: <strong>{{ $data['saloon'] }}</strong></p>
<p>Address: <strong>{{ $data['address'] }}</strong></p>

</body>
</html>