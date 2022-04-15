<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>
    <section class="snack-1">
        <!-- Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 -->
        <h1>Snack 1</h1>
        <h2>Risultati partite</h2>
        <ul style="list-style-type: none;"><?php
            /*
            //es prova
            $foo = array(
                'bar' => 'baz');
            echo "Hello {$foo['bar']}!"; // Hello baz!
            */
            $partite = array(
                [
                    'casa' =>[
                        'squadra' => 'Olimpia Milano',
                        'punteggio' => 55,
                    ],

                    'ospite' =>[
                        'squadra' => 'Cantù',
                        'punteggio' => 60,
                    ],
                ],

                [
                    'casa' =>[
                        'squadra' => 'Roma',
                        'punteggio' => 45,
                    ],

                    'ospite' =>[
                        'squadra' => 'Napoli',
                        'punteggio' => 40,
                    ],
                ],
                [
                    'casa' =>[
                        'squadra' => 'Lecce',
                        'punteggio' => 50,
                    ],

                    'ospite' =>[
                        'squadra' => 'Trieste',
                        'punteggio' => 40,
                    ],
                ],
                [
                    'casa' =>[
                        'squadra' => 'Venezia',
                        'punteggio' => 50,
                    ],

                    'ospite' =>[
                        'squadra' => 'Firenze',
                        'punteggio' => 65,
                    ],
                ],
            );
            for ($i=0; $i < count($partite); $i++) { ?>
                <li>
                <span><?=($partite[$i]['casa']['squadra'])?></span> -
                <span><?=($partite[$i]['ospite']['squadra'])?></span> |
                <span><?=($partite[$i]['casa']['punteggio'])?></span> -
                <span><?=($partite[$i]['ospite']['punteggio'])?></span>
                </li><?php
            }?>
        </ul>

    </section>
    
    <hr>

    <section class="snack-2">
        <!-- Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
        <h1>Snack 2</h1>
        <h2>Inserisci i tuoi dati</h2>
        <form action="" method="get">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="mail" placeholder="mail">
            <input type="text" name="age" placeholder="age">
            <button>send</button>
        </form>

        <?php
            // if (isset($_GET['name'])) {
            //     $name = $_GET['name'];
            // } else{
            //     $name = '';
            // }

            // è come if else sopra ^
            $name = $_GET['name'] ?? '';
            $mail = $_GET['mail'] ?? '';
            $age = $_GET['age'] ?? '';

            $finalMessage = '';
            // controlli: name ha + di 3 caratteri, in mail presenti (con strpos) . e @ , age è un numero 
            if (strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)){
                $finalMessage = '<p style="color: green;">Accesso riuscito</p>';
            } else{
                $finalMessage = '<p style="color: red;">Accesso negato</p>';
            }

            echo($finalMessage)
            ?>
    </section>

    <hr>

    <section class="snack-4">
    <!-- Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
    <h1>Snack 4</h1>
    <h2>15 numeri casuali e unici</h2>
    <?php
    $arrRandomNumbers = [];

    while(count($arrRandomNumbers) < 15){
        $randomNum = rand(1,100);
        
        // in_array controlla se ci sono doppioni
        if (!in_array ($randomNum, $arrRandomNumbers)){
            $arrRandomNumbers[] = $randomNum; 
            ?>
            <span><?= $randomNum ?>, </span>
            <?php
        }
    }
    // var_dump($randomNum);
    ?>
    
    </section>

    <hr>

    <section class="snack-5">
        <h1>Snack 5</h1>
        <!-- Snack 5
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
        <?php
            $paragrafone = "Un paragrafo è una suddivisione interna di un capitolo. Per scelta dell'autore, un capitolo può contenere la spiegazione di un singolo concetto o unità di pensiero (quindi esaurirsi in alcune pagine), oppure può essere molto strutturato al proprio interno. In questo secondo caso è utile suddividere il capitolo in diverse sezioni interne: questi sono i paragrafi. Ciascun paragrafo è individuato da un titolo.
            Soprattutto nei testi argomentativi il paragrafo ha una struttura precisa: deve essere costituito da una prima parte che introduce l'idea principale (la tesi), una parte centrale, o corpo del testo, che sostiene l'idea iniziale con argomenti a favore e una parte conclusiva che dimostra la validità della seconda parte per sostenere l'idea o la tesi espressa.
            Un paragrafo può essere suddiviso a sua volta in sotto-paragrafi, per approfondire in modo più specifico alcune parti del paragrafo stesso.
            In tipografia generalmente i capitoli vengono indicati con numeri romani e i paragrafi con numeri arabi. Oggi è invalso l'uso anglosassone, secondo il quale: a) sia i capitoli che i paragrafi sono indicati con numeri arabi; b) separati da un punto.";

            echo '<div style="background-color: #dddddd;">' . 'Paragrafo iniziale:' . '</div>' ;
            echo ($paragrafone);

            // explode ad ogni . in $paragrafone divide
            $arrParagrafi = explode('.', $paragrafone);
            // var_dump($arrParagrafi);

            echo '<div style= "background-color: #dddddd; margin-top: 3rem">' . 'Paragrafo iniziale suddiviso:' . '</div>';

            for ($i = 0; $i < count($arrParagrafi); $i++) { ?>
                <p><?= $arrParagrafi[$i] ?></p> <?php
                                                        }
        ?>
    </section>
</body>
</html>




