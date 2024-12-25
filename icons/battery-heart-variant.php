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
	?><path d="M16.67 4H15V2H9V4H7.33A1.34 1.34 0 0 0 6 5.33V20.67A1.34 1.34 0 0 0 7.33 22H16.67A1.34 1.34 0 0 0 18 20.67V5.33A1.34 1.34 0 0 0 16.67 4M12.58 15.64L12 16.17L11.42 15.64C9.36 13.77 8 12.54 8 11A2.18 2.18 0 0 1 10.2 8.8A2.4 2.4 0 0 1 12 9.63A2.4 2.4 0 0 1 13.8 8.8A2.18 2.18 0 0 1 16 11C16 12.54 14.64 13.77 12.58 15.64Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
