<?php 
include 'partials/header.php';
?>
    
        <section class="form__section">
            <div class="container form__section__container">
                <h2>Edit Post</h2>
                <div class="alert__message success">
                    <p>This is a success message</p>
                </div>
                <form action="" enctype="multipart/form-data">
                    <input type="text" placeholder="Title">
                    <select>
                        <option value="1">Travel</option>
                        <option value="1">Art</option>
                        <option value="1">Science & Technology</option>
                        <option value="1">Wild Life</option>
                        <option value="1">Travel</option>
                        <option value="1">Travel</option>
                    </select>
                    <textarea name="" id="" placeholder="Body" rows="10">

                    </textarea>
                    <div class="form__control inline">
                        <input type="checkbox" id="is_featured" checked>
                        <label for="is_featured">Featured</label>
                    </div>
                    <div class="form__control">
                        <label for="thumbnail">Add thumbnail</label>
                        <input type="file" id="thumbnail">
                    </div>    
                    <button type="submit" class="btn">Update Post</button>
                </form>
        </section>
        <?php 
include '../partials/footer.php';
?>
