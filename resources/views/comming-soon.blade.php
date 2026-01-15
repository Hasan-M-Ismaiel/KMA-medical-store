<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coming Soon</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- استدعاء CSS العام -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #3a7e9f;
            text-align: center;
            flex-direction: column; /* لتكديس العناصر عموديًا */
        }
        img {
            max-width: 200px; /* حجم اللوجو */
            margin-bottom: 30px;
        }
        h1 { font-size: 48px; margin-bottom: 20px; }
        p { font-size: 20px; }
    </style>
</head>
<body>
    <img src="{{ asset('assets/img/KMA-log.png') }} " alt="KMA logo">
    <div>
        <h1>Coming Soon</h1>
        <p>Our website is under construction. Stay tuned!</p>
    </div>
</body>
</html>
