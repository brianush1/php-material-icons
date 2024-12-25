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
	?><path d="M7.79 18L7.28 11H16.74L16.23 18H7.79M9.83 5H14.16L16.96 7.73L16.87 9H7.12L7.03 7.73L9.83 5M22 7.46L20.59 6.05L19 7.63L19.03 7.07L15 3H9L4.97 7.07L5 7.57L3.41 6L2 7.44L5.23 10.55L5.93 20H18.07L18.77 10.56L22 7.46Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
