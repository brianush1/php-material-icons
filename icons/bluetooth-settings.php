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
	?><path d="M14.88,14.29L13,16.17V12.41L14.88,14.29M13,3.83L14.88,5.71L13,7.59M17.71,5.71L12,0H11V7.59L6.41,3L5,4.41L10.59,10L5,15.59L6.41,17L11,12.41V20H12L17.71,14.29L13.41,10L17.71,5.71M15,24H17V22H15M7,24H9V22H7M11,24H13V22H11V24Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
