<?php require '../class7/redirection.php'; ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title>Calculator</title>
    <script src="calculator.js"></script>
    <link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>
    <table>
        <form>
        <tr>
            <th colspan="4">
            <p id="result">0</p>
            </th>
        </tr>
        <tr>
            <th>
                <input type="button" id="One" onclick="GetNumber(1)" value="1"></input>
            </th>
            <th>
                <input type="button" id="Two" onclick="GetNumber(2)" value="2"></input>
            </th>
            <th>
                <input type="button" id="Three" onclick="GetNumber(3)" value="3"></input>
            </th>
            <th>
                <input type="button" id="Addition" onClick="SetOperationCode(1)" value="+"></input>
            </th>
        </tr>
        <tr>
            <th>
                <input type="button" id="Four" onclick="GetNumber(4)" value="4"></input>
            </th>
            <th>
                <input type="button" id="Five" onclick="GetNumber(5)" value="5"></input>
            </th>
            <th>
                <input type="button" id="Six" onclick="GetNumber(6)" value="6"></input>
            </th>
            <th>
                <input type="button" id="Substruction" onClick="SetOperationCode(2)" value="-"></input>
            </th>
        </tr>
        <tr>
            <th>
                <input type="button" id="Seven" onclick="GetNumber(7)" value="7"></input>
            </th>
            <th>
                <input type="button" id="Eight" onclick="GetNumber(8)" value="8"></input>
            </th>
            <th>
                <input type="button" id="Nine" onclick="GetNumber(9)" value="9"></input>
            </th>
            <th>
                <input type="button" id="Multiplication" onClick="SetOperationCode(3)" value="*"></input>
            </th>
        </tr>
        <tr>
            <th>
                <input type="button" id="Zero" onclick="GetNumber(0)" value="0"></input>
            </th>
            <th>
                <input type="button" id="Clear" onClick="Start()" value="C"></input>
            </th>
            <th>
                <input type="button" id="Division" onClick="SetOperationCode(4)" value="/"></input>
            </th>
            <th>
                <input type="button" id="Calculate" onclick="SetResult()" value="="></input>
            </th>
        </tr>
        </form>
    </table>
</body>
</html>
