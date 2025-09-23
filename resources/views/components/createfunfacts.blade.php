<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Funfact Baru</title>
    {{-- Saya asumsikan Anda juga akan memanggil navbar dan CSS utama di sini --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        /* === PENAMBAHAN CSS UNTUK LAYOUT TENGAH === */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;   /* MENGUBAH ARAH FLEX MENJADI VERTIKAL */
            justify-content: center; /* Membuat konten di tengah (horizontal) */
            align-items: center;     /* Membuat konten di tengah (vertikal) */
            min-height: 100vh;       /* Tinggi minimal 1 layar penuh */
            padding-top: 100px;      /* Memberi ruang lebih untuk navbar di atas */
            box-sizing: border-box;
        }
        /* ========================================= */

        /* === CSS BARU UNTUK JUDUL HALAMAN === */
        .page-title {
            color: #2c3e50;
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 1.5rem; /* Memberi jarak ke form di bawahnya */
            text-align: center;
        }
        /* ==================================== */

        .form-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #555;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus,
        textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }
        button[type="submit"] {
            width: 100%;
            padding: 0.85rem;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        .cancel-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #7f8c8d;
            text-decoration: none;
            transition: color 0.3s;
        }
        .cancel-link:hover {
            color: #34495e;
        }
        .error-container {
            background-color: #fbeae5;
            color: #c0392b;
            border: 1px solid #c0392b;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        .error-container ul {
            margin: 0;
            padding-left: 1.25rem;
        }
    </style>
</head>
<body>
    {{-- Memasukkan navbar Anda --}}
    @include('partials.navbar')

    {{-- Kita bungkus konten utama agar lebih rapi --}}
    <main>
        <h1 class="page-title">Buat Funfact Baru</h1>

        <div class="form-container">
            @if ($errors->any())
                <div class="error-container">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('funfact.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Funfact Title</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="fact">The Fact</label>
                    <textarea id="fact" name="fact" rows="4" required>{{ old('fact') }}</textarea>
                </div>

                <button type="submit">Save Funfact</button>
            </form>
             <a href="{{ route('funfact.index') }}" class="cancel-link">Cancel</a>
        </div>
    </main>

</body>
</html>

