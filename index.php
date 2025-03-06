<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #28a745;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        #result {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required /><br /><br />

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required /><br /><br />

            <button type="submit">Login</button>
        </form>

        <div id="result"></div> <!-- Output nya muncul di sini -->
    </div>

    <script>
        $(document).ready(function(){
            $("#loginForm").submit(function(event){
                event.preventDefault(); // Mencegah reload halaman
                var formData = $(this).serialize(); // Mengambil data input

                $.post("output.php", formData, function(response){
                    $("#result").html(response); // Menampilkan hasil di bawah tombol login
                });
            });
        });
    </script>

</body>
</html>
