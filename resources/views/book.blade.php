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
                /*height: 90%;*/
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
<h2 style=" margin-left: 25%">dodaj książkę</h2>

<div class="w3-row w3-col w3-grayscale w3-container w3-responsive" style="width: 50%; margin-left: 25%">

    



    <form method="post" action="/book/save" class="full-height" id="form">
        @csrf
        
  
       <?php if ($action): ?>

        <p style="color: #FFFFFF; background-color: black ; width: 210px">wypełnij wymagane pola !!!</p>

        <?php endif ?>
        
        

        <p>
            <label><b>Tytuł</b></label>
            <input type="text" maxlength="50" name="title" placeholder="tytuł" value="<?=$title;?>" class="w3-input w3-border">
            <?php if ($action): ?>
            <?php if ($title==null): ?>
            <p style="color: #7CFC00">* pole wymagane</p>
            <?php endif ?>
            <?php endif ?>
        </p>

        <p>
            <label><b>Autor</b></label>
            <input type="text" maxlength="30" name="author" placeholder="autor" value="<?=$author;?>" class="w3-input w3-border">
            <?php if ($action): ?>
            <?php if ($author==null): ?>
            <p style="color: #7CFC00">* pole wymagane</p>
            <?php endif ?>
            <?php endif ?>
        </p>
        <p>
            <label><b>Wydawnictwo</b></label>
            <input type="text" maxlength="20" name="publishing_house" placeholder="wydawnictwo" value="<?=$publishing_house;?>" class="w3-input w3-border"
                   
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
                <button class="w3-button w3-white w3-border w3-round-large" id="form">zapisz</button>

            </a>
        </p>
    </form>
    
    <a href="/books"><button class="w3-button w3-white w3-border w3-round-large w3-right">wróć</button></a>

</div>


    <div class="footer">
        <a href="/">Maciej Kryger 2020</a>
    </div>
</body>


</html>