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
	?><path d="M11 22H13V24H11V22M7 24H9V22H7V24M15 24H17V22H15V24M16.54 13.97L18.18 21L12 17.27L5.82 21L7.45 13.97L2 9.24L9.19 8.63L12 2L14.81 8.63L22 9.24L16.54 13.97M15.76 17.66L14.77 13.38L18.09 10.5L13.71 10.13L12 6.09L10.29 10.13L5.91 10.5L9.23 13.38L8.24 17.66L12 15.39L15.76 17.66Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
