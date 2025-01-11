<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <form id="loginForm">
        <label for="username">username:</label>
        <input type="username" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                event.preventDefault(); 

                // Get the form data
                var formData = {
                    username: $('#username').val(),
                    password: $('#password').val(),
                };

                // Send AJAX request to Laravel API
                $.ajax({
                    url: 'http://server2.paoprachin.com:5888/api/authentication/CheckLogin',  
                    type: 'POST',  // HTTP method
                    data: $.param(formData),  
                    contentType: 'application/x-www-form-urlencoded',  
                    success: function(response) {

                        if (response.statusCode === 200) {
                            for (let i = 0; i < response.data.user.length; i++){ 

                                const user = response.data.user[i];
                                const userName = user.name;
                                const userEmail = user.email;
                            
                        console.log('User Name:', userName);
                        console.log('User email:', userEmail);
                        localStorage.setItem('user', JSON.stringify(user));
                        window.location.href = '/dashboard';
                        }} else {
                        // If login failed, show an error message
                        $('#response').html('Login failed. Please try again.');
                }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        $('#response').html('Login failed. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>