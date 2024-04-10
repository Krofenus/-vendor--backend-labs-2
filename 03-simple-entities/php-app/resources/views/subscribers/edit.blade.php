<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subscriber</title>
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

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
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
        <h1>Edit Subscriber</h1>
        <form action="{{ route('subscribers.update', $subscriber->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $subscriber->name }}"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ $subscriber->email }}"><br>
            <label for="tags">Tags:</label><br>
            <input type="text" id="tags" name="tags" value="{{ is_array($subscriber->tags) ? implode(', ', $subscriber->tags) : $subscriber->tags }}"><br>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('subscribers.index') }}">Back to List</a>
    </div>
</body>
</html>
