<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiCoders Admin Login</title>
    
    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #0f172a;
            font-family: system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background-color: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 4px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            backdrop-filter: blur(20px);
        }
        .form-control {
            background-color: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff !important;
            padding: 12px;
            border-radius: 4px;
        }
        .form-control:focus {
            background-color: rgba(255,255,255,0.08);
            border-color: #3b82f6;
            box-shadow: none;
        }
        .btn-login {
            background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
            border: none;
            color: #fff;
            padding: 12px;
            font-weight: 600;
            border-radius: 4px;
            transition: opacity 0.3s;
        }
        .btn-login:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="login-card text-center">
        <h3 class="text-white fw-bold mb-1">DigiCoders</h3>
        <p class="text-secondary text-sm mb-4">Sign in to administer training database</p>

        @if($errors->any())
            <div class="alert alert-danger text-start py-2 text-sm rounded-3">
                @foreach($errors->all() as $err)
                    <div class="mb-0">{{ $err }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label text-secondary text-sm">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}" placeholder="admin@digicoders.com">
            </div>
            
            <div class="mb-4 text-start">
                <label for="password" class="form-label text-secondary text-sm">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
            </div>

            <div class="mb-4 d-flex justify-content-between align-items-center text-sm">
                <div class="form-check text-start">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label text-secondary" for="remember">Remember me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-login w-100 mb-3">Sign In</button>
            <a href="{{ route('home') }}" class="text-secondary text-sm text-decoration-none">Back to Home</a>
        </form>
    </div>

</body>
</html>
