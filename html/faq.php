<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/mobile.css" />
    <link rel="stylesheet" href="./css/post.css" />
    <link rel="stylesheet" href="./css/left_col.css" />
    <link rel="stylesheet" href="faq.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <title>LiNK.ME</title>
</head>

<body>
    <header>
        <?php
        include('./templates/navbar.php');
        ?>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 space-col-3"></div>
            <div class="col-6 main-col">
                <div id="center-col">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="faq">
                                <div class="col-12">
                                    <span class="faq-text"> FAQ </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="first-question">
                                <span>1. How can I join LiNK.ME?</span>
                            </div>
                            <div class="first-answer">
                                <span>It's simple, just head to link.me/register and fill the form that will appear at the left of your screen. </span>
                                <div><span>You just need a valid e-mail and a unique username.</span></div>
                            </div>
                            <div class="second-question">
                                <span>2. How can i report a post that i think is inappropriate/offensive?</span>
                            </div>
                            <div class="third-question">
                                <span>3. How can i create a group with my friends?</span>
                            </div>
                            <div class="fourth-question">
                                <span>4. Can I change my name/password?</span>
                            </div>
                            <div class="fifth-question">
                                <span>5. I added a post and now I don't like it. How can i remove it?</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>