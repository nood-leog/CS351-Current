        <aside>
            <nav>
                <ul>
                    <!-- display links for all categories -->
                    <?php foreach($categories as $category) : ?>
                    <li>
                        <a href="?action=<?php echo strtolower($category['category_name']); ?>">
                            <?php echo $category['category_name']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>
