<?php
include 'includes/header.php';
?>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

<?php
if ($_POST && $_POST['password'] == $mdp){
 $_SESSION['email'] = $_POST['email'];
 $_SESSION['password'] = $_POST['password'];
}else{

}
include 'includes/footer.php';
?>