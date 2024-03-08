<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <?php
            if(isset($_GET['user'])) {
                if($_GET['user'] == 'admin') {
                    print("Hello World");
                } else {
                    print("BAD World");
                }
            } else {
                print("No user parameter set");
            }
        ?>
    </body>
</html>