<?php
function get_suppliers() {
    global $db;
    $query = 'SELECT * 
              FROM suppliers
              ORDER BY supplier_name;';
    $statement = $db->prepare($query);
    $statement->execute();
    $suppliers = $statement->fetchAll();
    $statement->closeCursor();
    return $suppliers;    
}

function get_supplier($supplier_id) {
    global $db;
    $query = 'SELECT * 
              FROM suppliers
              WHERE supplier_id = :supplier_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':supplier_id', $supplier_id);
    $statement->execute();
    $supplier = $statement->fetch();
    $statement->closeCursor();
    return $supplier;    
}

function update_supplier($supplier_id,$supplier_name,$supplier_addr_line_1,$supplier_addr_line_2,$supplier_city,$supplier_state,$supplier_zip_code,$supplier_phone) {
    global $db;
    $query = 'UPDATE suppliers
              SET supplier_name         = :supplier_name,
                  supplier_addr_line_1  = :supplier_addr_line_1,
                  supplier_addr_line_2  = :supplier_addr_line_2,
                  supplier_city         = :supplier_city,
                  supplier_state        = :supplier_state,
                  supplier_zip_code     = :supplier_zip_code,
                  supplier_phone        = :supplier_phone
              WHERE supplier_id = :supplier_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':supplier_id',           $supplier_id);
    $statement->bindValue(':supplier_name',         $supplier_name);
    $statement->bindValue(':supplier_addr_line_1',  $supplier_addr_line_1);
    $statement->bindValue(':supplier_addr_line_2',  $supplier_addr_line_2);
    $statement->bindValue(':supplier_city',         $supplier_city);
    $statement->bindValue(':supplier_state',        $supplier_state);
    $statement->bindValue(':supplier_zip_code',     $supplier_zip_code);
    $statement->bindValue(':supplier_phone',        $supplier_phone);
    $statement->execute();
    $statement->closeCursor();
    return;    
}

function get_states(){
    global $db;
    $query = 'SELECT state 
              FROM state_tax_rates
              ORDER BY state';
    $statement = $db->prepare($query);
    $statement->execute();
    $states = $statement->fetchAll();
    $statement->closeCursor();
    return $states;    
} 