<style>
    table, td {
        border: solid 1px black;
        text-align: center;
        padding: 5px;
    }

</style>

<table>
    <?php
        for ($i=0;$i<10;$i++){
            echo '<tr>';
            for ($j=1;$j<11;$j++){
                $newj = $j + $i*10;
                // echo '<td>';
                $prime = 0;
                for ($k=1;$k<=$newj;$k++){
                    if ($newj % $k == 0){
                        $prime++;
                    }
                }
                if ($prime == 2){
                    echo '<td bgcolor="yellow">';
                }else {
                    echo '<td>';
                }
                echo $newj;
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>