<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me | Killian's website</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>

    <a href="#" class="go-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <header>
        <nav>
            <div class="logo">
                <a href="/"><i class="fas fa-rocket go-home"></i></a>    
            </div>

            <div class="toggle2">
                <i class="fas fa-toggle-off light"></i>
                <i class="fas fa-toggle-on dark"></i>
            </div>

            <div class="toggle">
                <i class="fas fa-bars ouvrir"></i>
                <i class="fas fa-times fermer"></i>
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="CV2.php">My CV</a></li>
                <!-- <li><a href="contact.php">Contact me</a></li> -->
            </ul>
        </nav>
    </header>
    
    <form class="form-contact" action="/" method="post">
        <div class="name">
            <label for="name">Your name</label>
            <input type="text" placeholder="Tape your name pls !" required>
        </div>

        <div class="mail2">
            <label for="mail">Your mail</label>
            <input type="mail" placeholder="example@example.com" required>
        </div>

        <div class="mess">
            <label for="message">Tape your message</label>
            <textarea class="message" name="message" placeholder="Write your message here pls"></textarea>
        </div>

        <div class="btn-form">
            <button>Envoyer</button>
        </div>
    </form>

    

    <script src="/script.js"></script>

</body>
</html>