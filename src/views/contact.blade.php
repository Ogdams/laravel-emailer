<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Contact us anytime </h1>
    <form action="{{ route('contact') }}" method="post">
    @csrf
    <input type="text" name = "name" placeholder="Enter Your Name">
    <input type="email" name = "email" placeholder="Enter Your Email">
    <textarea name = "message" cols = "30" rows = "10" placeholder="Enter Message"></textarea>
    <input type="submit" value="submit">

    </form>
</body>
</html>
