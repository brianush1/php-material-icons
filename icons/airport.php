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
	?><path d="M14.97,5.92C14.83,5.41 14.3,5.1 13.79,5.24L10.39,6.15L5.95,2.03L4.72,2.36L7.38,6.95L4.19,7.8L2.93,6.82L2,7.07L3.66,9.95L14.28,7.11C14.8,6.96 15.1,6.43 14.97,5.92M21,10L20,12H15L14,10L15,9H17V7H18V9H20L21,10M22,20V22H2V20H15V13H20V20H22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
