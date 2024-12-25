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
	?><path d="M20,22C21.11,22 22,21.11 22,20V18H20V20H18V22H20M16,22V20H13V22H16M11,22V20H9V18H7V20C7,21.11 7.89,22 9,22H11M22,16V13H20V16H22M9,16C9,16 9,11.33 9,9C11.33,9 16,9 16,9C16,9 16,5 16,3C16,1.89 15.11,1 14,1H3C1.89,1 1,1.89 1,3V14C1,15.11 1.89,16 3,16C5,16 9,16 9,16M7,14H3V3H14V7H9C7.89,7 7,7.89 7,9V14M22,11V9C22,7.89 21.11,7 20,7H18V9H20V11H22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
