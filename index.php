<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="general-container">
        <section class="dashboard">
            <h2>DASHBOARD</h2>
            <div class="dashboard-options">
                <a class="dashbooard-opt active" href=""><span class="material-icons active">menu</span>Menu</a>
                <a href=""><span class="material-icons">bookmark</span>About US</a>
                <a href="0"><span class="material-icons">quiz</span>FAQ</a>
                <a href=""><span class="material-icons">groups</span>Members</a>
            </div>
        </section>
        <section class="menu-section">
            <div class="menu-top-container">
                <h2>Menu</h2>
                <div class="cursos">
                    <div class="curso-tab">
                        <span class="material-icons" id="finance">paid</span>
                        <div class="curso-info">
                            <div>
                                <h3>Finance</h3>
                                <p>15 hours</p>
                            </div>
                            <span class="material-icons">chevron_right</span>
                        </div>
                    </div>
                    <div class="curso-tab">
                        <span class="material-icons" id="chemistry">biotech</span>
                        <div class="curso-info">
                            <div>
                                <h3>Chemistry</h3>
                                <p>35 hours</p>
                            </div>
                            <span class="material-icons">chevron_right</span>
                        </div>
                    </div>
                    <div class="curso-tab">
                        <span class="material-icons" id="mathematics">trending_up</span>
                        <div class="curso-info">
                            <div>
                                <h3>Mathematics</h3>
                                <p>45 hours</p>
                            </div>
                            <span class="material-icons">chevron_right</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-container">
                <div class="grades-view">
                    <h3>Grades</h3>
                    <div class="grades-show">
                        <div>
                            <h3>Finance</h3>
                            <div class="grades-bar-progress">
                                <span class="grade-progress" id="finance-bar"></span>
                            </div>
                        </div>
                        <div>
                            <h3>Chemistry</h3>
                            <div class="grades-bar-progress">
                                <span class="grade-progress" id="chemistry-bar"></span>
                            </div>
                        </div>
                        <div>
                            <h3>Mathematics</h3>
                            <div class="grades-bar-progress">
                                <span class="grade-progress" id="mathematics-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calculator-tab">
                    <h3>Calculator</h3>
                    <div class="calculator-container">
                        <p>
                            <?php
                                $nota1 = filter_input(INPUT_POST,'nota1');
                                $nota2 = filter_input(INPUT_POST,'nota2');
                                $nota3 = filter_input(INPUT_POST,'nota3');
                                $nota4 = filter_input(INPUT_POST,'nota4');

                                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                                echo "$media"
                            ?>
                        </p>
                        <form method="post" class="calculator-form">
                            <input type="text" class="input-grade" id="grade1" name="nota1" placeholder="Type the first grade">
                            <input type="text" class="input-grade" id="grade2" name="nota2" placeholder="Type the second grade">
                            <input type="text" class="input-grade" id="grade3" name="nota3" placeholder="Type the third grade">
                            <input type="text" class="input-grade" id="grade4" name="nota4" placeholder="Type the fourth grade">
                            <button type="submit">Calculate</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>