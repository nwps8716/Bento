<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>訂便當系統</title>

        <link href="../views/css/bootstrap.min.css" rel="stylesheet">
        <link href="../views/css/test.css" rel="stylesheet">
        <script src="../views/js/main.js"></script>
    </head>
    <body>
        {include file="views/navbar.tpl"}

        {if isset($message) }
            <script>
                alert('{$message}');
            </script>
        {/if}

    </body>
</html>