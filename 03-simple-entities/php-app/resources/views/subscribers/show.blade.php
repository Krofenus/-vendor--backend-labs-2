<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Subscriber</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .subscriber-details {
            margin-bottom: 20px;
        }

        .subscriber-details strong {
            font-weight: bold;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Subscriber Details</h1>
        <!-- Вывод данных о подписчике -->
        <div class="subscriber-details">
            <p><strong>ID:</strong> {{ $subscriber->id }}</p>
            <p><strong>Name:</strong> {{ $subscriber->name }}</p>
            <p><strong>Email:</strong> {{ $subscriber->email }}</p>
            <p><strong>Tags:</strong> {{ is_array($subscriber->tags) ? implode(', ', $subscriber->tags) : $subscriber->tags }}</p>
        </div>

        <!-- Кнопка "Back to List" -->
        <a href="{{ route('subscribers.index') }}">Back to List</a>
    </div>
</body>
</html>
