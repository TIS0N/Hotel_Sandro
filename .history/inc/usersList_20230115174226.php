<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../res/css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead><tr><th>S.N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Username</th>
                        </thead>
                    <tbody>
                <?php
                if(is_array($fetchData)){      
                    $sn=1;
                    foreach($fetchData as $data){
                ?>
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['firstName']??''; ?></td>
                    <td><?php echo $data['lastName']??''; ?></td>
                    <td><?php echo $data['usersEmail']??''; ?></td>
                    <td><?php echo $data['usersUid']??''; ?></td>
                </tr>
                <?php
                    $sn++;}}else{ 
                ?>
                <tr>
                    <td colspan="8">
                <?php echo $fetchData; ?>
                </td>
                <tr>
                <?php
                }
                ?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>