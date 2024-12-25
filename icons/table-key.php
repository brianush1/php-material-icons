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
	?><path d="M16.8 17C16.4 15.8 15.3 15 14 15C12.3 15 11 16.3 11 18S12.3 21 14 21C15.3 21 16.4 20.2 16.8 19H19V21H21V19H23V17H16.8M14 19C13.4 19 13 18.5 13 18S13.4 17 14 17 15 17.5 15 18 14.6 19 14 19M9 18H4V14H10V15C10.9 13.8 12.4 13 14 13C15.1 13 16.1 13.4 17 14H18V15H20V6C20 4.9 19.1 4 18 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H9.4C9.1 19.4 9 18.7 9 18M12 8H18V12H12V8M4 8H10V12H4V8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
