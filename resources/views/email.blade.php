<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test mail</title>
</head>
<body>

<h1>{{$details['title']}}</h1>
<ul>
    <li>
    <h2>Email :{{$details['email']}}</h2>
    </li>
    <li>
    <h2>Phone : {{$details['phone']}}</h2>
    </li>
    <li>
    <h2>Position : {{$details['position']}}</h2>
    </li>
    <li>
    <h2>Company: {{$details['companyname']}}</h2>
    </li>
</ul>

<p> content : {{$details['content']}}</p>
    
</body>
</html>