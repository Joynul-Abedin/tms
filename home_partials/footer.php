
        <footer class="tm-footer text-center">
            <p>Copyright &copy; 2021 BDTutor

                | Design: <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100008310437246" target="_blank">Arifur Rahman Ovi</a></p>
        </footer>
    </div>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/parallax.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle click on paging links
            $('.tm-paging-link').click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $('.tm-gallery-page').addClass('hidden');
                $('#tm-gallery-page-' + page).removeClass('hidden');
                $('.tm-paging-link').removeClass('active');
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>