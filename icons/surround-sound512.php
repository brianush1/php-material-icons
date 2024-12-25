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
	?><path d="M18 7V9H22V11H20C18.9 11 18 11.9 18 13V17H24V15H20V13H22C23.1 13 24 12.1 24 11V9C24 7.9 23.1 7 22 7H18M9 17H7V15H9V17M9 7V9H11V17H13V7H9M0 7V13H4V15H0V17H4C5.1 17 6 16.1 6 15V13C6 11.9 5.1 11 4 11H2V9H6V7H0M17 17H15V15H17V17" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
