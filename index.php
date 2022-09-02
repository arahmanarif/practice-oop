<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="div">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="post">
                                <input name="my_html_input_tag" value="" />

                                <input type="submit" name="" value="" />

                            </form>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php

$result = "55";

if ($result >= 80) {

    if ($result < 101) {
        echo "A+";
    } else {
        echo "batpar";
    }
} else if ($result >= 79) {
    echo "A";
} else if ($result >= 69) {
    echo "A-";
} else if ($result >= 59) {
    echo "B";
} else if ($result >= 49) {
    echo "C";
} else if ($result >= 39) {
    echo "D";
} else if ($result >= 33) {
    echo "E";
} else {
    echo "tumi fail";
}

?>