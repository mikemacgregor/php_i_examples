<?php
define('DEFAULT_STATUS', 'ordered');
/**
 * 
 * @return array [status values]
 */
function getStatusValues()
{
	return array('unassigned', 'ordered', 'sent', 'canceled');
}

/**
 * 
 * @param string $selectedStatus
 * @return string HTML SELECT
 */
function buildStatusOptions($selectedStatus = DEFAULT_STATUS)
{
	$statusValues = getStatusValues();
	$html = '<select name="status">';
	foreach ($statusValues as $value) {
		if ($value == $selectedStatus) {
			$selected = ' selected';
		} else {
			$selected = '';
		}
		$html .= '<option value="' . $value . '"' .$selected . '>' . $value . '</option>';
	}
	$html .= '</select>';
	return $html;
}

function getStaticOrders($num = 1)
{
	//['id' => sequential int, 'order_status' => getStatusValues(RAND), 'amount' => RAND float]
	$data         = [];
	$statusValues = getStatusValues();
	$max          = count($statusValues) - 1;
	for ($id = 1; $id <= $num; $id++) {
		$status = $statusValues[rand(0, $max)];
		$amount = rand(1, 99999);
		$data[] = ['id' => $id, 'order_status' => $status, 'amount' => $amount];
	}
	return $data;
}

