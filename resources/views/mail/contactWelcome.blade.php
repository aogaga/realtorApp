<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
        <p>
            Hey {{$contact['fname']}} {{$contact['lname']}}, Thanks for reaching out to us, someone from our sales team will get in touch with you ASAP.
        </p>


        <p>
            Thanks,
            <br>
            {{env('APP_NAME')}} Team
        </p>

</body>
</html>
