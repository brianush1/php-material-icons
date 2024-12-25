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
	?><path d="M21 7H3C1.9 7 1 7.9 1 9V14C1 15.1 1.9 16 3 16H4L5.4 17.4C5.8 17.8 6.3 18 6.8 18H17.1C17.6 18 18.1 17.8 18.5 17.4L20 16H21C22.1 16 23 15.1 23 14V9C23 7.9 22.1 7 21 7M3 14V9H21V14H19.2L17.2 16H6.8L4.8 14H3M19 11H5V13H19V11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
