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
	?><path d="M4 15V18C4 20.21 5.79 22 8 22H16C18.21 22 20 20.21 20 18V15H4M20 13V10C20 8.14 18.72 6.59 17 6.14V4C17 2.9 16.1 2 15 2H9C7.9 2 7 2.9 7 4V6.14C5.28 6.59 4 8.14 4 10V13H20M9 4H15V6H13C13 5.45 12.55 5 12 5S11 5.45 11 6H9V4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
