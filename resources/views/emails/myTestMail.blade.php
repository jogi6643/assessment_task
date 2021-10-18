<!DOCTYPE html>
<html>

<head>
    <title>ItsolutionStuff.com</title>
</head>

<body>
    <h1>{{ $details['email'] }}</h1>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    @php
        $date = strtotime($details['time']);
    @endphp
    <p>{{ date('D/M/Y h:i:s', $date);  }}</p>
    <p>Thank you</p>
</body>

</html>
