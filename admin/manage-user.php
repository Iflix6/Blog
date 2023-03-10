<?php 
include 'partials/header.php';
?>
                                 <!-- END OF NAV-->
        <section class="dashboard">
                <div class="container dashboard__container">
                    <button id="show__sidebar-btn" class="side__toggle"><i class="uil uil-angle-right-b"></i></button>
                    <button  id="show__sidebar-btn" class="side__toggle"><i class="uil uil-angle-left-b"></i></button>
                   
                    <?php if(isset($_SESSION['add-user-success'])):?>
                    <div class="alert__message success">
                        <p>
                            <?= $_SESSION['add-user-success'];
                            unset($_SESSION['add-user-success']);
                            ?>
                        </p>
                    </div>
                    
                    <?php endif ?>
                    <aside>
                        <ul>
                            <li>
                                <a href="add-post.php" class="top"><i class="uil uil-pen"></i>
                                    <h5>Add Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="index.php"><i class="uil uil-postcard"></i>
                                    <h5>Manage Posts</h5>
                                </a>
                            </li>
                        <?php if(isset($_SESSION['user_is_admin'])): ?>
                            <li>
                                <a href="add-user.php"><i class="uil uil-user-plus"></i>
                                    <h5>Add User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-user.php"  class="active"><i class="uil uil-users-alt"></i>
                                    <h5>Manage Users</h5>
                                </a>
                            </li>
                            <li>
                                <a href="add-category.php"><i class="uil uil-pen"></i>
                                    <h5>Add Category</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-category.php"><i class="uil uil-pen"></i>
                                    <h5>Manage Category</h5>
                                </a>
                            </li>
                        <?php endif?>
                        </ul>
                    </aside>
                    <main>
                        <h2>Manage Users</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Inakhe Israel</td>
                                    <th>Izoboh</th>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                    <th>Yes</th>
                                </tr>
                                <tr>
                                    <td>Inakhe Mercy</td>
                                    <th>Izoboh</th>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                    <th>Yes</th>
                                </tr>
                                <tr>
                                    <td>Inakhe Goodness</td>
                                    <th>Izoboh</th>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                    <th>Yes</th>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
        </section>


<?php 
include '../partials/footer.php';
?>