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
	?><path d="M11 17C11 17 11.3 19 9 22H15C12.7 19 13 17 13 17S14 18 16 18 20 16 20 14C20 9 15 7 12 2C9 7 4 9 4 14C4 16 6 18 8 18S11 17 11 17M13 14H11C11 14 10 16 8 16C7.1 16 6 14.9 6 14C5.8 11 9.9 8.2 12 5.4C14.1 8.1 18.2 10.9 18 14C18 14.9 16.9 16 16 16C14 16 13 14 13 14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
