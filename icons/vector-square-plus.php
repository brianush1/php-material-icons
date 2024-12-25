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
	?><path d="M13 19C13 18.7 13 18.3 13.1 18H8V16H6V8H8V6H16V8H18V13.1C18.3 13 18.7 13 19 13C19.3 13 19.7 13 20 13.1V8H22V2H16V4H8V2H2V8H4V16H2V22H8V20H13.1C13 19.7 13 19.3 13 19M18 4H20V6H18V4M4 4H6V6H4V4M6 20H4V18H6V20M20 15V18H23V20H20V23H18V20H15V18H18V15H20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
