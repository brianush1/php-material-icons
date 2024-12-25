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
	?><path d="M14 2H6C4.89 2 4 2.9 4 4V20C4 21.11 4.89 22 6 22H18C19.11 22 20 21.11 20 20V8L14 2M18 20H6V4H13V9H18V20M15.2 10.8C14.7 10.3 14.1 10 12.8 10H9V19H10.6V15.7H12.8C14.1 15.7 14.6 15.5 15.2 15C15.8 14.5 16 13.8 16 12.9C16 12 15.8 11.4 15.2 10.8M13.9 14C13.6 14.3 13.3 14.5 12.7 14.5H10.6V11.3H12.6C13.2 11.3 13.6 11.5 13.9 11.8C14.2 12.1 14.3 12.4 14.3 12.9S14.2 13.7 13.9 14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
