<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - {{ $nama_kampus }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        img {
            width: 200px;
        }
        section {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <h1>{{ $nama_kampus }}</h1>
    <h3>{{ $slogan }}</h3>

    <img src="{{ asset($logo) }}" alt="Logo PCR">

    <section>
        <h2>Visi</h2>
        <ul>
            @foreach ($visi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Misi</h2>
        <ul>
            @foreach ($misi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Sejarah Singkat</h2>
        @foreach ($sejarah as $paragraf)
            <p>{{ $paragraf }}</p>
        @endforeach
    </section>

</body>
</html>
