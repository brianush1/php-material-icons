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
	?><path d="M14.4 9.58C12.9 7.89 13 4 13 4H14V2H10V4H11S11.1 7.89 9.6 9.58A2 2 0 0 0 9 11V20A2 2 0 0 0 11 22H13A2 2 0 0 0 15 20V11A2 2 0 0 0 14.4 9.58M13 20H11V11L11.1 10.91A6.26 6.26 0 0 0 12 9.5A6.26 6.26 0 0 0 12.9 10.91L13 11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
