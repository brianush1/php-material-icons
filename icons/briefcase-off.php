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
	?><path d="M22.11 21.46L20.84 22.73L19.11 21H4C2.89 21 2 20.1 2 19V8C2 6.89 2.89 6 4 6H4.11L1.11 3L2.39 1.73L22.11 21.46M22 18.8L8 4.8V4C8 2.89 8.89 2 10 2H14C15.11 2 16 2.9 16 4V6H20C21.11 6 22 6.9 22 8V18.8M14 4H10V6H14V4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
