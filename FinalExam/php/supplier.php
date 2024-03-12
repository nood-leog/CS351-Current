<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My Guitar Shop</title>
        <link rel="stylesheet" href="/FinalExam/php/styles/main.css">
        <link rel="stylesheet" href="/FinalExam/php/styles/supplier.css">
    </head>

    <body>
        <?php include './view/header.php'; ?>
        <?php include './view/horizontal_nav_bar.php'; ?>
        <main>
            <?php include './view/aside.php'; ?>
            <section>
                <h3>Supplier Update Page</h3>
                <div>
                    <form action="?action=update_supplier" method="post">
                        <table>
                            <tr>
                                <td>
                                    Supplier Name:
                                </td>
                                <td>
                                    <input type="text" id="supplier_name" name="supplier_name" value="<?php echo htmlspecialchars($supplier['supplier_name']); ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address line 1:
                                </td>
                                <td>
                                    <input type="text" id="supplier_line_1" name="supplier_line_1" value="<?php echo htmlspecialchars($supplier['supplier_addr_line_1']); ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address line 2:
                                </td>
                                <td>
                                    <input type="text" id="supplier_line_2" name="supplier_line_2" value="<?php echo htmlspecialchars($supplier['supplier_addr_line_2']); ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City:
                                </td>
                                <td>
                                    <input type="text" id="supplier_city" name="supplier_city" value="<?php echo htmlspecialchars($supplier['supplier_city']); ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    State:
                                </td>
                                <td>
                                    <select name="supplier_state">
                                        <?php foreach ($states as $state) : ?>
                                            <?php if ($state['state'] == $supplier['supplier_state']) { ?> 
                                                <option selected="selected" value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?></option>
                                            <?php
                                            }
                                            else {
                                                ?>
                                                <option value="<?php echo $supplier_state['state']; ?>"><?php echo $state['state']; ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>                    
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Zip Code:
                                </td>
                                <td>
                                    <input type="text" id="supplier_zip_code" name="supplier_zip_code" value="<?php echo htmlspecialchars($supplier['supplier_zip_code']); ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone:
                                </td>
                                <td>
                                    <input type="text" id="supplier_phone" name="supplier_phone" value="<?php echo htmlspecialchars($supplier['supplier_phone']); ?>" >
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="supplier_id" value="<?php echo htmlspecialchars($supplier['supplier_id']); ?>">
                        <input type="submit" value="Update Supplier" name="supplier_button" id="supplier_button"> 
                    </form>

                </div>
            </section>
        </main>
        <?php include './view/footer.php'; ?>
        <script src="/FinalExam/php/scripts/supplier.js"></script>
    </body>
</html>