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
	?><path d="M4.9 5.9L6.3 7.3C9.4 4.2 14.5 4.2 17.6 7.3L19 5.9C15.2 2 8.8 2 4.9 5.9M7.8 8.8L9.2 10.2C10.8 8.6 13.3 8.6 14.9 10.2L16.3 8.8C13.9 6.4 10.1 6.4 7.8 8.8M11.8 15C11 12.7 8.4 11.4 6.1 12.3S2.4 15.7 3.3 18 6.7 21.6 9 20.7C10.3 20.2 11.3 19.2 11.7 18H15V21H18V18H21V15M7.5 18C6.7 18 6 17.3 6 16.5C6 15.7 6.7 15 7.5 15S9 15.7 9 16.5C9 17.3 8.3 18 7.5 18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
