<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="{{ url('register.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required />
        
            <label for="email">Email</label>
            <input type="email" name="email" required />
        
            <label for="number">Phone Number:</label>
            <input type="text" name="phone" required />
        
            <label for="password">Password</label>
            <input type="password" name="password" required />
        
            <input type="submit" name="register" value="Register" />
        </form>        
        <p>Already have an account? <a href="login">Login here</a></p>
    </div>

</body>

</html>
