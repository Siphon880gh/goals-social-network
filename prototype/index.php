<!--
    WARNING: Not meant for production. This is a prototype to help the developer divide html into templates, to come up with routes for the app's features, and to figure out the JS logic and CSS. Mock data is being used. The Handlebars in this prototype is similar to Express-Handlebars but is a frontend version.
    WARNING: Production code is in /public.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prototype Only - Tech News Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="expires" content="0">

    <!-- CSS vendors -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- CSS from my app -->
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- JS vendors: Handlebars JS on the frontend for prototyping templates -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>

    <!-- JS vendors: Crossroads JS on the front frontend for prototyping routes. Dependency: Signal, Hasher -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-signals/1.0.0/js-signals.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hasher/1.2.0/hasher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crossroads/0.12.2/crossroads.min.js"></script>

    <!-- JS vendors: Moment JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <!-- JS Vendors: jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
    <header class="site-header">
        <nav>
            <ul>
                <li>
                    <a class="d-none-off" href="javascript:void(0);" onclick="hasher.setHash('login/')">Login</a>
                </li>
                <li>
                    <a class="d-none-off" href="javascript:void(0);" onclick="hasher.setHash('logout/')">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 class="page-title"></h1>
        <!-- Goal Social | etc -->

    </header>
    <main class="container" data-main>
        <section id="login" class="d-none" data-view data-route="/login, POST">
            <article></article>
            <template>
                    <?php include("assets/php/views/login.php"); ?>
            </template>
        </section>
        <section id="signup" class="d-none" data-view data-route="/signup">
            <article></article>
            <template>
                    <?php include("assets/php/views/signup.php"); ?>
            </template>
        </section>
    
        <!-- QUnit -->
        <!-- <div id="qunit"></div>
        <div id="qunit-fixture"></div> -->

    </main>
    <!-- container -->
    <div class="prototype-php-engine"><?php echo "PHP Prototype engine running!" ?></div>

    <!-- JS vendor: Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous ">
    </script>

    <!-- JS Vendors: Jquery UI -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js "></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css "></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js "></script>

    <!-- JS from my app -->
    <script src="assets/js/res.render.js"></script>
    <script src="assets/js/routes-html.js"></script>
    <script src="assets/js/routes-api.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- bcrypt on the frontend for prototyping databases -->
    <script src="bower_components/bcryptjs/dist/bcrypt.min.js"></script>

    <!-- MongoDB like database on the frontend for prototyping databases -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.23.0/polyfill.min.js"></script>
    <script src="https://unpkg.com/zangodb@latest/dist/zangodb.min.js"></script>

    <!-- Unit Testing with QUnit -->
    <!-- README: https://api.qunitjs.com/callbacks/QUnit.log/ -->
    <!-- README: https://api.qunitjs.com/assert/equal/ -->
    <script src="bower_components/qunit/qunit/qunit.js"></script>
    <link rel="stylesheet" href="bower_components/qunit/qunit/qunit.css"></link>

    <?php include("./tests.php"); ?>

    <!-- Automatically seed for the prototype -->
    <script src="autoseeds/index.js"></script>

</body>

</html>