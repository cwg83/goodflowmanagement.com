<html>
    <head>
        <title>Goodflow Management - About</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="calvin goodale">
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet/less" type="text/css" href="styles/styles.less" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    <header>
        <logo>
            <?php include 'includes/logo.php';?>
        </logo>
    </header>
    <nav>
    <div class="menu">
    <ul>
      <li><a href="/">About</a></li>
      <li><a href="/artists">Artists</a></li>
      <li><a class="active" href="/contact">Contact</a></li>
    </ul>
    </div>
    </nav>
    <div class="maincontent">
        <div class ="contactform">
        <div class="container">
            <form action="includes/sendform.php" method="Post" name="EmailTestForm">
    
            <label for="fname">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name">
        
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email">
        
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something" style="height:100px"></textarea>
            <div class="hideme">
                Please, leave this field blank: <input type="text" name="xemail" />  #the comment is for text-browser users
            </div>
        
            <input type="submit" value="Submit">
    
            </form>
        </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    </body>
    <footer>

    </footer>
</html>