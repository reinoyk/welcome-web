<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Funfact</title>

    <style>
        /* === STYLE DASAR UNTUK BODY === */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; 
            margin: 0;
            padding: 0;
            padding-top: 70px; 
        }

        .details-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem; 
        }

        .details-main-title {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: bold;
        }

        .box-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e9ecef;
        }

        .funfact-content-box,
        .category-info-box {
            background-color: #ffffff;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
            margin-bottom: 1.5rem;
        }

        .category-info-box {
            border-left: 5px solid #007bff; 
        }

        .funfact-content-box p,
        .category-info-box p {
            line-height: 1.7;
            color: #555;
        }

        .back-link {
            display: inline-block;
            margin-top: 1rem;
            color: #7f8c8d;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="details-container">
        <h1 class="details-main-title">{{ $funfact->name }}</h1>

        <div class="funfact-content-box">
            <h3 class="box-title">Fact Details</h3>
            <p>{{ $funfact->fact }}</p>
        </div>

        <div class="category-info-box">
            <h3 class="box-title">Category Information</h3>
            <p>
                <strong>Category Name:</strong>
                {{ $funfact->category->name }}
                <br>
                <strong>Description:</strong>
                {{ $funfact->category->description }}
            </p>
        </div>

        <a href="{{ route('funfact.index') }}" class="back-link">← Back to Funfacts List</a>
    </div>
</body>
</html>

