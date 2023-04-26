<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        input {
            border-radius: 20%;
            text-align: center;
            color: black;

        }

        </style>
    </head>

    <body>
        <form action="config.php" method="post" style="text-align:center">
            <!-- <div>
                <input type="text" name="name" id="name" placeholder="name">
            </div> -->
            <!-- <br> -->
            <div>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <!-- <br> -->
            <!-- <div>
                <input type="email" name="email" id="email" placeholder="email">
            </div> -->
            <br>
            <div>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <br>
            <hr>
            <br>
            <!-- , <div>
                <select name="paymentmethod" id="paymentmethod">
                    <option value="ETH">ETH</option>
                    <option value="BTC">BTC</option>
                    <option value="Bank-Transfer">Bank-Transfer</option>
                </select>
                </div>
                <br>
                <hr>
                <div>
                    <input type="tel" inputmode="numeric" maxlength="16" placeholder="xxxx xxxx xxxx xxxx" name="ccn">
                    CCN
                </div>
                <br>
                <div>
                    <input type="tel" inputmode="numeric" maxlength="10" placeholder="MM / YY" name="expiry">
                    Expiry
                </div>
                <br>
                <div>
                    <input type="tel" inputmode="numeric" maxlength="4" placeholder="xxx" name="cvc">
                    CVC
                </div>
                <br>
-->


            <input type="submit" name="submit" id="submit" value="Ok">
        </form>

    </body>

</html>
