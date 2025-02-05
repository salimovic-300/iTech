<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe Oublié</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">

    <img src="/storage/photo/logo1.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> 
    <h1 class="text-center">Mot de Passe Oublié</h1>
    
    @if (session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="text-center">
            <label for="email" >Adresse Email :</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Envoyer le lien de réinitialisation</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
