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
	?><path d="M16 12.77A2 2 0 0 1 15.86 10.12A5 5 0 0 0 13.04 2.12A5.74 5.74 0 0 0 12 2A5 5 0 0 0 7 7A5 5 0 0 0 8.11 10.12A2 2 0 0 1 8 12.72A5.5 5.5 0 0 0 10.81 21.87A5.42 5.42 0 0 0 12 22A5.5 5.5 0 0 0 16 12.77M13 5A1 1 0 1 1 12 6A1 1 0 0 1 13 5M11 18A1 1 0 1 1 12 17A1 1 0 0 1 11 18M12 15A1 1 0 1 1 13 16A1 1 0 0 1 12 15M14 19A1 1 0 1 1 15 18A1 1 0 0 1 14 19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
