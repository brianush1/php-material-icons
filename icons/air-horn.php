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
	?><path d="M19,2.8V6L19,9.2C19,9.5 18.7,9.8 18.4,9.7C18.4,9.7 14.5,7.1 10,7.1V9.5H10.2C10.7,9.5 11.2,9.7 11.4,10.1L12.7,11.9C12.9,12.1 13,12.4 13,12.6V20.6C13,21.3 12.3,22 11.5,22H6.5C5.7,22 5,21.4 5,20.6V12.6C5,12.3 5.1,12.1 5.3,11.9L6.6,10.1C6.9,9.7 7.3,9.5 7.8,9.5H8V8C7.6,8.5 7,8.8 6.4,8.8C5.1,8.8 4,7.5 4,6C4,4.5 5.1,3.2 6.4,3.2C7,3.3 7.6,3.6 8,4V2.6H10V5C14.5,5 18.4,2.4 18.4,2.4C18.7,2.3 19,2.5 19,2.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
