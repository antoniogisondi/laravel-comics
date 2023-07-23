<footer>
    <div class="container-top">
        <div class="row d-flex">
            <div class="col">
                <div class="first-col-list">
                    <ul>
                        <h2>DC COMICS</h2>
                        <li v-for="(item,index) in dc_comics_array" :key="index">{{ item }}</li>
                    </ul>

                    <ul id="sublist">
                        <h2>SHOP</h2>
                        <li v-for="(item,index) in shop_array" :key="index">{{ item }}</li>
                    </ul>
                </div>

                <div class="second-col-list">
                    <ul>
                        <h2>DC </h2>
                        <li v-for="(item,index) in dc_array" :key="index">{{ item }}</li>
                    </ul>
                </div>

                <div class="third-col-list">
                    <ul>
                        <h2>SITES</h2>
                        <li v-for="(item,index) in sites_array" :key="index">{{ item }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-bottom">
        <div class="row d-flex">
            <div class="col-button d-flex">
                <button>SIGN-UP NOW</button>

            </div>
            <div class="col-image d-flex justify-content-end">
                <h3>FOLLOW US</h3>
                <!-- icone social -->
                <a href="#">
                    <img src="../assets/img/footer-facebook.png" alt="">
                </a>
                <a href="#">
                    <img src="../assets/img/footer-periscope.png" alt="">
                </a>
                <a href="#">
                    <img src="../assets/img/footer-pinterest.png" alt="">
                </a>
                <a href="#">
                    <img src="../assets/img/footer-twitter.png" alt="">
                </a>
                <a href="#">
                    <img src="../assets/img/footer-youtube.png" alt="">
                </a>
            </div>

        </div>
    </div>

</footer>