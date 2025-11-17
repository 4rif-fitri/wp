<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */


 if(isset($_GET['submit'])){
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$email = $_GET['email'];
	$password = $_GET['pass'];
	$confirm = $_GET['confirm'];

	if(strlen($firstname) < 2 || strlen($firstname) > 20){
		echo "
			<script>
				alert('Error - First Name must be between 2 to 20 characters in length');
				window.location.href = './'
				window.location.href = './'
			</script>
		";
		return;
	}

	if(strlen($lastname) < 2 || strlen($lastname) > 20){
		echo "
			<script>
				alert('Error - Last Name must be between 2 to 20 characters in length');
				window.location.href = './'
			</script>
		";
		return;
	}

	if(strlen($password) < 8){
		echo "
			<script>
				alert('Error - Password must be at least 8 characters in length');
				window.location.href = './'
			</script>
		";
		return;
	}

	$letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$numbers = "0123456789";
	$specials = "!@#$%^&*()-_+={}[]:;".'"'."'|\\<>,.?/";

	$lettersCount = 0;
	$numbersCount = 0;
	$specialsCount = 0;
	$specialHave = 0;

	foreach(str_split($letters) as $letter){
		if(str_contains($password,$letter)){
			break;
		}else{
			$lettersCount++;
		}
	}
	if($lettersCount == strlen($letters)){
		echo "
			<script>
				alert('Error - Password must contain letters');
				window.location.href = './'
			</script>
		";
		return;
	}

	foreach(str_split($numbers) as $number){
		if(str_contains($password,$number)){
			break;
		}else{
			$numbersCount++;
		}
	}
	if($numbersCount == strlen($numbers)){
		echo "
			<script>
				alert('Error - Password must contain numbers');
				window.location.href = './'
			</script>
		";
		return;
	}

	foreach(str_split($specials) as $special){
		if(str_contains($password,$special)){
			foreach(str_split($password) as $pass){
				if($pass == $special){
					$specialHave++;
				}
			}
		}else{
			$specialsCount++;
		}
	}
	if($specialsCount == strlen($specials) || $specialHave < 2){
		echo "
			<script>
				alert('Error - Password must contain at least two symbols');
				window.location.href = './'
			</script>
		";
		return;
	}

	if($password != $confirm){
		echo "
			<script>
				alert('Error - Passwords must be the same');
				window.location.href = './'
			</script>
		";
		return;
	}

	echo "
		<script>
			alert('Sign up successful!');
			window.location.href = './'
		</script>
	";

	$to = 'info@x-games.com'; // note the comma

	// Subject
	$subject = 'GameSphere Sign Up';

	// Message
	$message = '
		<html>
		<head>
		<title>New Sign up Request for Game Sphere</title>
		</head>
		<body>
		<table>
			<tr>
			<th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th>
			</tr>
			<tr>
			<td>'.$firstname.'</td><td>'.$lastname.'</td><td>'.$email.'</td><td>'.$password.'</td>
			</tr>
		</table>
		</body>
		</html>
	';
	mail($to, $subject, $message);
	}

	

?>
<style>
	.container{
		width: 70vw;
		margin-left: auto;
		margin-right: auto;
	}
	.wp-block-latest-posts{
		margin-left: 0;
	}
	.wp-block-latest-posts a{
		font-size: 18px;
	}
	.wp-block-latest-posts li{
		margin: 10px auto;
	}
	.entry-content{
		display: grid;
		grid-template-columns: 1fr !important;
	}
	.wp-block-media-text{
		margin: 10px auto;
	}
	@media only screen and (min-width:641px){
		.entry-content{
			grid-template-columns: 1fr 1fr !important;
		}
	}
	form{
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	form div{
		display: flex;
		flex-direction: column;
		gap: 5px;
	}
	form .required{
		color: red;
	}
	input[type='submit']{
		cursor: pointer;
		background-color: green;
		border-radius: 5px;
		padding: 10px 15px;
		box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.7);
		color: white;
		border: none;
		font-weight: bold;
		transition: .2s ease-in-out;
	}
	input[type='submit']:hover{
		background-color: lightgreen;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
	<!-- <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>.entry-header -->

	<?php underscores_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'underscores' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
