<?php return function(
	$size = "1em",
	$color = "currentColor",
	$width = null,
	$height = null,
	$viewBox = "0 0 24 24",
	$className = null,
	$ariaLabel = null,
	$ariaHidden = null,
	$title = null,
	$desc = null,
) { ?>
	<svg <?php
		$attribs = "";
		$attribs .= " viewBox=\"$viewBox\"";
		$attribs .= " width=\"" . ($width === null ? $size : $width) . "\"";
		$attribs .= " height=\"" . ($height === null ? $size : $height) . "\"";
		if ($className !== null) $attribs .= " class=\"$className\"";
		if ($ariaLabel !== null) $attribs .= " aria-label=\"$ariaLabel\"";
		if ($ariaHidden !== null) $attribs .= " aria-hidden=\"$ariaHidden\"";
		echo $attribs;
	?>><?php
		if ($desc !== null) {
			echo "<desc>" . $desc . "</desc>";
		}
	?><?php
		if ($title !== null) {
			echo "<title>" . $title . "</title>";
		}
	?><path d="M2,5.27L3.28,4L20,20.72L18.73,22L17.5,20.79C16.08,22.16 14.14,23 12,23A8,8 0 0,1 4,15V11H7.73L5.73,9H4C4,8.46 4.05,7.93 4.15,7.42L2,5.27M11,1.07V9H10.82L5.79,3.96C7.05,2.4 8.9,1.33 11,1.07M20,11V15C20,15.95 19.83,16.86 19.53,17.71L12.82,11H20M13,1.07C16.94,1.56 20,4.92 20,9H13V1.07Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
