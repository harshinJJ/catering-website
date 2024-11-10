<!-- Footer -->
<footer class="footer bg-dark text-white py-5">
    <div class="container">
        <!-- Footer Top Section: Logo and Links -->
        <div class="row mb-5">
            <div class="col-md-4 text-center text-md-left">
                <!-- Logo -->
                <img src="uploads/logo.png" alt="Logo" class="footer-logo mb-3" />
                <p class="text-muted">Bringing the best service to your doorstep.</p>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-4 text-center text-md-right">
                <h5 class="text-uppercase mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="./" class="footer-link">Home</a></li>
                    <li><a href="./?p=view_categories" class="footer-link">Categories</a></li>
                    <li><a href="./?p=about" class="footer-link">About</a></li>
                    <li><a href="./?p=contact" class="footer-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
          <!-- Social Media Section -->
<!-- Social Media Section -->
<!-- Social Media Section -->
<div class="col-md-4 text-center text-md-right">
    <h5 class="text-uppercase mb-4">Follow Us</h5>
    <div class="social-icons">
        <a href="https://www.facebook.com/yourpage" class="social-icon" target="_blank" title="Facebook">
            <img src="uploads/facebook.png" alt="Facebook" width="40" height="40">
        </a>
        <a href="https://twitter.com/yourpage" class="social-icon" target="_blank" title="Twitter">
            <img src="uploads/twitter.png" alt="Twitter" width="40" height="40">
        </a>
        <a href="https://www.instagram.com/yourpage" class="social-icon" target="_blank" title="Instagram">
            <img src="uploads/instagram.png" alt="Instagram" width="40" height="40">
        </a>
        <a href="https://www.linkedin.com/in/yourpage" class="social-icon" target="_blank" title="LinkedIn">
            <img src="uploads/linkdin.png" alt="LinkedIn" width="40" height="40">
        </a>
    </div>
</div>



        </div>

        <!-- Footer Bottom Section: Copyright and Developer Info -->
        <div class="row">
            <div class="col text-center">
                <p class="m-0">Copyright &copy; <?php echo $_settings->info('short_name') ?> 2024. All Rights Reserved.</p>

            </div>
        </div>
    </div>
</footer>

<!-- Font Awesome Icons (Ensure you have the Font Awesome CDN included in your project) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Custom CSS for Enhanced Footer Design -->
<style>
    /* Footer Background and Text Styles */
    .footer {
        background: linear-gradient(135deg, #1e1e2f, #2a2a3d);
        color: #ffffff;
        padding-top: 60px;
        padding-bottom: 40px;
    }

    /* Footer Logo Styles */
    .footer-logo {
        max-width: 150px;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
    }

    /* Quick Links and Social Icons Styling */
    .footer-link {
        font-size: 16px;
        color: #d1d1d1;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 5px 0;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #f39c12;
        text-decoration: underline;
    }

    .social-icons {
        margin-top: 15px;
    }

    .social-icon {
        font-size: 20px;
        color: #d1d1d1;
        margin: 0 10px;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: #f39c12;
    }

    /* Footer Bottom Text Styling */
    footer p {
        font-size: 14px;
        color: #b8b8b8;
    }

    footer a {
        color: #b8b8b8;
        text-decoration: none;
    }

    footer a:hover {
        color: #f39c12;
    }
</style>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
