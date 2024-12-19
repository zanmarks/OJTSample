@extends('layouts.app')

@section('content')
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background: linear-gradient(135deg, #6e8efb, #a777e3); */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container input, .container button, .container label {
            margin-bottom: 1rem;
            padding: 0.8rem;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .container button {
            background-color: #6e8efb;
            color: #fff;
            padding: 0.8rem;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #5d7fe1;
        }

        .container p {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .container a {
            color: #6e8efb;
            text-decoration: none;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        
        <form id="registerForm">
        @csrf
            <label for="profile-pic">Upload Profile Picture</label>
            <input type="file" id="profile_pic" name="profile_pic" accept="image/*" required>
            <input type="text" id="Firstname" name="Firstname" placeholder="First Name" required>
            <input type="text" id="Lastname" name="Lastname" placeholder="Last Name" required>
            <input type="number" id="phone" name="phone" placeholder="Phone number" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="Confirm_Pass" name="Confirm_Pass" placeholder="Confirm Password" required>
            <button type="button" id="registerBtn">Register</button>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
@endsection