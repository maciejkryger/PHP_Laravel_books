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
        .footer{
                text-align:center;
                display:block;
                width:100%;
                overflow-x:auto;
                color:#fff!important;
                background-color:#000!important;
                padding-top:24px!important;
                padding-bottom:24px!important;
                position:absolute;
                bottom:0;
                left:0;
                font-family: 'Nunito', sans-serif;
            }
    </style>
</head>


<body>
<h2 style=" margin-left: 25%">dodaj książkę</h2>

<div class="w3-row w3-col w3-grayscale w3-container w3-responsive" style="width: 50%; margin-left: 25%">

    



    <form method="post" action="/book/store" >
        @csrf
        
        
        <p>
            <label><b>Tytuł</b></label>
            <input type="text" name="title" placeholder="tytuł" class="w3-input w3-border">
        </p>

        <p>
            <label><b>Autor</b></label>
            <input type="text" name="author" placeholder="autor" class="w3-input w3-border">
        </p>
        <p>
            <label><b>Wydawnictwo</b></label>
            <input type="text" name="publishing_house" placeholder="wydawnictwo" class="w3-input w3-border"
                   
        </p>




        <p>
            <label><b>Kategoria</b></label>
            <select name="category" class="w3-input w3-border">
                <?php foreach ($categories as $category):?>
                <option value="<?= $category->id; ?>"><?= $category->name; ?>
                <?php endforeach ?>
                </option>
            </select>

        </p>
        
        <p>
            <a>
                <button class="w3-button w3-white w3-border w3-round-large">zapisz</button>
            </a>
        </p>
    </form>

</div>


    <div class="footer">Maciej Kryger 2020</div>
</body>


</html>