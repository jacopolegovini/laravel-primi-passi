<?php
$contacts = [
    [
        'name' => 'Luca Rossi',
        'email' => 'luca.rossi@example.com',
        'phone' => '+39 345 678 1234'
    ],
    [
        'name' => 'Marta Bianchi',
        'email' => 'marta.bianchi@example.com',
        'phone' => '+39 331 567 8910'
    ],
    [
        'name' => 'Giovanni Verdi',
        'email' => 'giovanni.verdi@example.com',
        'phone' => '+39 320 456 7890'
    ],
    [
        'name' => 'Elena Neri',
        'email' => 'elena.neri@example.com',
        'phone' => '+39 347 123 4567'
    ],
    [
        'name' => 'Paolo Moretti',
        'email' => 'paolo.moretti@example.com',
        'phone' => '+39 333 654 9876'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>
            Contacts
        </h2>
    </header>
    <main>
        <ul class="card">
            @foreach ($contacts as $contact)
                <li>
                    {{$contact['name']}}
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
