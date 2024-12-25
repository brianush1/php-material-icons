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
	?><path d="M4,4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4H4M4,6H11V8.13C9.24,8.59 8,10.18 8,12C8,13.82 9.24,15.41 11,15.87V18H4V16H7V8H4V6M13,6H20V8H17V16H20V18H13V15.87C14.76,15.41 16,13.82 16,12C16,10.18 14.76,8.59 13,8.13V6M4,10H5V14H4V10M19,10H20V14H19V10M13,10.27C13.62,10.63 14,11.29 14,12C14,12.71 13.62,13.37 13,13.73V10.27M11,10.27V13.73C10.38,13.37 10,12.71 10,12C10,11.29 10.38,10.63 11,10.27Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
