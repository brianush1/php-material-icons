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
	?><path d="M6,8H6.73L14,15.27V16H6M2.27,1L1,2.27L3,4.28C2.41,4.62 2,5.26 2,6V18A2,2 0 0,0 4,20H18.73L20.73,22L22,20.73M20,4H7.82L11.82,8H14V10.18L14.57,10.75L18,8V14.18L22,18.17C22,18.11 22,18.06 22,18V6A2,2 0 0,0 20,4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
