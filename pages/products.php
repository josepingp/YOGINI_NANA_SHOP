<main class="p-c">
    <section class="menu-products-c">
        <div class="menu-products">
            <button class="m-p-btn">
                <?php include "./assets/svg/products-menu-mobile.php"; ?>
            </button>
            <ul>
                <a href="/proyecto/products/1" class="m-p-link">
                    <li>Moda</li>
                </a>
                <a href="/proyecto/products/5" class="m-p-link">
                    <li>Accesorios</li>
                </a>
                <a href="/proyecto/products/3" class="m-p-link">
                    <li>Esterillas</li>
                </a>
                <a href="/proyecto/products/4" class="m-p-link">
                    <li>Mantas</li>
                </a>
                <a href="/proyecto/products/2" class="m-p-link">
                    <li>Zafus</li>
                </a>
                <a href="/proyecto/products/6" class="m-p-link">
                    <li>Meditación</li>
                </a>
            </ul>
        </div>
    </section>
    <section>
        <h2 class="tittle-p-l"> <?= isset($category) ? $category : 'Productos'; ?></h2>
        <?php if (isset($products))
            echo '<section class="products-c-l">';
        foreach ($products as $product) {
            ?>
            <article class="card">
                <div class="aside-imgs">
                    <?php
                    foreach ($product[0]['photos'] as $key => $photo) {
                        echo '<div class="aside-img" id="' . $key . '">
            <img src="./repo/product/' . $photo . '" alt="" width="500">
            </div>';
                    }
                    ?>
                </div>
                <div class="principal-img-container">
                    <?php
                    echo '<img src="./repo/product/' . $product[0]['main_photo'] . '" alt="" width="300">';
                    ?>
                </div>
                <div class="data">
                    <h3><?= $product[0]['name']; ?></h3>
                    <p> <?= $product[0]['price']; ?> €</p>
                </div>
                <button class="add-to-cart">Añadir al carrito</button>
            </article>
            <?php
        }
        ?>
    </section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.querySelector('.m-p-btn');
        const menu = document.querySelector('.menu-products-c');

        window.addEventListener('resize', handleResize);

        menuBtn.addEventListener('click', function () {
            menu.classList.toggle('active-p');
        })

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function () {
                let productId = button.getAttribute('product_id');
                let cartCounter = document.querySelector('.cart-counter');

                let request = new XMLHttpRequest();
                request.open('POST', '/proyecto/products/:id', true);
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('product_id=' + encodeURIComponent(productId));


                if (parseInt(cartCounter.innerHTML) > 0) {
                    cartCounter.innerHTML = parseInt(cartCounter.innerHTML) + 1;
                } else {
                    cartCounter.innerHTML = 1;
                }


            })
        });





        function handleResize() {
            const windowWidth = window.innerWidth;
            if (windowWidth > 780) menu.classList.remove('active-p');
        }


        handleResize();
    })
</script>