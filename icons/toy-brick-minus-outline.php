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
	?><path d="M13.09 20H3V6H5V5C5 3.9 5.9 3 7 3H9C10.11 3 11 3.9 11 5V6H13V5C13 3.9 13.9 3 15 3H17C18.11 3 19 3.9 19 5V6H21V13.35C20.37 13.13 19.7 13 19 13V8H5V18H13.09C13.04 18.33 13 18.66 13 19S13.04 19.67 13.09 20M23 18H15V20H23V18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
