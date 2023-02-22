<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1 class="font_size">PURCHASE RECEIPT</h1>

<h2>Thank you for your purchase.</h2>
<h2>You will receive your delivery shortly</h2>

<h3>Order Information</h3>
<p>Name: <strong>{{ $data['buyername'] }}</strong></p>
<p>Surname: <strong>{{ $data['buyersurname'] }}</strong></p>
<p>Delivered to: <strong>{{ $data['address'] }}</strong></p>
<p>Products bought: <strong>{{ $data['products'] }}</strong></p>
<p>Total price: <strong>{{ $data['price'] }}</strong></p>

</body>
</html>