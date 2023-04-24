<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css"> 
</head>
<body>
    <form action="calculadora.php" id="formcalc" method="post">
        <label>
            Número 1: <input class="caixa1" name="n1" type="text"><br>
        </label>
        <label>
            Número 2: <input class="caixa1" name="n2" type="text"><br>
        </label>
        <input class="caixa1" class="caixa2" name="btn" type="submit" value="+">
        <input class="caixa1" class="caixa2" name="btn" type="submit" value="-">
        <input class="caixa1" class="caixa2" name="btn" type="submit" value="*">
        <input class="caixa1" class="caixa2" name="btn" type="submit" value="/">
        <input class="caixa1" name="limp" type="reset" value="Limpar">
    </form>
</body>
</html>