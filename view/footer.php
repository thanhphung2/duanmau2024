<div class="row mb footer">
    Copyright 2024
</div>
</div>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?");
    }
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>

</html>