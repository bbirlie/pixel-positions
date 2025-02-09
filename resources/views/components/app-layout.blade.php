<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@400;700;800&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Pixel Postions</title>
</head>
<body class="bg-black text-white font-hanken">
  <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/20">
      <div><a href="/">LOGO</a></div>
      <div class="space-x-6 font-bold">
        <a href="">Jobs</a>
        <a href="">Careers</a>
        <a href="">Salaries</a>
        <a href="">Companies</a>
      </div>
      <div>
        <a href="">Post a Job</a>
      </div>
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
      {{$slot}}
    </main>
  </div>
</body>
</html>