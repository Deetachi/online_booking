<!DOCTYPE html>
<html>
<head>
    <title>Invitation EMail</title>
</head>
<body>
    <h1>Hello, {{ $user['name'] }}</h1>
    <p>Please click the link below to accept your invitation to Tashicell Online Booking System.</p>

		<a href="http://127.0.0.1:8001/login{{ $user['invitation_token'] }}"> Accept Invitation</a>

    <p>Thank you</p>
</body>
</html>
