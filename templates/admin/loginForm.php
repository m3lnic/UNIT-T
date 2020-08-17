<?php include "include/header.php" ?>

<div class="login-form alignTextCenter">
    <form action="admin.php?action=login" method="post">
        <h2>Log in</h2>
        <input type="hidden" name="login" value="true" />
        <?php if (isset($results['errorMessage'])) { ?>
            <div class="form-group">
                <div class="alert alert-primary" role="alert">
                    <?php echo $results['errorMessage'] ?>
                </div>
            </div>
        <?php } ?>
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required" autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button class="btn btn-block login-button" type="submit">Log in</button>
        </div>
    </form>
</div>

<?php include "include/footer.php" ?>