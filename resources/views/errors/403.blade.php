<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5 pt-5">
    <div class="alert alert-danger text-center">
        <h2 class="display-3">403</h2>
        <p class="display-5">Oops! Something is wrong.</p>
        <p class="display-5"><a href="{{route('admin.index')}}"><b style="color: #007bff">Please, go back this way.</b></a>
    </div>
</div>
</body>
</html>