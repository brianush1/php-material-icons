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
	?><path d="M9 6H15V14H9V6M22 4V16C22 17.11 21.11 18 20 18H16L12 22L8 18H4C2.9 18 2 17.11 2 16V4C2 2.9 2.9 2 4 2H20C21.11 2 22 2.9 22 4M16 5.09C16 4.5 15.5 4 14.86 4H9.14C8.5 4 8 4.5 8 5.09V14.91C8 15.5 8.5 16 9.14 16H14.86C15.5 16 16 15.5 16 14.91V5.09Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
