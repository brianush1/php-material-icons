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
	?><path d="M18.68 2.12L12 8.8V2H18C18.24 2 18.46 2.05 18.68 2.12M9.5 7.5L7 9V2H6C4.89 2 4 2.9 4 4V16.8L11.88 8.93L9.5 7.5M21.61 1.73L1.89 21.46L3.16 22.73L4.54 21.35C4.9 21.75 5.42 22 6 22H18C19.11 22 20 21.11 20 20V5.89L22.89 3L21.61 1.73Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
