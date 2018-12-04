 <body>
 <table border="1">
 <?php
    $n_max = 10;
    $m_max = 10;
    $n_min = 0;
    $m_min = 0;
    for ($i = $n_min; $i <= $n_max; $i++)
    {
        print "\t<tr>\n";
        for ($j = $m_min; $j <= $m_max; $j++)
        {
            $p = $i*$j;
            if (($i==0)&&($j==0)){
            print "\t\t<td></td>\n";}
            else if ($j==0){
            print "\t\t<td><b>$i</b></td>\n";}
            else if ($i==0) {
            print "\t\t<td><b>$j</b></td>\n";}
            else
            {print "\t\t<td>$p</td>\n";}
        }
        print "\t</tr>\n";
    }
 ?>
 </table>
 </body>
