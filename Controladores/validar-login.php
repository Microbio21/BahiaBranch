<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /*Save info input*/
        $User = $_POST['username'];
        $Pass = $_POST['password'];

        if( $User && $Pass == '' ) {
            $error = 'Debes ingresar un usuario y contraseña (Pajin)';
            header("Location: ../login.php?error=$error&user=$User");

        }elseif ( empty($User) && empty($Pass) ) {
            $error = 'Debes ingresar un usuario y contraseña (Pajin)';
            header("Location: ../login.php?error=$error&user=$User");

        }else {
            include('conexion.php');
            $stmt = $conexion->prepare("SELECT USERNAME, PASSWORD FROM credentials WHERE USERNAME = ?");
            $stmt->bindParam(1, $User);
            $stmt->execute();
            
            if( $stmt->rowCount() === 1 ) {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                $dbUser = $data['USERNAME'];
                $dbPass = $data['PASSWORD'];

                if($User === $dbUser) {
                    if(password_verify($Pass, $dbPass)) {
                        session_start();
                        $_SESSION['Login'] = $dbUser;
                        header("Location: ../index.php");
                    }else {
                        $error = 'Usuario y/o contraseña incorrecta';
                        header("Location: ../login.php?error=$error&user=$User");
                    }
                } else {
                    $error = 'Usuario y/o contraseña incorrecta';
                    header("Location: ../login.php?error=$error&user=$User");
                }

            } else {
                $error = 'Usuario y/o contraseña incorrecta';
                header("Location: ../login.php?error=$error&user=$User");
            }
        }

    } else {
        die('Método de ingreso no permitido');
    }