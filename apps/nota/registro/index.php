<head>
    
    <meta charset="iso-8859-1">

    <style>

        .div_container2{

            background: #fafafa;


            box-shadow:0px 0px 5px #a7a7a7;

            margin-top: -25px;
            margin-bottom: 60px;
        }

        .div_title{

            font-size: 25px;
            padding-top: 10px;
            padding-left: 20px;

            color: #00b2ff;

            font-weight: 300;

        }

        .div_description{

            margin-top: -15px;
            margin-left: 25px;
            margin-right: 20px;
            padding-bottom: 10px;

        }

        form{

            padding: 20px;

        }
        
        label{
         
            color: black;
            
        }

    </style>

</head>

<body>
    
    <div class="div_container2">
        
        <form action="apps/nota/registro/enviar.php" method="post">

            <label>Asignatura</label><br>
            <input type="text" name="nombre" required>

            <br><br>

            <label>Nota</label><br>
            <input type="text" name="valor" required>
            <br><br>
            <input type="submit" value="Enviar">

        </form>
        
    </div>
    
</body>