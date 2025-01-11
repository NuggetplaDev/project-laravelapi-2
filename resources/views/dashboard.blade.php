<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <p><strong>Name:</strong> <span id="userName"></span></p>
    <p><strong>Email:</strong> <span id="userEmail"></span></p>

    <script>
        window.onload = function() {
            const user = JSON.parse(localStorage.getItem('user'));

            if (user) {
                const userName = user.name;
                const userEmail = user.email;

                console.log('User Name:', userName);
                console.log('User Email:', userEmail);

                // แสดงข้อมูลผู้ใช้ในหน้า dashboard
                document.getElementById('userName').textContent = userName;
                document.getElementById('userEmail').textContent = userEmail;
            } else {
                console.log('No user data found.');
                // ถ้าไม่พบข้อมูลผู้ใช้
                document.body.innerHTML = '<h2>No user data found. Please login again.</h2>';
            }
        };
    </script>
</body>
</html>