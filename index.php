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
        <ul><?php
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
        
        <style>
        ul {
        list-style-type: none;
        }
        </style>
    </section>
    
</body>
</html>


<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
