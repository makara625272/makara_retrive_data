<?php
    include_once "retrive.php";
    $query = mysqli_query($connection,"SELECT * FROM skeleton_tbl_provinces");

    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Document</title>
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="text-center">Province</h1>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <tr>
                               <th>Pro_id</th>
                               <th>Pro_name</th>

                            </tr>
                            <?php 
                                while($result = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $result['pro_id'];?></td>
                                <td><?php echo $result['pro_name'];?></td>
                            </tr>
                            <?php 
                                }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </body>
        </html>
    
        
    
