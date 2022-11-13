<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <title>MASTERMIND</title>
</head>
<body>
<div class="rules">
    <div class="rulesBox">
        <h1 class="m5">Bienvenue dans le jeu MasterMind</h1>
        <h2 class="m5">Vous jouez contre l'ordinateur </h2>
        <h2 class="m5 text-l">Régle</h2>
        <ul class="m5 text-l">
            <h3>L'ordinateur va choisir une combinaison parmi 6 couleurs a 4 emplacement précis</h3>
            <h3>Vous aller avoir 7 essaies pour découvrir cette combinaison</h3>
            <h3>Pour vous aidez, sur la gauche a chaque tentative, vous aurez :</h3>
                <ul>
                    <li>Une bille noire pour une bonne couleur et un bon placement</li>
                    <li>Une bille blanche pour une bonne couleur mais un mauvais placement</li>
                </ul>
        </ul>
        <h3 class="text-l m5">Après 7 essaies sans trouver vous aurez perdu, et vous pourrez re-essayer de jouer une nouvelle partie</h3>
        <button id="ok" class="btn b-10 ">Ok !</button>
    </div>
</div>
    <div class="confirmWin hidden">
        <div class="confirmBox">
            <h2>Bravo, vous avez gagner !</h2>
            <button id="reload" class="btn b-10 ">Check moi ça ! La rafale</button>
        </div>
    </div>
    <div class="confirmLoose hidden">
        <div class="confirmBox">
            <h2>Dommage, vous avez perdu !</h2>
            <h3>La solution était : </h3>
            <div id="solute" class="flex-center answer_box m5 bg-light">
                <button class="indicator  m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
            </div>
            <button id="reload" class="btn b-10 ">Calice de tabarnak ! </button>
        </div>
    </div>
    <h1 id="title">MASTERMIND</h1>
    <div id="answer" class="w-200 b-10">
        <button id="toggleShow" class="btn">SHOW</button>
        <div id="answer_box" class="flex-center answer_box hidden">
                <button class="indicator m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
                <button class="indicator m5 round robot"></button>
        </div>
    </div>
    <div class="container">
        <div id="S_left" class="box w-150 b-10-3 b-10-0">
            <?php for($i=0;$i < 7 ; $i++): ?>
            <div class="try helper">
                <div class="inline flex-center ">
                    <button class="indicator m5 round"></button>
                    <button class="indicator m5 round"></button>
                </div>
                <div class="inline flex-center">
                    <button class="indicator m5 round"></button>
                    <button class="indicator m5 round"></button>
                </div>
            </div>
            <?php endfor; ?>
            <div class="try">
                <div class="inline flex-center ">
                    <button id="color-btn" class="indicator blue m5 low-op round hover low-border color-select"></button>
                    <button id="color-btn" class="indicator green m5 low-op round hover low-border color-select"></button>
                </div>
                <div class="inline flex-center">
                    <button id="color-btn" class="indicator yellow m5 low-op round hover low-border color-select"></button>
                    <button id="color-btn" class="indicator violet m5 low-op round hover low-border color-select"></button>
                </div>
                <div class="inline flex-center">
                    <button id="color-btn" class="indicator red m5 low-op round hover low-border color-select"></button>
                    <button id="color-btn" class="indicator black m5 low-op round hover low-border color-select"></button>
                </div>
            </div>
        </div>



        <div id="S_right" class="box w-600 b-10-1 b-10-2">
            <?php for($i=0;$i < 7 ; $i++): ?>
                <div class="try">
                    <div class="inline flex-center ">
                        <button class="indicator m20 round"></button>
                        <button class="indicator m20 round"></button>
                        <button class="indicator m20 round"></button>
                        <button class="indicator m20 round"></button>
                    </div>
                </div>
            <?php endfor; ?>

            <div class="try">
                <div class="inline flex-center ">
                    <button id="1" class="selector low-border low-op hover m20 round"></button>
                    <button id="2" class="selector low-border low-op hover m20 round"></button>
                    <button id="3" class="selector low-border hover low-op m20 round"></button>
                    <button id="4" class="selector low-border hover m20 low-op round"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="fw flex-center">
        <button id="submit" class="btn w-150 b-10 ">JOUER</button>
    </div>









</body>
</html>