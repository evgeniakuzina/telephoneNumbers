<?php

$json = file_get_contents(__DIR__ . '/telephoneNumbers.json');
$data = json_decode($json, true);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Телефонна книга</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr style="font-weight: bold">
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефонный номер</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $item) : ?>
				<tr>
					<td><?php echo $item["firstName"] ?></td>
					<td><?php echo $item["lastName"] ?></td>
					<td><?php echo $item["address"] ?></td>
					<td><?php echo $item["phoneNumber"] ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>