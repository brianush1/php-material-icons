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
	?><path d="M20 12H22V14H20C18.6 14 17.3 13.6 16 13C13.5 14.3 10.5 14.3 8 13C6.7 13.6 5.4 14 4 14H2V12H4C5.4 12 6.8 11.5 8 10.7C10.4 12.4 13.6 12.4 16 10.7C17.2 11.5 18.6 12 20 12M20 6H22V8H20C18.6 8 17.3 7.7 16 7C13.5 8.3 10.5 8.3 8 7C6.7 7.7 5.4 8 4 8H2V6H4C5.4 6 6.8 5.5 8 4.7C10.4 6.4 13.6 6.4 16 4.7C17.2 5.5 18.6 6 20 6M22 20H2V18H22" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
