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
	?><path d="M21 13C21.6 13 22.1 13.2 22.4 13.6C22.8 14 23 14.5 23 15L15 18L8 16V7H9.9L17.2 9.7C17.7 9.9 18 10.3 18 10.8C18 11.1 17.9 11.4 17.7 11.6C17.5 11.8 17.2 12 16.8 12H14L12.3 11.3L12 12.2L14 13H21M2 7H6V18H2V7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
