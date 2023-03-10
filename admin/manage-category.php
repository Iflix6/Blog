<?php 
include 'partials/header.php';
?>               <!-- END OF NAV-->
        <section class="dashboard">
                <div class="container dashboard__container">
                    <button id="show__sidebar-btn" class="side__toggle"><i class="uil uil-angle-right-b"></i></button>
                    <button  id="show__sidebar-btn" class="side__toggle"><i class="uil uil-angle-left-b"></i></button>
                    <aside>
                     <ul>
                            <li>
                                <a href="add-post.html" class="top"><i class="uil uil-pen"></i>
                                    <h5>Add Post</h5>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard.html"><i class="uil uil-postcard"></i>
                                    <h5>Manage Posts</h5>
                                </a>
                            </li>
                         <?php if(isset($_SESSION['user_is_admin'])): ?>
                            <li>
                                <a href="add-user.html"><i class="uil uil-user-plus"></i>
                                    <h5>Add User</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-user.html"><i class="uil uil-users-alt"></i>
                                    <h5>Manage Users</h5>
                                </a>
                            </li>
                            <li>
                                <a href="add-category.html"><i class="uil uil-pen"></i>
                                    <h5>Add Category</h5>
                                </a>
                            </li>
                            <li>
                                <a href="manage-category.html" class="active"><i class="uil uil-pen"></i>
                                    <h5>Manage Category</h5>
                                </a>
                            </li>
                          <?php endif ?>
                       </ul>
                    </aside>
                    <main>
                        <h2>Manage Categories</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Travel</td>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Music</td>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                                    <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
        </section>

        <?php 
include '../partials/footer.php';
?>