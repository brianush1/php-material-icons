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
	?><path d="M14.83 15.45C14.47 14.9 14.18 14.39 13.91 13.92C12.74 11.91 11.79 10.55 9 10.13V5.5C9 3.57 7.43 2 5.5 2S2 3.57 2 5.5V22H4V20H7V22H9V12.16C10.76 12.5 11.29 13.39 12.17 14.92C12.46 15.43 12.78 15.97 13.17 16.56C15.41 19.92 17.67 22 22 22V20C18.53 20 16.8 18.4 14.83 15.45M5.5 4C6.33 4 7 4.67 7 5.5V10H4V5.5C4 4.67 4.67 4 5.5 4M4 18V16H7V18H4M7 14H4V12H7V14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
