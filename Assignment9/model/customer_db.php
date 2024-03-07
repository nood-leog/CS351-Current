<?php

function get_customer_info($db, $customer_id) {
    $query = 'SELECT * FROM customers WHERE customer_id = :customer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->execute();
    return $statement->fetchAll();
}

function get_customer_info_by_email_address($email_address) {
    global $db;
    $query = 'SELECT * FROM customers WHERE email_address = :email_address';
    $statement = $db->prepare($query);
    $statement->bindValue(':email_address', $email_address);
    $statement->execute();
    return $statement->fetchAll();
}

function update_first_name($db, $customer_id, $first_name) {
    $query = 'UPDATE customers SET first_name = :first_name WHERE customer_id = :customer_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function update_last_name($db, $customer_id, $last_name) {
    $query = 'UPDATE customers SET last_name = :last_name WHERE customer_id = :customer_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function update_email_address($db, $customer_id, $email_address) {
    $query = 'UPDATE customers SET email_address = :email_address WHERE customer_id = :customer_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function update_password($db, $customer_id, $password) {
    $query = 'UPDATE customers SET password = :password WHERE customer_id = :customer_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}
