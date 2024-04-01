<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <h2>Logout</h2>
    <p>Apakah Anda yakin ingin keluar?</p>
    <form id="logoutForm" action="logout.php" method="post">
        <button type="submit">Ya, Keluar</button>
    </form>

    <script>
        // Auto submit form saat halaman dimuat
        document.getElementById("logoutForm").submit();
    </script>
</body>

</html>