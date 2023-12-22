<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Apply basic styling to the container */
        .container {
          /* Center the content horizontally */
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style form elements */
        .form-label {
            font-weight: bold;
        
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            
        }

        .form-check {
            margin-bottom: 15px;
        }

        /* Style the submit button */
        .btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            align-items: center;
        }

        /* Style the link for "Don't have an account yet?" */
        p a {
            text-decoration: none;
            color: #4caf50;
        }

        /* Hover effect on the link */
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="loginAuth" method="post">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label des">Username</label>
                <input type="email" class="form-control" id="username" placeholder="Enter Username" name="email"  required > 
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password"  required >
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn" name="submit">Log in</button><br><br>
        </form>
        <p>Don't have an account yet?<a href="register">SignUp</a></p>
    </div>
</body>
</html>
