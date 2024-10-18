<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <title>Laravel with React</title>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/js/index.jsx', 'resources/css/app.css'])
</head>
<body>
<noscript>You need to enable Javascript to run this app.</noscript>
<div id="root"></div>
</body>
</html>
