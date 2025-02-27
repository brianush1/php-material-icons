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
	?><path d="M18 9H12V4H8C5.8 4 4 5.8 4 8V14C4 15.1 4.9 16 6 16H8V18.9C7.4 18.5 6.8 18.1 6.3 17.6L4.9 19C6.7 20.9 9.2 22 12 22S17.3 20.9 19.1 19.1L17.7 17.7C17.2 18.2 16.7 18.6 16.1 19V16H18.1C19.2 16 20.1 15.1 20.1 14V11C20 9.9 19.1 9 18 9M14 19.8C13.4 20 12.7 20 12 20S10.6 19.9 10 19.8V16H14V19.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
