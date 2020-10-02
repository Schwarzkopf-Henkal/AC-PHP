<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <style>
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .table-form {
            margin: 1em auto;
            font-size: 1.1em
        }

        .table-form tr {
            height: 2em
        }

        .table-form tr td {
            height: 2em
        }

        .table-form td td {
            padding-bottom: 0;
            margin-bottom: 0
        }

        .table-form .field-name {
            text-align: right;
            padding: .5em 2em .5em .5em;
            width: 7.5em
        }

        .table-form input {
            padding: .1em
        }
        .table-form .submit {
            padding: 0 1em;
            margin: 1em 1em 0;
            height: 2em;
            color: #000
        }
        .table-form tr.subscription-row {
            height: 1.2em;
            line-height: 1.2em;
            font-size: .7em
        }
        .table-form tr.subscription-row td {
            height: 1.2em;
            line-height: 1.2em
        }
        .table-form textarea.bottom-space-small {
            margin-bottom: 5px
        }
        .roundbox {
            border: 1px solid #b9b9b9;
            position: relative
        }
    </style>
</head>

<body>
    <div class="roundbox" style="width: 25em;margin: 2em auto">
        <form action="consume-form.php" method="post">
            <table class="table-form">
        <tbody>
            <tr>
                <td>Handle/Email:</td><td><input style="width: 15em" type="text" name="Identity"></td>
            </tr>
            <tr>
                <td>Password:</td><td><input style="width: 15em" type="text" name="Password"></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td><input type="checkbox">Tikkle, if you want.</td>
            </tr>
            <tr>
                <td>&nbsp;</td><td><input type="submit"></td>
            </tr>
        </tbody>
            </table>
        </form>
        <p class="center"><a href="http://49.234.17.22/wp-admin">Login</a>, or<a href="http://49.234.17.22/wp-login.php">Register</a></p>
    </div>
    <?php
    echo "This is index.php.";
    ?>
</body>

</html>