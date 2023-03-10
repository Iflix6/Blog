<?php 
include 'partials/header.php';
?>
    
        <section class="form__section">
            <div class="container form__section__container">
                <h2>Edit User</h2>
                <div class="alert__message success">
                    <p>This is a success message</p>
                </div>
                <form action="" enctype="multipart/form-data">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <select>
                        <option value="0">Author</option>
                        <option value="1">Admin</option>
                    </select>
                    <div class="form__control">
                        <label for="avatar">User Avatar</label>
                        <input type="file" id="avatar">
                    </div>    
                    <button type="submit" class="btn">Update User</button>
                </form>
        </section>
    
<?php 
include '../partials/footer.php';
?>