<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
    <div>
        <?php
        if(DB::connection()->getPdo()){
            #echo "tes".DB::connection()->getDatabase();
            #echo DB::insert('insert into tes (idtes) values (?)', [1]);
            $users = DB::select('select * from tes');
            foreach ($users as $user) {
                echo $user->idtes;
            }
        }
        ?>
    </div>
    
</body>
</html>