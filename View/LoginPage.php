<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoginValidator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
<form action="../Service/LoginService.php" method="post" id="login">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    <button type="submit" name="submit">LOGIN</button>
</form>
<h1 id="result"></h1>
<script>
    /*
    $(document).ready(function () {
        $("#login").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: ".../Service/LoginValidator.php",
                method: "POST",
                data: $(this).serialize(),
                dataType: "text",
                success: function (response) {
                    var result = JSON.parse(response);
                    $('#result').text(result);
                },
                error: function (xhr, status, error) {
                    console.log(error);
                    $('#result').text("An error occurred.");
                }
            });
        });
    });
*/
</script>
</body>
</html>