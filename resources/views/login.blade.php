<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { 
            background: #f5f5f5; 
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 320px;
            padding: 20px;
            background: white;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .error {
            background: #ffdddd;
            padding: 10px;
            color: #a80000;
            border-left: 4px solid red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Login</h3>

    <form method="POST" action="/login">
        @csrf
        
        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button>Login</button>
    </form>
</div>

</body>
</html>
