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
	?><path d="M6.5 6.08C5.72 6.12 5 6.62 4.72 7.4L3 12.13V22H7V12.84L8.42 8.94L10.7 10H14V8H11.15L7.29 6.2C7.03 6.11 6.76 6.07 6.5 6.08M9 17H21V19H9M10 3.5A2 2 0 0 1 8 5.5A2 2 0 0 1 6 3.5A2 2 0 0 1 8 1.5A2 2 0 0 1 10 3.5M21 14.5A1.5 1.5 0 0 1 19.5 16A1.5 1.5 0 0 1 18 14.5A1.5 1.5 0 0 1 19.5 13A1.5 1.5 0 0 1 21 14.5M9 11V13H11V14C11 15.11 11.89 16 13 16H15C16.11 16 17 15.11 17 14V11H15V13H13V12A1 1 0 0 0 12 11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
