<h2 class="mt-4 mb-4"><i class="fas fa-user"></i> User</h2>

<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('../model/User.php');
                    $user = new User();
                    $users = $user->getAll();
                    $no = 1;
                    foreach ($users as $row) :
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['username'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

