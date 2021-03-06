<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codeigniter MongoDB Create Read Update Delete Example</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css"/>
</head>
<body>

<div>
	<!-- <h1>Codeigniter MongoDB Create Read Update Delete Example</h1> -->
	
	<div>
		<a href="<?php echo base_url('create-user'); ?>">Create User</a>
	</div>

	<div id="body">
		<?php
			if ($pengguna) {
		?>
        <table class="datatable">
            <thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Acions</th>
                </tr>
            </thead>
			<tbody>
				<?php
					$i = 0;
					foreach ($pengguna as $user) {
						$col_class = ($i % 2 == 0 ? 'odd_col' : 'even_col');
						$i++;
						// var_dump($user);
					?>
					<tr class="<?php echo $col_class; ?>">
						<td>
							<?php echo $user->name; ?>
						</td>
						<td>
							<?php echo $user->email; ?>
						</td>
						<td>
							<?php echo anchor('/usercontroller/update/' . $user->_id, 'Update'); ?>
							  
							<?php echo anchor('/usercontroller/delete/' . $user->_id, 'Delete', array('onclick' => "return confirm('Do you want delete this record')")); ?>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
        </table>
    <?php
        } else {
            echo '<div style="color:red;"><p>No Record Found!</p></div>';
        }
    ?>
	</div>
</div>

</body>

</html>