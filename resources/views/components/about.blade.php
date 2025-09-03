<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #e9e9e9;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            transition: background-color 0.3s ease;
        }
        li:hover {
            background-color: #dcdcdc;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        p {
            margin: 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fun Facts About Me</h1>
        <ul>
            @foreach($funfact as $fact)
                <li>
                    <p><strong>{{ $fact['name'] }}</strong></p>
                    <p>{{ $fact['fact'] }}</p>
                    <a href="/About/{{ $fact['id'] }}">Click for more detail</a>
                </li>
            @endforeach
        </ul>
        <a href="/" class="back-link">Back to home</a>
    </div>
</body>
</html>
