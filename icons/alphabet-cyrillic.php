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
	?><path d="M16 6C14.36 6 13 7.36 13 9V15C13 16.65 14.36 18 16 18H17C18.65 18 20 16.65 20 15V12C20 10.36 18.65 9 17 9H15C15 8.44 15.44 8 16 8H18C19.09 8 20 7.09 20 6M5 9V11H8C8.57 11 9 11.43 9 12H7C5.36 12 4 13.36 4 15C4 16.65 5.36 18 7 18H11V12C11 10.36 9.65 9 8 9M15 11H17C17.57 11 18 11.43 18 12V15C18 15.57 17.57 16 17 16H16C15.43 16 15 15.57 15 15M7 14H9V16H7C6.43 16 6 15.57 6 15C6 14.43 6.43 14 7 14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>