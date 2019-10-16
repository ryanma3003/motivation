<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Motivational - Your Daily Source of Motivation!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link href="http://fonts.googleapis.com/css?familyAlegreya:400,700|Roboto+condensed" rel="stylesheet" type="text/css">
</head>
<body stle="backgound-image : url('/img/{{$quote->background}}')">
    <div class="container">
        <div class="quote-container">
            <p class="text">{{$quote->text}}</p>
            <p class="text">{{$quote->author}</p>
        </div>
    </div>
</body>
</html>