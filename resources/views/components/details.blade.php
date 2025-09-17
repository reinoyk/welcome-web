<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $funfact['id'] }} - Details</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
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