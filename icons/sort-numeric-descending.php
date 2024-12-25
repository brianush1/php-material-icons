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
	?><path d="M19 7H22L18 3L14 7H17V21H19M9 21H5V19H9V18H7C5.9 18 5 17.11 5 16V15C5 13.9 5.9 13 7 13H9C10.11 13 11 13.9 11 15V19C11 20.11 10.11 21 9 21M9 15H7V16H9M7 3H9C10.11 3 11 3.9 11 5V9C11 10.11 10.11 11 9 11H7C5.9 11 5 10.11 5 9V5C5 3.9 5.9 3 7 3M7 9H9V5H7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>