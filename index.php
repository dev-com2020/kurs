<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First PHP Page</title>
</head>
<body>
    <div>
        <h1>The Heading</h1>
        <p><b>Strona testowa</b><br>
        <?php include("kod/skrypt.php");?>
        <br>
        <?php include("kod/napisy.php");?>
        <!-- <?php require("skrypt2.php");?> -->
            <!-- <script language="php">
                echo "<h2 style='text-align:center;'>Test PHP nr 2:)</h2>";
            </script>
            <?
                echo "<h2 style='text-align:center;'>Test PHP nr 2:)</h2>";
            ?>
            <%
                echo "<h2 style='text-align:center;'>Test PHP nr 2:)</h2>";
            %> -->
            <br>To jest dalsza część strony....
        </p>        
    </div>
</body>

<script>

// JavaScript code goes here

</script>
</html>