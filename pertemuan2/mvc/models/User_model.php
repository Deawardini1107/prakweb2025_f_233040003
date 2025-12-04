<?php

class User_model
{
    private $data = [
        ["id" => 1, "nama" => "Budi", "email" => "budi@gmail.com"],
        ["id" => 2, "nama" => "Siti", "email" => "siti@gmail.com"]
    ];

    public function getAll()
    {
        return $this->data;
    }

    public function getById($id)
    {
        foreach ($this->data as $u) {
            if ($u["id"] == $id) {
                return $u;
            }
        }
        return null;
    }

    public function add($nama, $email)
    {
        $id = count($this->data) + 1;
        $this->data[] = [
            "id" => $id,
            "nama" => $nama,
            "email" => $email
        ];
        return true;
    }

    public function update($id, $nama, $email)
    {
        foreach ($this->data as &$u) {
            if ($u["id"] == $id) {
                $u["nama"]  = $nama;
                $u["email"] = $email;
            }
        }
        return true;
    }

    public function delete($id)
    {
        foreach ($this->data as $key => $u) {
            if ($u["id"] == $id) {
                unset($this->data[$key]);
            }
        }
        return true;
    }
}
