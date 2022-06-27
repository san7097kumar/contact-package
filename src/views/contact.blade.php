<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contact Us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name Please">
        <input type="text" name="email" placeholder="Your Email Please">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
        <input type="submit" value="submit">
    </form>    
</body>
</html>