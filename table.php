
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        <div class="container-fluid">


            <div class="row">
                <div class="col-4 order-2">
                    <h3 class="mt-5">Output</h3>
                    <pre><?php print_r($_POST);?></pre>
                </div>
                <div class="col-8 order-1">
                    <h3 class="mt-5">Educational Qualification</h3>
                    <form method="post" action="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Degre</th>
                                    <th>Sub</th>
                                    <th>Inst</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=1;$i<=5;++$i):?>
                                <tr>
                                    <td><input type="text" name="edu[<?=$i;?>][degree]" class="form-control" placeholder="degree"></td>
                                    <td><input type="text" name="edu[<?=$i;?>][subj]" class="form-control" placeholder="subj"></td>
                                    <td><input type="text" name="edu[<?=$i;?>][inst]" class="form-control" placeholder="inst"></td>
                                    <td><input type="text" name="edu[<?=$i;?>][year]" class="form-control" placeholder="year"></td>
                                </tr>
                                <?php endfor;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><button type="submit" class="btn btn-primary">SAVE</button></th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>

       </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>