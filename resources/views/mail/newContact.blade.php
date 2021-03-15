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
    Hey Admin,
    {{$contact['fname']}} {{$contact['lname']}}, contacted you {{link_to(env('APP_URL').'/'.$contact['id'], 'view details here', [], null)}}



</p>



<p>
    Thanks,
    <br>
    {{env('APP_NAME')}} Team
</p>

</body>
</html>
