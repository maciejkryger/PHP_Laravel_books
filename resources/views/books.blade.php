<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>job-interview-exercise</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        .full-height {
            /*    height: 90%;
                overflow: scroll;
                overflow: auto;*/
            
                position:relative; /* needed for footer positioning*/
                margin:0 auto; /* center, not in IE5 */
                height:auto !important; /* real browsers */
                height:100%; /* IE6: treaded as min-height*/
                min-height:100%;
            }
        .footer{
                text-align:center;
                display:block;
                width:10%;
                overflow-x:auto;
                color:#fff!important;
                background-color:#000!important;
                padding-top:24px!important;
                padding-bottom:24px!important;
                position:absolute;
                top:0;
                right:0;
                font-family: 'Nunito', sans-serif;  
            }
    </style>
</head>


<body>


<div class="w3-container">

    <h2>wykaz książek</h2>

    <a href="/book/add">
        <button class="w3-button w3-white w3-border w3-round-large" >dodaj</button>
    </a>

    <div class="w3-responsive full-height">
        <table class="w3-table-all w3-hoverable">
            <thead>
            <tr class="w3-light-grey ">
                <th>id</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Wydawnictwo</th>
                <th>Kategoria</th>
                <th>Data dodania</th>
                <th>Data modyfikacji</th>
                <th>opcje</th>
            </tr>
            </thead>
            <?php foreach ($books as $book):?>
                     
                <tr>
                    <td><?= $book->id; ?></td>
                    <td><?= $book->title; ?></td>
                    <td><?= $book->author; ?></td>
                    <td><?= $book->publishing_house; ?></td>
                    <td><?= $categories->get($book->category-1)->name; ?></td>
                    <td><?= $book->creation_date; ?></td>
                    <td><?= $book->last_update; ?></td>
                    <td>

                        <form method="get" action="/books/del/<?= $book->id; ?>" onchange="this.form.submit()">
                            <button class="w3-button w3-white w3-border w3-round-large">usuń</button>
                        </form>

                    </td>
                </tr>


            <?php endforeach ?>

        </table>
    </div>


    <div class="footer">
        <a href="/">Maciej Kryger 2020</a>
    </div>
</body>
</html>


