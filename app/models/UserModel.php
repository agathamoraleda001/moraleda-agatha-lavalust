<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model
{
    protected $table = 'users';

    protected $primary_key = 'id';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'username'
    ];

    protected $guarded = [
        'id'
    ];

    protected $timestamps = false;

    public function get_all_users()
    {
        return $this->all();
    }

    public function get_user($id)
    {
        return $this->find($id);
    }

    public function create_user($data)
    {
        return $this->insert($data);
    }

    public function update_user($id, $data)
    {
        return $this->update($id, $data);
    }

    public function delete_user($id)
    {
        return $this->delete($id);
    }
}