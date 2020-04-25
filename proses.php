<?php

    $operator = $_POST['operator'];
    $nim = $_POST['nim'];
    $wilayah = $_POST['wilayah'];
    $positif = $_POST['positif'];
    $dirawat = $_POST['dirawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];

    $waktu = date("d-m-y | H:i:s");

    $file = "data.txt";
    $opefile = fopen($file,"r+");
    $data = fgets ($opefile,100);
    $comfile = file($file);
    rewind($opefile);

    fwrite($opefile,

            "

           
    
            <!DOCTYPE html>
            <html lang=en>
            <head>
                <meta charset=UTF-8>
                <meta name=viewport content=width=device-width, initial-scale=1.0>
                <title>Data Covid 19</title>
            </head>
            <body>
                
                    <h2 style=text-align:center; font-family:calibri;> Data Pemantaun Covid19 Wilayah $wilayah </h2>
                    <h2 style=text-align:center> Per  $waktu </h2>
                    <h2 style=text-align:center> $operator / $nim </h2>
                    <br>
                    <hr>
                    <br>
                    <table border=1; width=80% cellpadding:5px; style=margin:auto;>
                        <tr>
                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                Positif
                            </td>

                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'> 
                                Dirawat
                            </td>

                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                Sembuh 
                            </td>

                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                Meninggal 
                            </td>
                        </tr>
                        <tr>                        
                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                $positif 
                            </td>
                        
                            
                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                $dirawat
                            </td>
                       
                            
                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                $sembuh
                            </td>
                       
                            
                            <td style='font-size:20px; font-family:calibri; text-align: center; font-weight: bold;'>
                                $meninggal
                            </td>
                        </tr>
                    </table>
                
            </body>
            </html>
            <br><br>
            <hr>
            
            ");
            
            fclose ($opefile);
            
            if ($_POST['submit']) {
        
                echo "<script>
                window.location='hasil.php'</script>";
              
            
            }
            

?>