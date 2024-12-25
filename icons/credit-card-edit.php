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
	?><path d="M20.6 11.3C20.7 11.2 20.8 11.1 21 11.1C21.1 11.1 21.3 11.2 21.4 11.3L22.6 12.5C22.8 12.7 22.8 13.1 22.6 13.3L21.6 14.3L19.6 12.3L20.6 11.3M13 18.9L19 12.8L21.1 14.9L15.1 21H13V18.9M11 19.1V18.1L11.6 17.5L18.1 11H4V8H20V9.1L22 7.1V6C22 4.9 21.1 4 20 4H4C3.5 4 3 4.2 2.6 4.6C2.2 5 2 5.5 2 6V18C2 18.5 2.2 19 2.6 19.4C3 19.8 3.5 20 4 20H11V19.1Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
