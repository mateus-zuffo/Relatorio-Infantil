<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Individual</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">

        <form action="makepdf.php" method="post" class="col-md-6"> 
            <h1> Crie seu próprio relatório</h1>
            <p> Fill out the details bellow and the  PDF will download<p>

            <div class="row mb-2">
                <div class="col-md-6"><input type="text" name="fname" placeholder="Nome do aluno" class="form-control" required> </div>
                <div class="col-md-6"><input type="text" name="lname" placeholder="Sobrenome" class="form-control" required> </div>
            </div>
            <input type="email mb-2" name="email" placeholder="Email" class="form-control" required>
            <textarea name="message mb-2" placeholder="Observações" class="form-control"></textarea>
            <button type="submit" class= "btn btn-success btn-lg btn-block">Criar PDF</button>
        </form> 

    </div>



</body>
</html>