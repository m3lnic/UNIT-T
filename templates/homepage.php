<?php include "templates/include/header.php" ?>

<div class="row">
    <div class="col-md-12 mt-2 mb-2">
        <div id="propogandaCarousel" class="carousel shadow slide cardBorderTop" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                for ($i = 0; $i < $results['carouselSize']; $i++) {
                    if ($i == 0)
                        echo '<li data-target="#propogandaCarousel" data-slide-to="' . $i . '" class="active"></li>';
                    else
                        echo '<li data-target="#propogandaCarousel" data-slide-to="' . $i . '"></li>';
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $first = True;

                foreach ($results['carousel'] as $currentItem) {
                    $imagePath = $currentItem['imagePath'];
                    $imageTitle = $currentItem['imageTitle'];
                    $imageDesc = $currentItem['imageDesc'];

                    if ($first == True) {
                        echo '<div class="carousel-item active">';
                        $first = False;
                    } else {
                        echo '<div class="carousel-item">';
                    }

                    echo '<img class="d-block w-100" src="' . "https://212th.uk/images/carousel/" . $imagePath . '" alt="' . $imageDesc . '">';
                    echo '<div class="carousel-caption d-none d-md-block" style="color:black;">';
                    echo    '<h4><strong>' . $imageTitle . '</strong></h4>';
                    echo    '<p><strong>' . $imageDesc . '</strong></p>';
                    echo '</div>';


                    echo '</div>';
                }
                ?>

                <a class="carousel-control-prev" href="#propogandaCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#propogandaCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-md-12 mb-2 mt-2 px-4">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GYFJjwXtsU4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div> -->

<div class="row mb-3">
    <div class="col-md-4 mb-2 mt-2 d-flex">
        <div class="card cardBorderTop alignTextCenter flex-fill shadow">
            <h1 class="pt-3"><i class="fa fa-handshake-o"></i></h1>
            <div class="card-body">
                <p class="card-text">We aim to have fun, whilst not ruining the friendships that we create!</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-2 mt-2 d-flex">
        <div class="card cardBorderTop alignTextCenter flex-fill shadow">
            <h1 class="pt-3"><i class="fa fa-users"></i></h1>
            <div class="card-body">
                <p class="card-text">We are a rapidly growing, diverse community!</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-2 mt-2 d-flex">
        <div class="card cardBorderTop alignTextCenter flex-fill shadow">
            <h1 class="pt-3"><i class="fab fa-galactic-republic"></i></h1>
            <div class="card-body">
                <p class="card-text">We balance the line between being a milsim and a casual unit!</p>
            </div>
        </div>
    </div>
</div>

<?php include "templates/include/footer.php" ?>