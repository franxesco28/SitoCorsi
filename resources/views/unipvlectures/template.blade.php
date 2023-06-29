<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTERFACCIA</title>
     @vite(['resources/js/app.js'])

</head>
<body>

<div class="container d-flex justify-content-center align-items-center">

    <h1 style="margin-top: 3rem; margin-bottom: 3rem; font-size: 3rem">Corsi Università Pavia</h1>

</div>


<x-template-corsi :courses="$courses" :lectures="$data">
</x-template-corsi>


</body>
</html>
