<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Kenya!</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



    <style  type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;

    }
    table td,th {
        border: 1px solid black;

    }
    td {
        text-align: center;
    }

    </style>



  </head>

  <body>
    <div class="container">
      <div class="responsive"
        <!-- Page Content goes here -->
        <div class="row">

            <div class="col s12">
                <img class="pure-img" src="kenya.jpg" style="width: 750px">
                <!--<div class="container">-->
                <div class="divider"></div>
                <div class="section">

                  <h1 class="title">

                     <strong>COUNTY-MIX</strong>!
                    <?php include('county_mix.php') ?>
                    <?php include('countytable.php') ?>
                  </h1>
                </div>

                    <table class="striped highlight" style="width:70%; padding-top:10%">
                    <th> Number</th>
                    <th>County Name</th>
                    <th>Governor</th>
                    <th>Party</th>
                    <th>Party Logo</th>
                    <th>Website</th>


                    <?php

                //link to retrive the icons
                    $image="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falert_photo%2F02050a88-734d-40ed-99bf-6e1aaffda636.jpg?alt=media&token=fdc425d4-7bec-444c-af22-c422fd8fee0c";
                    $odm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Forange.jpg?alt=media&token=158949f3-3f22-4110-a569-d728bfff0657";
                    $kanu="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fkanu.gif?alt=media&token=acb58b2a-8452-498c-b44e-ae17c91ed6ef";
                    $jubilee="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fjubilee.png?alt=media&token=65440557-b5ef-405e-b880-22e7bf26d42b";
                    $narc="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fnarc.jpeg?alt=media&token=efca49af-0efd-44af-9fe3-6b3d4bad0827";
                    $independent="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Findependent.png?alt=media&token=b03ad152-ddfa-49bc-84a6-ffa633c3a301";
                    $wdm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fmuungano.png?alt=media&token=3302a8fd-b7f5-4e98-9d3a-7fc6d6caba76";
                    $ccm="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fccm.jpg?alt=media&token=b82dbd2b-0e47-4639-a15f-102b3c2c937c";
                    $ford="https://firebasestorage.googleapis.com/v0/b/thebeast-2fd61.appspot.com/o/Alert_images%2Falbright%2Fford.jpg?alt=media&token=344b2fd5-2488-4661-8746-ad4558712c9f";

                    foreach ($resultDirect as list($a, $b, $c, $d, $e)) {
                        echo "<tr>";
                        echo "<td >$a</td>";//get index
                        echo "<td>$b</td>";
                        echo "<td>$c</td>";
                        echo "<td><a>$d</a></td>";

                        if($d=='ODM'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$odm}'></td>";
                        }elseif ($d=='Jubilee'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$jubilee}'></td>";
                        }
                        elseif ($d=='KANU'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$kanu}'></td>";
                        }
                        elseif ($d=='CCM'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$ccm}'></td>";
                        }
                        elseif ($d=='FORD Kenya'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$ford}'></td>";
                        }

                        elseif ($d=='Independent'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$independent}'></td>";
                        }

                        elseif ($d=='WDM K'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$wdm}'></td>";
                        }

                        elseif ($d=='CCM'){
                            echo "<td><img style='width: 50px' alt='image not found' src='{$ccm}'></td>";
                        }
                        else{
                            echo "<td><img style='width: 50px' alt='image not found' src='{$image}'></td>";
                        }


                        echo "<td>$e</td>";




                        echo "</tr>";
                    }
                    ?>


                    </table>
                </div>


                <?php
                //To display the total count of governors per Party
                $party= array();
                foreach ($resultDirect as $a){
                    $party[] = $a[3];
                }

                $party = array_count_values($party);
                echo "<b>The following distribution shows the total number of governors in each party</b></br>";
                print_r($party);
                  echo "</br>";



                //extra effortThis code shows the governors in each party from the distribution.
                echo "<b>The following governors belong to the Jubilee party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="Jubilee") {

                        echo $resultDirect[$row][2].'</br>';

                    }
                }
                echo "<b>The following governors belong to the ODM party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="ODM") {
                        echo $resultDirect[$row][2].'</br>';
                    }}
                echo "<b> following governors belong to the WDM K party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="WDM K") {

                        echo $resultDirect[$row][2].'</br>';
                    }
                }
                echo "<b>The following governors belong to the Independent party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="Independent") {
                        echo $resultDirect[$row][2].'</br>';
                    }
                }
                echo "<b>The following governors belong to the NARC Kenya party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="Narc Kenya") {
                        echo $resultDirect[$row][2].'</br>';
                    }
                }
                echo "<b>The following governors belong to the CCM party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="CCM") {
                        echo $resultDirect[$row][2].'</br>';
                    }
                }

                echo "<b>The following governors belong to the KANU party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="KANU") {

                        echo $resultDirect[$row][2].'</br>';
                    }
                }
                echo "<b>The following governors belong to the FORD party.</b>".'</br>';
                for ($row = 0; $row < 47; $row++) {
                    if($resultDirect [$row][3]=="FORD") {
                        echo $resultDirect[$row][2].'</br>';
                    }
                }

                ?>


            </div>


        </div>


    </div>

 </body>
 <!--JavaScript at end of body for optimized loading-->
 <!--<script type="text/javascript" src="js/materialize.min.js"></script>-->
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 </html>
