<?php require('header.php'); ?>
    <main>
        <form action="process.php" method="post">
            <div class="form-group">
                <input type="text" name="fname" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="lname" placeholder="Last Name" class="form-control">
            </div> 
            <div class="form-group">
                <input type="text" name="genre" placeholder="Genre" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="location" placeholder="Location" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="age" placeholder="Age" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="favsong" placeholder="What Are You Listening To?" class="form-control">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
    </main>
<?php require('footer.php'); ?>