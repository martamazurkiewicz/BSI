<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Zaloguj</title>
    <style>
        input {
            border-color: grey;
        }

        table {
            border: 1px solid black;
            width: 20%;
            border-radius: 1em;
            margin-left: 1%;
            padding-left: 1%;
            padding-top: 1%;
            padding-right: 1%;
            padding-bottom: 1%;
            border-collapse: separate;
            border-spacing: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type=text] {
            width: 90%;
            height: 1.5em;
        }

        input:hover {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table>
        <form method="POST" action="verifyUser.php">
            <tr>
                <th>
                    <label for="username">Login</label>
                </th>
                <th>
                    <input type="text" name="username" placeholder="admin">
                </th>
            </tr>
            <tr>
                <th>
                    <label for="password">Hasło</label>
                </th>
                <th>
                    <input type="text" name="password" placeholder="admin">
                </th>
            </tr>
            <tr>
                <?php
                if (isset($_GET['message'])) {
                    echo "<p style='color: red'>Login/hasło: admin/admin</p>";
                }
                ?>
            </tr>
            <tr>
                <th></th>
                <th>
                    <input type="submit" style="width: 10em;height: 2.2em;" value="Zaloguj" />
                </th>
            </tr>
        </form>
    </table>
</body>

</html>