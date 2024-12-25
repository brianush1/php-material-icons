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
	?><path d="M11 4C8.8 4 7 5.8 7 8S8.8 12 11 12 15 10.2 15 8 13.2 4 11 4M11 14C6.6 14 3 15.8 3 18V20H12.5C12.2 19.2 12 18.4 12 17.5C12 16.3 12.3 15.2 12.9 14.1C12.3 14.1 11.7 14 11 14M18 20C16.6 20 15.5 18.9 15.5 17.5C15.5 17.1 15.6 16.7 15.8 16.4L14.7 15.3C14.3 15.9 14 16.7 14 17.5C14 19.7 15.8 21.5 18 21.5V23L20.2 20.8L18 18.5V20M18 13.5V12L15.8 14.2L18 16.4V15C19.4 15 20.5 16.1 20.5 17.5C20.5 17.9 20.4 18.3 20.2 18.6L21.3 19.7C21.7 19.1 22 18.3 22 17.5C22 15.3 20.2 13.5 18 13.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>