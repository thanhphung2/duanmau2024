<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="view/images/banner.webp" style="width:100%">
                    <div class="text">Đón Tết Hải Đăng</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="view/images/banner2.png" style="width:100%">
                    <div class="text">Big update</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="view/images/banner3.jpeg" style="width:100%">
                    <div class="text">Sinh nhật năm 3</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
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