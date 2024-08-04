<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Summer2024</title>
        <link rel="stylesheet" href="styles/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="styles/assets/css/aos.min.css">
        <link rel="stylesheet" href="styles/assets/css/baguetteBox.min.css">
        <link rel="stylesheet" href="styles/assets/css/sets.css">
        <link rel="stylesheet" href="styles/assets/css/term.css">
    </head>
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
        <?php include 'header.php'; ?>
        <header class="text-center text-white d-flex masthead" style="background-image:url('styles/assets/img/header.jpg');">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase"><strong>Create a Set</strong></h1>
                        <hr>
                    </div>
                </div>
                <div id="term-container"> 
                    <form>
                        <div class="term">
                            <section class="term-align">
                                <label for="term-in">Term:</label>
                                <input type="text" id="term-in" name="term-in">
                            </section>
                            <section class="def-align">
                                <label for="def-in">Definition:</label>
                                <input type="text" id="def-in" name="def-in">
                            </section>
                        </div>
                        <div class="term">
                        <section class="term-align">
                                <label for="term-in">Term:</label>
                                <input type="text" id="term-in" name="term-in">
                            </section>
                            <section class="def-align">
                                <label for="def-in">Definition:</label>
                                <input type="text" id="def-in" name="def-in">
                            </section>
                        </div>
                    </form>
                </div>
                <a href="term.php"> 
                     <button class="btn btn-primary btn-xl" type="button">Add Term</button>
                </a>
            </div>
        </header>
</html>
