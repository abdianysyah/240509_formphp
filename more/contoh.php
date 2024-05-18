<?php if(isset($_GET['status'])): ?>
        <?php
            if($_GET['status'] == 'sukses'){ 
                function function_alert($message){
                    echo "<script>alert('$message');</script>";
                }
                function_alert("Selamat, data kamu berhasil dikirim!"); 
            } else {
                function function_alert($message){
                    echo "<script>alert('$message');</script>";
                }
                function_alert("Yah, data kamu gagal dikirim. Silahkan hubungi admin PPDB"); 
            }
        ?>

<?php endif; ?>