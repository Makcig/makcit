<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение</title>
</head>
<body>
    <h2>У вас новое сообщение</h2>
    <p><strong>Отправитель:</strong> {{ $messageData['name'] }} ({{ $messageData['email'] }})</p>
    <p><strong>Сообщение:</strong></p>
    <p>{{ $messageData['message'] }}</p>
</body>
</html>
