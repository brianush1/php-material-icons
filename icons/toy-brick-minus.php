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
	?><path d="M23 20H15V18H23V20M13 19C13 15.69 15.69 13 19 13C19.7 13 20.37 13.13 21 13.35V6H19V5C19 3.9 18.11 3 17 3H15C13.9 3 13 3.9 13 5V6H11V5C11 3.9 10.11 3 9 3H7C5.9 3 5 3.9 5 5V6H3V20H13.09C13.04 19.67 13 19.34 13 19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
