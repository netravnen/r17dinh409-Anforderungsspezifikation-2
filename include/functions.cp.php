<?php

/**
 * @param $type
 * @param $passwd
 * @param $utc_timestamp
 * @param $salt
 */
function insert_auth_allah_passwd($type, $passwd, $utc_timestamp)
{
    get_db_connection();

    $salt = "";
    for ($i = 0; $i < 40; $i++) {
        $salt .= substr("./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", mt_rand(0, 64), 1);
    }

    DB::insert('auth_allah', array(
        'type' => $type,
        'passwd' => $passwd,
        'created' => $utc_timestamp,
        'salt' => $salt));
}

/**
 * @param $id
 * @param $type
 * @param $passwd
 */
function update_auth_allah_passwd($id, $type, $passwd)
{
    get_db_connection();
    DB::update('auth_allah', array(
        'type' => $type,
        'passwd' => $passwd
    ), "id=>%s", $id);
}