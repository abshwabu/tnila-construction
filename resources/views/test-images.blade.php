<!DOCTYPE html>
<html>
<head>
    <title>Image Test</title>
</head>
<body>
    <h1>Image Test Page</h1>
    
    <h2>Direct Path</h2>
    <img src="/img/about-home.jpg" alt="About Home Direct">
    <img src="/img/Worker-1.jpg" alt="Worker 1 Direct">
    
    <h2>Asset Helper</h2>
    <img src="{{ asset('img/about-home.jpg') }}" alt="About Home Asset">
    <img src="{{ asset('img/Worker-1.jpg') }}" alt="Worker 1 Asset">
    
    <h2>URL Helper</h2>
    <img src="{{ url('img/about-home.jpg') }}" alt="About Home URL">
    <img src="{{ url('img/Worker-1.jpg') }}" alt="Worker 1 URL">
    
    <h2>Absolute Path</h2>
    <img src="{{ asset('/img/about-home.jpg') }}" alt="About Home Absolute">
    <img src="{{ asset('/img/Worker-1.jpg') }}" alt="Worker 1 Absolute">
</body>
</html> 