<html>
<head>
    <title>Motivaitonal — Your daily source of motivation!</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('{{$joke->background}}')">  
<div class="container">
    <div class="quote-container">
        <p class="text">{{$joke->text}}</p>
        <p class="author">— {{$joke->author}}</p>
    </div>
</div>
</body>
</html>
