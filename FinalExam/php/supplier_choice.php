<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My Guitar Shop</title>
        <link rel="stylesheet" href="/FinalExam/php/styles/main.css">
        <link rel="stylesheet" href="/FinalExam/php/styles/supplier.css">

    </head>

    <body>
        <?php include './php/view/header.php'; ?>
        <?php include './php/view/horizontal_nav_bar.php'; ?>
        <main>
            <?php include './php/view/aside.php'; ?>
            <section>
                <h2>
                    Choose a supplier:
                </h2>
                <form action="/FinalExam/php/index.php?action=supplier_page" method="post">
                    <select name="supplier_id">
                        <?php foreach ($suppliers as $supplier) : ?>
                            <option value="<?php echo $supplier['supplier_id']; ?>"><?php echo $supplier['supplier_name']; ?></option>
                        <?php endforeach; ?>                    
                    </select>
                    <input type="hidden" name="supplier_id" value="<?php echo htmlspecialchars($supplier['supplier_id']); ?>">
                    <input type="submit" value="Choose" name="choose" id="choose"> 
                </form>

            </section>
            <?php include './php/view/footer.php'; ?>
        </main>

    </body>
</html>