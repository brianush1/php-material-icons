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
	?><path d="M2 0C.9 0 0 .9 0 2V6H2V2H6V0H2M18 0V2H22V6H24V2C24 .9 23.1 0 22 0H18M9.5 13C8.7 13 8 12.3 8 11.5S8.7 10 9.5 10 11 10.7 11 11.5 10.3 13 9.5 13M11 15L12 13L13 15H11M14.5 13C13.7 13 13 12.3 13 11.5S13.7 10 14.5 10 16 10.7 16 11.5 15.3 13 14.5 13M0 18V22C0 23.1 .9 24 2 24H6V22H2V18H0M22 18V22H18V24H22C23.1 24 24 23.1 24 22V18H22M12 3C7.6 3 4 6.6 4 11C4 13 4.8 14.9 6 16.3V21H18V16.3C19.2 14.9 20 13.1 20 11C20 6.6 16.4 3 12 3M16 15.4V19H14V17H13V19H11V17H10V19H8V15.4C6.8 14.3 6 12.7 6 11C6 7.7 8.7 5 12 5S18 7.7 18 11C18 12.8 17.2 14.3 16 15.4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
