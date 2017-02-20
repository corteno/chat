<?php
include('db.php');
include('functions.php');

$query = "SELECT * FROM (SELECT * FROM chat ORDER BY id DESC LIMIT 10) tmp ORDER BY tmp.id ASC";
$messages = $conn->query($query);

while ($row = $messages->fetch_array()) :

	?>
	<div class="message message-self">
		<span class="message-user"><?php echo $row['name']; ?></span>
		<span class="message-content"><?php echo $row['message']; ?></span>
		<span class="message-time"><?php echo formatDate($row['date']); ?></span>
	</div>
<?php endwhile; ?>
<script type="text/javascript">
	initScroll();
</script>

