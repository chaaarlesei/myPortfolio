<!-- Alert Box -->

<script src="assets/script/sweetalert.min.js"></script>

<?php

if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>", 
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "Confirm",

        });
    </script>
    <?php
        unset($_SESSION['status']);
}

?>