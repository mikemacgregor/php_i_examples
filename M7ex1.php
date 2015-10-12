<?php // from Richard Apuzzo III to All Participants: ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>M7ex1 Example</title>
</head>
<body>
<?php
$productsArray = [1=>
		['id'=>1,'name'=>'Galaxy S5','price'=>200.00],
		['id'=>22,'name'=>'iPhone 4','price'=>199.97],
		['id'=>76,'name'=>'HTC One M8','price'=>549.00],
		];
$productArrayKeys = ['id','name','price'];
$columnCount = 3;
?>
    <table>
        <thead>
            <tr>
            <?php 
                $output = '';
                for ($th=0; $th<$columnCount; $th++) {
                    $output .= '<th>'.ucwords($productArrayKeys[$th]).'</th>';
                }
                echo $output;
            ?>
            </tr>
        </thead>
        <tbody>
            <?php                 
                $output = '';
            	foreach ($productsArray as $item => $value) {
                    $output .= '<tr>';
                    for ($td=0; $td<$columnCount; $td++) {
                        $output .='<td>'.$value[$productArrayKeys[$td]].'</td>';
                    }
                    $output .= '</tr>';
                }
                echo $output;
                ?>
        </tbody>
    </table>
</body>
//</html>