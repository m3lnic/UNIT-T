<?php include "templates/include/header.php" ?>

<?php
foreach ($results['orbatData'] as $key => $data) {
    $group = $key;
    $safeName = str_replace(' ', '', $group);

    echo    '<div class="row my-2">
                <div class="dropdown col-md-12">
                    <div class="cardBorderTop shadow mx-auto px-2 card">
                        <a class="orbatDropdown" data-toggle="collapse" href="#' . $safeName . '" role="button">
                            <h3 class="alignTextCenter mt-2 card-title">' . $group . ' <i class="fa fa-caret-down"></i></h3>
                        </a>
                        <div class="collapse" id="' . $safeName . '">
                            <div class="row card-body py-1 alignTextCenter">';
                                sortOrbat($data);
    echo                    '</div>
                        </div>
                    </div>
                </div>
            </div>';
}

function handleObject($key, $data)
{
    echo    '<div class="col-md-4 mx-auto">
                <ul class="list-group  list-group-flush">
                    <li class="list-group-item"><strong>' . $key . '</strong></li>
                    <li class="list-group-item">' . $data . '</li>
                </ul>
            </div>';
}

function handleArray($array, $key = "") {
    echo    '<div class="col-md-6 mx-auto">
                <ul class="list-group  list-group-flush">';

    if ($key != "") {
        echo            '<li class="list-group-item"><strong>' . $key . '</strong></li>';
    }

    foreach ($array as $data) {
        echo            '<li class="list-group-item">' . $data . '</li>';
    }

    echo            '</ul>
                </div>';
}

function sortOrbat($currentObject, $prevArray = False)
{
    if ($prevArray && !is_array($currentObject)) {
        $prevArray = False;
    }



    if (is_object($currentObject)) {
        foreach ($currentObject as $key => $data) {

            if ($prevArray && !is_array($data)) {
                $prevArray = False;
            }

            if (is_object($data)) {
                //var_dump($prevGroup);
                sortOrbat($data, $prevArray);
            } else if (is_array($data)) {
                if ($prevArray == false) {
                    echo '<div class="row card-body py-1 alignTextCenter">';
                    $prevArray = True;
                }

                handleArray($data, $key);
            } else {
                handleObject($key, $data);
            }
        }
    } else {
        if ($prevArray == false) {
            echo '<div class="row card-body py-1 alignTextCenter">';
            $prevArray = True;
        }

        handleArray($currentObject);
    }

    if ($prevArray == True) {
        echo '</div>';
    }
}
?>

<?php include "templates/include/footer.php" ?>