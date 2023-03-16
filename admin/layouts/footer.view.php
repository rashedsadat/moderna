<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="#" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
        </div>
        <div>
            <a href="#" class="footer-link me-4" target="_blank">License</a>
            <a href="#" target="_blank" class="footer-link me-4">More Themes</a>

            <a href="#" target="_blank" class="footer-link me-4">Documentation</a>

            <a href="#" target="_blank" class="footer-link me-4">Support</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<script src="<?= url() ?>admin/assets/js/jquery.js"></script>
<script src="<?= url() ?>admin/assets/js/popper.js"></script>
<script src="<?= url() ?>admin/assets/js/bootstrap.js"></script>
<script src="<?= url() ?>admin/assets/js/perfect-scrollbar.js"></script>

<script src="<?= url() ?>admin/assets/js/menu.js"></script>
<script src="<?= url() ?>admin/assets/js/apexcharts.js"></script>
<script src="<?= url() ?>admin/assets/js/main.js"></script>
<script src="<?= url() ?>admin/assets/js/dashboards-analytics.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- text editor -->
<script>
    $('.text-editor').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
</body>

</html>
