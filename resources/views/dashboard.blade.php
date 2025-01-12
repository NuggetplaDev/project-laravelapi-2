<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <div class="dashboard-container">
    <p><strong>Name:</strong> <span id="userName"></span></p>
    <p><strong>Surname:</strong> <span id="userSurname"></span></p>
    <p><strong>Email:</strong> <span id="userEmail"></span></p>
    </div>
    <script>
        window.onload = function() {
            const user = JSON.parse(localStorage.getItem('user'));

            if (user) {
                const userName = user.name;
                const userSurname = user.surname;
                const userEmail = user.email;

                // แสดงข้อมูลผู้ใช้ในหน้า dashboard
                document.getElementById('userName').textContent = userName;
                document.getElementById('userSurname').textContent = userSurname;
                document.getElementById('userEmail').textContent = userEmail;
            } else {
                console.log('No user data found.');
                document.body.innerHTML = '<h1>404 Not Found</h1><p>User data not found.</p>';
                // ถ้าไม่พบข้อมูลผู้ใช้
                window.location.href = '/';
            }
        };
    </script>
</body>
</html>