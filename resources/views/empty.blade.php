<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body class="index">

    <script>
            @while (!isset($_SESSION['admin']))
                var password = prompt('Введите пароль для входа в админ-панель');
                if (password == "123"){
                    <?php
                        $_SESSION['admin'] = 'yes';
                    ?>
                        window.location.href = "/admin-panel";
                }
                else{
                    alert('Incorrect value');
                }
            @endwhile
                window.location.replace("/admin-panel");
        </script>



</body>

</html>
