<?php
print_r($_POST);
$data = array();

$mysqli = new mysqli('localhost', 'root', '', 'eventdb');

$inDB[ 'firstname' ] = '';
$inDB[ 'latname' ] = '';
$inDB[ 'street' ] = '';
$inDB[ 'plz' ] = '';
$inDB[ 'city' ] = '';
$inDB[ 'country' ] = '';
$inDB[ 'username' ] = '';
$inDB[ 'password' ] = '';
$inDB[ 'email' ] = '';
$inDB[ 'phone' ] = '';

if ( isset( $_POST['firstname'] ) ) {
	$inDB[ 'firstname' ] = $_POST['firstname'];
}

if ( isset( $_POST['latname'] ) ) {
	$inDB[ 'latname' ] = $_POST['latname'];
}

if ( isset( $_POST['street'] ) ) {
	$inDB[ 'street' ] = $_POST['street'];
}

if ( isset( $_POST['plz'] ) ) {
	$inDB[ 'plz' ] = $_POST['plz'];
}

if ( isset( $_POST['city'] ) ) {
	$inDB[ 'city' ] = $_POST['city'];
}

if ( isset( $_POST['country'] ) ) {
	$inDB[ 'country' ] = $_POST['country'];
}

if ( isset( $_POST['username'] ) ) {
	$inDB[ 'username' ] = $_POST['username'];
}

if ( isset( $_POST['password'] ) ) {
	if ( $_POST['password'] == $_POST['rpassword'] ) {
		$inDB[ 'password' ] = password_hash( $_POST['password'], PASSWORD_DEFAULT );
	}
}

if ( isset( $_POST['email'] ) ) {
	$inDB[ 'email' ] = $_POST['email'];
}

if ( isset( $_POST['phone'] ) ) {
	$inDB[ 'phone' ] = $_POST['phone'];
}

$mysqli = new mysqli( 'localhost', 'root', '', 'eventdb' );

if ( mysqli_connect_errno() ) {
    printf( "Connect failed: %s\n", mysqli_connect_error() );
    exit();
}

$stmt = $mysqli->prepare( "INSERT INTO users VALUES ( NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )" );
$stmt->bind_param( 
	'ssssssssss',
	$inDB[ 'firstname' ],
	$inDB[ 'latname' ],
	$inDB[ 'street' ],
	$inDB[ 'plz' ],
	$inDB[ 'city' ],
	$inDB[ 'country' ],
	$inDB[ 'username' ],
	$inDB[ 'password' ],
	$inDB[ 'email' ],
	$inDB[ 'phone' ]
);

$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

$stmt->close();
?>