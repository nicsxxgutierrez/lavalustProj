<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <body>
        <br>
        <br>
        <br>
        <style>
            body {
                align-items: center;
            }
       /* Apply basic styling to the container */
.container {
    max-width: 400px;
    margin: auto;
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

/* Style the submit button */
.btn {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/* Add some spacing between the button and the "Back" button */
.btn + br {
    display: none;
}

/* Style the "Back" button */
.btn-back {
    background-color: #333;
}

/* Style links within paragraphs */
p a {
    text-decoration: none;
    color: #4caf50;
}

/* Hover effect on links */
p a:hover {
    text-decoration: underline;
}

            
            </style>
        </head>

        
        <div class="container">
            <h1>Register</h1>
            <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php } ?>
        <form action="registerauth" method="post">
        <div class="mb-3 mt-3">
                <label for="username" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter LastName" name="LastName">
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">First Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter FirstName" name="FirstName">
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Contact Number</label>
              <input type="text" class="form-control" id="username" placeholder="Enter ContactNo" name="ContactNo">
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Email</label>
                <input type="email" class="form-control" id="username" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
        <br>
        
        <p>Already have an account?<a href="login">Login</a></p>
         
    </body>


        
    </body>
</html>