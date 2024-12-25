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
	?><path d="M3 7V9H7V11H5C3.9 11 3 11.9 3 13V17H9V15H5V13H7C8.1 13 9 12.1 9 11V9C9 7.9 8.1 7 7 7H3M13 17H11V15H13V17M17 7C15.9 7 15 7.9 15 9V15C15 16.1 15.9 17 17 17H19C20.1 17 21 16.1 21 15V9C21 7.9 20.1 7 19 7H17M17 9H19V15H17V9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
