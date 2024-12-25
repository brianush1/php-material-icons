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
	?><path d="M19.65 4.5L16.91 .96L20.84 .18L21.62 4.1L19.65 4.5M16.71 5.07L13.97 1.54L12 1.93L14.75 5.46L16.71 5.07M11.81 6.05L9.07 2.5L7.1 2.91L9.85 6.44L11.81 6.05M4.16 3.5L3.18 3.69C2.1 3.9 1.39 4.96 1.61 6.04L2 8L6.9 7.03L4.16 3.5M22 8V18C22 19.11 21.11 20 20 20H4C2.9 20 2 19.11 2 18V8H22M20 10H4V18H20V10M7 24H9V22H7V24M15 24H17V22H15V24M11 24H13V22H11V24Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
