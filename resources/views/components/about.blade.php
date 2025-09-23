<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <style>
        .main-content-container {
            max-width: 900px; 
            margin: 0 auto;   
            padding: 0 1rem;
        }
        .about-header {
            margin-bottom: 2.5rem; 
            text-align: center;
        }
        .about-title {
            font-size: 2.5em; 
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        .about-description {
            font-size: 1.1em;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto; 
        }
        .funfact-list {
            list-style-type: none; 
            padding: 0;
            margin: 0;
            display: grid;
            gap: 1.5rem; 
        }
        .funfact-card {
            background: #fdfdfd;
            border: 1px solid #e9ecef;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: left;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .funfact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08);
        }
        .funfact-card-title {
            font-size: 1.25em;
            font-weight: bold;
            color: #34495e;
            margin: 0 0 0.5rem 0;
        }
        .funfact-card-excerpt {
            color: #666;
            margin: 0 0 1.25rem 0; 
            font-size: 1em;
            line-height: 1.6;
        }
        .funfact-card-link {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 0.6rem 1.2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 0.9em;
            transition: background-color 0.3s;
        }
        .funfact-card-link:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            color: #7f8c8d;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 2.5rem;
        }
        .pagination li a,
        .pagination li span {
            color: #007bff;
            padding: 0.5rem 0.75rem;
            margin: 0 2px;
            border: 1px solid #dee2e6;
            text-decoration: none;
            transition: background-color .3s;
        }
        .pagination li.active span {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
        .pagination li.disabled span {
            color: #6c757d;
            pointer-events: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .pagination li a:hover {
            background-color: #e9ecef;
        }
        .pagination svg {
            width: 1em;
            height: 1em;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="main-content-container">
        <header class="about-header">
            <br>
            <br>
            <h1 class="about-title">Fun Facts About Me</h1>
            <p class="about-description">These are my several funfacts, click for more details!</p>
        </header>

        <ul class="funfact-list">
            {{-- Menggunakan variabel $funfact sesuai kode asli Anda --}}
            @foreach($funfact as $fact)
                <li class="funfact-card">
                    <h2 class="funfact-card-title">{{ $fact->name }}</h2>
                    {{-- Mengakses 'fact' sebagai array sesuai kode asli Anda --}}
                    <p class="funfact-card-excerpt">{{ $fact['fact'] }}</p>
                    {{-- Link dikembalikan ke bentuk asli Anda --}}
                </li>
            @endforeach
        </ul>

        {{ $funfact->links() }}
    </div>
</body>
</html>
