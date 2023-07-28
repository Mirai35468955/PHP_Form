<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Form Demo</title>
</head>
<body>
    <main >
        <form action="subscribe.php" method="POST">
            <div class="container">
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div class="container">
                <label for="name">Email:</label>
                <input type="email" name="email" required="required" placeholder="Enter your email" />
            </div>
            <br>
            <br>
            <p class="container">Which player do you like?</p>
            <div class="container">
                <input type="radio" name="player" id="messi" value="Messi"/>
                <label for="messi">Messi</label>

                <input type="radio" name="player" id="ronald" value="Ronald"/>
                <label for="ronald">Ronald</label>

            </div>
            <br>
            <p class="container">What type of vehicle do you ride </p>
            <div class="container">
                <input type="checkbox" id="vehicle1" name="vehicle" value="Bike">
                <label for="vehicle1"> bike</label>
            </div>
            <div class="container">
                <input type="checkbox" id="vehicle2" name="vehicle" value="Car">
                <label for="vehicle2"> car</label>
            </div>
            <div class="container">
                <input type="checkbox" id="vehicle3" name="vehicle" value="Bycycle">
                <label for="vehicle3"> bicycle</label>
            </div>
            </div><br>
            <div class="container">
            <button type="submit">Subscribe</button>
            </div>            
        </form>
    </main>
</body>
</html>
