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
	?><path d="M9 8C7.3 8 6 9.3 6 11S7.3 14 9 14C10.3 14 11.4 13.2 11.8 12H14V14H16V12H18V10H11.8C11.4 8.8 10.3 8 9 8M9 12C8.4 12 8 11.6 8 11S8.4 10 9 10 10 10.4 10 11 9.6 12 9 12M15 20C15 19.5 14.6 19 14 19H13V17H19C20.1 17 21 16.1 21 15V7C21 5.9 20.1 5 19 5H13L11 3H5C3.9 3 3 3.9 3 5V15C3 16.1 3.9 17 5 17H11V19H10C9.4 19 9 19.5 9 20H2V22H9C9 22.5 9.4 23 10 23H14C14.6 23 15 22.5 15 22H22V20H15M5 15V7H19V15H5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
