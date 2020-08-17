<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>2Mercian</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./CSS/main.css" rel="stylesheet">

    <!-- Fontawesome glyphicons -->
    <script src="https://kit.fontawesome.com/a0de52fe85.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">2Mercian</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Dashboard</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="media">
                            <img src="./Resources/TestIcon.jpg" class="" alt="..." style="max-height: 33px;">
                            <div class="media-body">
                                <h5>&nbsp;&nbsp;Welcome, M. Ghosty</h5>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">
                        <h5>Logout</h5>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-cog"
                                aria-hidden="true"></span> Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-user"
                                aria-hidden="true"></span> Users</a>
                        <a href="#applicationsCollapse" class="list-group-item list-group-item-action"
                            data-toggle="collapse" href="#applicationsCollapse" aria-expanded="false"
                            aria-controls="applicationsCollapse" role="button"><span class="fas fa-envelope-open-text"
                                aria-hidden="true"></span> Applications</a>
                        <div class="collapse" id="applicationsCollapse">
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-scroll"
                                    aria-hidden="true"></span> New</a>
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-user-tag"
                                    aria-hidden="true"></span> All</a>
                        </div>
                        <a href="#permissionCollapse" class="list-group-item list-group-item-action"
                            data-toggle="collapse" href="#permissionCollapse" aria-expanded="false"
                            aria-controls="permissionCollapse" role="button"><span class="fas fa-user-shield"
                                aria-hidden="true"></span> Permissions</a>
                        <div class="collapse" id="permissionCollapse">
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-scroll"
                                    aria-hidden="true"></span> Management</a>
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-user-tag"
                                    aria-hidden="true"></span> Roles</a>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action"><span class="fab fa-discord"
                                aria-hidden="true"></span> Discord</a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-terminal"
                                aria-hidden="true"></span> Server</a>
                        <a href="#websiteCollapse" class="list-group-item list-group-item-action" data-toggle="collapse"
                            href="#websiteCollapse" aria-expanded="false" aria-controls="websiteCollapse"
                            role="button"><span class="fas fa-columns" aria-hidden="true"></span> Website</a>
                        <div class="collapse" id="websiteCollapse">
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-scroll"
                                    aria-hidden="true"></span> Widgets</a>
                            <a href="#" class="list-group-item list-group-item-action"><span class="fas fa-user-tag"
                                    aria-hidden="true"></span> Pages</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <h2>Dashboard</h2>
                    <div class="card" style="margin: 15px 0;">
                        <div class="card-body">
                            <h2 class="card-title"><span class="fas fa-user"></span> Welcome, M. Ghosty</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title"><span class="fas fa-user"></span> Your Information
                                            </h2>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5>Rank:</h5>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Private</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title"><span class="fas fa-user"></span> Your Statistics
                                            </h2>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h5>New:</h5>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p>000</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h5>Total:</h5>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p>000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title"><span class="fas fa-user"></span> User Roles
                                            </h2>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Private</td>
                                                        <td>Your rank in the unit</td>
                                                    </tr>
                                                    <tr>
                                                        <td>J6</td>
                                                        <td>Technical J Office</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Zeus</td>
                                                        <td>The ultimate god</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span class="fas fa-server"></span> Server Resource Usage</h3>
                                <h5>CPU</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        10%</div>
                                </div>
                                <h5>RAM</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        30%</div>
                                </div>
                                <h5>Storage</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span class="fas fa-server"></span> Server Information</h3>
                                <h5>Players Online</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        100%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title"><span class="fas fa-user"></span> User Statistics</h2>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>New:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Total:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span class="fas fa-envelope-open-text"></span> Applications</h3>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>New:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Total:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span class="fas fa-scroll"></span> Attendance</h3>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Expected:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>LOA:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Attended (01-01-2000):</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span class="fab fa-discord"></span> Discord</h3>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Online:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Total members:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5>Authorised users:</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="./JS/bootstrap.bundle.min.js"></script>
</body>

</html>