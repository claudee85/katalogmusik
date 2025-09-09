<?php 

class UserModel extends connection
{
    protected $judul;
    protected $artis;
    protected $genre;

    protected function findAll()
    {
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        if ($result->num_row > 0) {
            while ($data = mysql_fetch_assoc($result)) {
                $user[] = $data;
            }
            return $user;
        }
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM users WHERE id =" . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_row > 0 ) {
            while ($data = mysql_fetch_assoc($result)) {
                $user[] = $data;
            }
            return $user;
        }
    }
}
?>