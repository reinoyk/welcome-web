<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $funfact['id'] }} - Details</title>
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
        .fact-box {
            background-color: #e9e9e9;
            padding: 30px;
            border-radius: 8px;
            text-align: left;
            margin-bottom: 20px;
        }
        .fact-title {
            font-weight: bold;
            color: #333;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .fact-detail {
            color: #666;
            line-height: 1.6;
            margin-bottom: 0;
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
        <h1>Fun Fact Details</h1>
        <div class="fact-box">
            <p class="fact-title">{{ $funfact['name'] }}</p>
            <p><strong>{{ $funfact['fact'] }}</strong></p>
            <p class="fact-detail">
                @if($funfact['id'] == 1)
                    Basketball has been my passion since childhood. I started playing when I was 10 years old at the local community center, and it quickly became more than just a hobby. The feeling of dribbling down the court, the satisfaction of making a perfect shot, and the camaraderie with teammates have shaped who I am today. Whether it's a casual game with friends or watching professional matches, basketball continues to be a significant part of my life, teaching me discipline, teamwork, and perseverance.
                @elseif($funfact['id'] == 2)
                    My journey with the guitar began five years ago when I received an acoustic guitar as a birthday gift. What started as curiosity quickly transformed into a deep love for music. I taught myself through online tutorials and countless hours of practice, learning everything from classic rock riffs to gentle acoustic melodies. Playing the guitar has become my creative outlet and stress reliever, allowing me to express emotions that words cannot capture. The ability to create music with my own hands brings me immense joy and satisfaction.
                @elseif($funfact['id'] == 3)
                    Blue has always been more than just a color preference for me—it represents tranquility and depth. From the calming blue of the ocean to the endless possibilities of a clear blue sky, this color has consistently drawn my attention and admiration. I find myself naturally gravitating towards blue in my clothing choices, room decorations, and even in the art I appreciate. There's something about blue that brings me peace and clarity, making it not just my favorite color but a reflection of my personality and outlook on life.
                @endif
            </p>
        </div>
        <a href="/About">Back to Fun Facts</a>
    </div>
</body>
</html>