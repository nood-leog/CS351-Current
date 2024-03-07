<?php

function get_address($address_id) {
    $query = 'SELECT * FROM addresses WHERE address_id = :address_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function update_address($address_id, $line1, $line2, $city, $state, $zip_code, $phone) {
    $query = 'UPDATE addresses SET line1 = :line1, line2 = :line2, city = :city, state = :state, zip_code = :zip_code, phone = :phone WHERE address_id = :address_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function get_states() {
    $query = 'SELECT stateFROM state_tax_rates ORDER BY state';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}
