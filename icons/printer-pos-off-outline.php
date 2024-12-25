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
	?><path d="M2.39 1.73L1.11 3L7 8.89V10H6C4.89 10 4 10.9 4 12V19H17.11L20.84 22.73L22.11 21.46L2.39 1.73M6 17V12H10.11L15.11 17H6M9.2 6L7.2 4H17V10H18C19.11 10 20 10.9 20 12V16.8L18 14.8V12H15.2L13.2 10H15V6H9.2M7 13H11V15H7V13Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
