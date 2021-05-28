<?php

    echo 'uri segment = ';var_dump($uri); echo '<br>';
    echo 'menu        = ';var_dump($menu); echo '<br>';
    echo 'role menu   = ';var_dump($role); echo '<br>';


?>
<h3> halaman test</h3> <br>

<?php 
    $data1  = [
        ['name'=>'alfri','age'=>25,'adress'=>'medan'],
        ['name'=>'habibi','age'=>20,'adress'=>'langkat'],
        ['name'=>'ijol','age'=>24,'adress'=>'stabat'],
        ['name'=>'gunwan','age'=>27,'adress'=>'kisaran'],
    ];
    $data2 =[
        ['nama'=>'ridwan','umur'=>22,'alamat'=>'jakarta'],
        ['nama'=>'nasrol','umur'=>23,'alamat'=>'bandung'],
        ['nama'=>'eka','umur'=>24,'alamat'=>'papua'],
    ] 
    // $data2  =array_keys($data1)
?>
<hr>
<?php var_dump($data2) ?>
<hr>
<table>
    <thead>
        <th>nama</th>
        <th>umur</th>
        <th>alamat</th>
        <th>hobi</th>
    </thead>
    <tbody>
    
    <h3>array setelah foreach</h3>
    <?php foreach($data1 as $d1) : ?>
        <tr>            
            <td><?= $d1['name']?></td>
            <td><?= $d1['age']?></td>
            <td><?= $d1['adress']?></td> 
            <td>
               <select name="sahabat" id="">
                    <?php foreach($data2 as $d2) : ?>
                        <option value=""><?= $d2['nama']?></option>   
                    <?php endforeach ?> 
               </select>
            </td>
        </tr>
        <?php endforeach ?>     
    </tbody>
</table>


