        <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/datatables-simple-demo.js"></script>

        <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            // $("#summernote").summernote();
            $("#summernote").summernote({
                placeholder: 'Type Your Description.',
                height: 300
            });

            $('.dropdown-toggle').dropdown();
        });
    </script>

    </body>
</html