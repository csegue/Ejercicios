<?php
include('./zBD/BD_canciones.php');
 ?>


<?php
// [MOSTRAR] ****************************************************************************************************
//            and C.Usu_id=$xid_usu and C.Estado=0");
//            $result = mysqli_query($conn,"SELECT * FROM canciones A JOIN album B ON A.Album=B.id");        //Funciona
//            $result = mysqli_query($conn,"SELECT * FROM canciones A JOIN artista B ON A.Artista= B.id");   //Funciona
              $result = mysqli_query($conn,"SELECT * FROM canciones A JOIN album C JOIN artista D ON  A.Artista=D.id and A.Album=C.id"); //Funciona

            mysqli_data_seek ($result, 0);
            $filas=mysqli_num_rows($result);  echo "Filas:".$filas; echo "<hr>";

            function mostrarDatos3 ($resultados)
            {
                if ($resultados !=NULL)
                {
?>
                    <form  name="formulario"  method="POST" action="#">
                        <input type="text" name="id" value="  <?php echo "canciones :".$resultados['id'];  ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['Titulo']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['Artista']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['Album']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['Duracion']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['NumReprod']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "canciones :".$resultados['Enlace']; ?>"/><br/>

                        <input type="text" name="pass" value="<?php echo "album     :".$resultados['RefAlb']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "album     :".$resultados['TituloAlb']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "album     :".$resultados['Lanzamiento']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "album     :".$resultados['ImgPortada']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "album     :".$resultados['Estilo']; ?>"/><br/>

                        <input type="text" name="pass" value="<?php echo "artista     :".$resultados['Nombre']; ?>"/><br/>
                        <input type="text" name="pass" value="<?php echo "artista     :".$resultados['ImgArtista']; ?>"/><br/>
                    </form>
<?php
                }
            }

            while ($fila = mysqli_fetch_array($result)){
            mostrarDatos3($fila);
            }



?>

</html>
