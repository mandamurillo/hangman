<!DOCTYPE html>
<html>
    <head>
        <title>Hangman</title>
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <div class='container text-center'>
            <header>
               <h1>Let's Play Hangman</h1>
            </header>
            
            <div id="word"></div>
            
            <div id="hint">
                <button class="hintBtn btn btn-success">Hint</button>
            </div>
            
            <div id="letters"></div>
            
            <div id="won">
                <h2>You Won!</h2>
                <button class="replayBtn btn btn-success">Play Again</button>
            </div>
            <div id="lost">
                <h2>You Lost!</h2>
                <button class="replayBtn btn btn-warning">Play Again</button>
            </div>
            
            
            <div id="man">
               <img src="img/stick_0.png" id="hangImg">
            </div>
            
        </div>
        <script src="js/hangman.js"></script>
    </body>
</html>