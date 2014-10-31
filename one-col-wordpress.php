<?php while(have_rows('one_column_ncstate')): the_row(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width">
<title>NC State</title>
</head>

<body bgcolor="#FFFFFF" topmargin="0" marginheight="0" style="font-family: arial,sans-serif;margin: 0;padding: 0;">
<style type="text/css">

body {
	margin: 0;
	padding: 0;
	font-family: arial, sans-serif;
}

tr, td {
	margin, padding: 0;
}

table[class="wrapper"] {
	width: 600px;
	margin: auto;
	padding: 0;
	font-size: 14px;
	border: 1px solid #333;
}

div[class="header"] {
	background-color: #333;
	height: 30px;
	width: 100%;
	margin-bottom: 45px;
}

div[class="header"] img {
	margin-left: 10%;
	height: 60px;
}

div[class="headline"] {
	width: 80%;
	/*background-color: #999;*/
	padding: 0 2% 2% 10%;
}

div[class="headline"] p[class="date"] {
	color: #cc0000;
	font-size: 1.2em;
	margin: 0;
}

div[class="headline"] h1[class="headline"] {
	margin: 0;
	font-size: 2.2em;
}

div[class="lead_image"] {
	width: 100%;
}

div[class="lead_image"] img {
	width: 100%;
}

div[class="body"] {
	/*background-color: #ddd;*/
	width: 80%;
	padding: 5% 10% 3% 10%;
	line-height: 130%;
}

div[class="body"] p[class="copy"] {
	margin: 0;
}

div[class="body"] p[class="copy"] a {
	color: #cc0000;
	text-decoration: none;
}

div[class="body"] p[class="copy"] a[class="call-to-action"] {
	color: #cc0000;
	font-weight: bold;
	font-size: 1.5em;
	text-decoration: none;
	line-height: 3em;
}

div[class="footer"] {
	width: 100%;
	background-color: #cc0000;
	color: #fff;
	text-align: center;
	font-size: 0.9em;
	padding: 1em 0 2em 0;
}

div[class="footer"] a {
	color: #fff;
}

div[class="footer"] p[class="social"] {
	margin: 0;
	font-size: 0.9em;
	font-weight: bold;
}

div[class="footer"] p[class="social"] a {
	text-decoration: none;
}

@media only screen and (max-device-width: 675px) {

	table[class="wrapper"] {
		width: 100% !important;
	}
	
	div[class="header"] img {
		margin-left: 2em !important;
	}
	
	div[class="headline"] {
		width: 86% !important;
	}
	
	div[class="body"] p[class="copy"] {
		font-size: 1.3em !important;
		line-height: 140% !important;
	}

}

</style>

<table class="wrapper" cellpadding="0" cellspacing="0" style="width: 600px;margin: auto;padding: 0;font-size: 14px;border: 1px solid #333;">
	<tr style="margin, padding: 0;">
		<td style="margin, padding: 0;">
			<div class="header" style="background-color: #333;height: 30px;width: 100%;margin-bottom: 45px;">
				<img src="https://cdn.ncsu.edu/brand-assets/email-resources/brick-250x120.jpg" alt="NC State University" style="margin-left: 10%;height: 60px;">
			</div>
		</td>
	</tr>
	<tr style="margin, padding: 0;">
		<td style="margin, padding: 0;">
			<div class="headline" style="width: 80%;padding: 0 2% 2% 10%;">
				<p class="date" style="color: #cc0000;font-size: 1.2em;margin: 0;"><?php echo get_sub_field('subtitle'); ?></p>
				<h1 class="headline" style="margin: 0;font-size: 2.2em;"><?php echo get_sub_field('title'); ?></h1>
			</div>
		</td>
	</tr>
	<tr style="margin, padding: 0;">
		<td style="margin, padding: 0;">
			<div class="lead_image" style="width: 100%;">
				<?php $image = get_sub_field('image'); ?>
				<?php if($image): ?>
					<img src="&lt;?php echo $image['url']; ?&gt;" alt="&lt;?php //echo $image['alt']; ?&gt;" style="width: 100%;">
				<?php endif; ?>
			</div>
		</td>
	</tr>
	<tr style="margin, padding: 0;">
		<td style="margin, padding: 0;">
			<div class="body" style="width: 80%;padding: 5% 10% 3% 10%;line-height: 130%;">
				<p class="copy" style="margin: 0;"><?php echo get_sub_field('body'); ?></p>
			</div>
		</td>
	</tr>
	<tr style="margin, padding: 0;">
		<td style="margin, padding: 0;">
			<div class="footer" style="width: 100%;background-color: #cc0000;color: #fff;text-align: center;font-size: 0.9em;padding: 1em 0 2em 0;">
				<p>%%!account_address%%</p>
				<p>This message was sent to %%!contact_email%%</p>
				<p><a href="%%!manage_url%%" style="color: #fff;">Manage Preferences</a> | <a href="%%!forward_url%%" style="color: #fff;">Forward to a Friend</a></p>
				<p class="social" style="margin: 0;font-size: 0.9em;font-weight: bold;">
					<a href="https://www.facebook.com/ncstate" style="color: #fff;text-decoration: none;"><img src="http://www.ncsu.edu/university-communications/emails/park/facebook.jpg" width="24" height="20" border="0"></a>
					<a href="https://www.facebook.com/ncstate" style="color: #fff;text-decoration: none;">Like NC&nbsp;State on Facebook</a>
					<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
					<a href="https://twitter.com/NCState" style="color: #fff;text-decoration: none;"><img src="http://www.ncsu.edu/university-communications/emails/park/twitter.jpg" width="24" height="20" border="0"></a>
					<a href="https://twitter.com/NCState" style="color: #fff;text-decoration: none;">Follow NC&nbsp;State on Twitter</a>
					<span class="footerText">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
					<a href="http://instagram.com/ncstate#" style="color: #fff;text-decoration: none;"><img src="http://www.ncsu.edu/university-communications/emails/park/instagram.jpg" width="28" height="20" border="0"></a>
					<a href="http://instagram.com/ncstate#" style="color: #fff;text-decoration: none;">Follow NC&nbsp;State on Instagram</a>
				</p>
			</div>
		</td>
	</tr>
</table>

</body>
</html>
<?php endwhile; ?>
