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

        .container input {
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
        <h1>Login</h1>
        <form action="#" method="POST">
            @csrf
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="button" id="loginBtn">Login</button>
        </form>
        <p>Don't have an account? <a href="/register">Register</a></p>
    </div>

 @endsection
