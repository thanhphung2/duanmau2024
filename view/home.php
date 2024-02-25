<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <!-- Slideshow container -->
            <div class="slideshow-container" style="height:300px;">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="view/images/banner.jpg" style="width:100%">
                    <div class="text" style="color:blue;">Nhiều loại mẫu mới</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="view/images/banner2.jpeg" style="width:100%">
                    <div class="text" style="color:blue;">Mặt hàng mới nhất</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="view/images/banner3.jpg" style="width:100%">
                    <div class="text" style="color:blue;">Chính hãng</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                };
                echo '<div class="boxsp ' . $mr . '">
                        <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                        <p class="price">$' . $price . '</p>
                        <a class="linksp" href="' . $linksp . '">' . $name . '</a>
                        <div class="row btnaddtocart">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                        </div>
                    </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>