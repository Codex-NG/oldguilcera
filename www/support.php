<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
?>
<img src="layout/images/titles/t_staff.png"/><p>
<?php
$cache = new Cache('engine/cache/support');
if ($cache->hasExpired()) {
	// Fetch all staffs in-game.
	$staffs = support_list();
	// Fetch group ids and names from config.php
	$groups = $config['ingame_positions'];
	// Loops through groups, separating each group element into an ID variable and name variable
	foreach ($groups as $group_id => $group_name) {
		// Loops through list of staffs
		if (!empty($staffs))
		foreach ($staffs as $staff) {
			if ($staff['group_id'] == $group_id) $srtGrp[$group_name][] = $staff;
		}
	}
	if (!empty($srtGrp)) {
		$cache->setContent($srtGrp);
		$cache->save();
	}
} else {
	$srtGrp = $cache->load();
}
$writeHeader = true;
if (!empty($srtGrp)) {
			?>
		<table id="supportTable" class="table table-striped">
			<?php if ($writeHeader) {
			$writeHeader = false; ?>
			<tr class="yellow">
				<td width="20%">Position</td>
				<td>Name</td>
				<td width="20%">Status</td>
			</tr>
			<?php
			}
		foreach (array_reverse($srtGrp) as $grpName => $grpList) {
			foreach ($grpList as $char) {
				if ($rankcolor !== true && $rankcolor !== false) {
					$checkname = $grpName;
					$rankcolor = true;
				} 
				elseif ($grpName !== $checkname) {
					$checkname = $grpName;
					if ($rankcolor === true) {
						$rankcolor = false;
					} else { 
					$rankcolor = true;
					}
				}
				if ($rankcolor === true) {
				echo '<tr class="lightborder">';
				} else echo '<tr class="darkborder">';
				echo "<td>". $grpName ."</td>";
				echo '<td><a href="characterprofile.php?name='. $char['name'] .'">'. $char['name'] .'</a></td>';
				echo "<td>". online_id_to_name($char['online']) ."</td>";
				echo '</tr>';
			}
		}
	?>
	</table>
	<?php
}
echo'</table>'; include 'layout/overall/footer.php'; ?>