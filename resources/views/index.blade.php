<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Email Template</h1>
    <div class="display:flex; justify-content:between">
        <a href="{{ url('/reset') }}" style="text-decoration: none;background-color:rgb(180, 42, 42);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Reset Password</a>
        <a href="{{ url('/register') }}" style="text-decoration: none;background-color:rgb(6, 138, 2);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Register</a>
        <a href="{{ url('/approve') }}" style="text-decoration: none;background-color:rgb(118, 2, 138);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Approve</a>
        <a href="{{ url('/shortlist') }}" style="text-decoration: none;background-color:rgb(54, 2, 138);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Shortlist</a>
        <a href="{{ url('/interview') }}" style="text-decoration: none;background-color:rgb(138, 2, 86);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Interview</a>
        <a href="{{ url('/selected') }}" style="text-decoration: none;background-color:rgb(2, 106, 138);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >Selected</a>
        <a href="{{ url('/received') }}" style="text-decoration: none;background-color:rgb(138, 118, 2);color:white;padding:0.8rem 1.4rem;border-radius:5px "  >After Apply</a>


        <a href="{{ url('/announce') }}" style="text-decoration: none;background-color:teal:white;padding:0.8rem 1.4rem;border-radius:5px "  > Announcement</a>
    </div>
</body>
</html>