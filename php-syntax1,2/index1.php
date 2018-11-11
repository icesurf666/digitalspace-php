

<?php
$countRows = 7;
$countCols = $countRows;
for ($i = 1; $i <= $countRows; $i++)
{
    print_line($i, $countCols);
}
function print_line (int $i, int $countCols)
{
    for ($j = 1; $j <= $countCols; $j++)
    {
        echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
    }
    echo "\n";
}