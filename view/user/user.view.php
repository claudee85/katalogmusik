<?php

class UserView extends UserController
{
    public function show()
    {
        $users = $this->getUsers();

        foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?>
                <td><?php echo $user['judul']; ?>
                <td><?php echo $user['artis']; ?>
                <td><?php echo $user['genre']; ?>
            </tr>
<?php
        }
    }
    public function find()
    {
        $detailUser = $this->getUsetBy();
        if (empty($detailUser))
            return;
        foreach ($detailUser as $detail) { ?>
            <div>
                <h3><?php echo $detail['judul']; ?></h3>
                <p><?php echo $detail['artis']; ?></p>
                <p><?php echo $detail['genre']; ?></p>
            </div>
            <?php
        }
    }
}
?>