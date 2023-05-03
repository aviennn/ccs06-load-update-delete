<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Eumppappa','Male', '2002-10-28', 'Gyuvin', 'gyuvin@kim.com','2097, Marisol, Angeles City', '09234567801');
	echo "<li>Added 1 pet";

	$pets = [
		[	
			'name' => 'Layla',
			'gender' => 'Male',
			'birthdate' => '2003-08-03',
			'owner' => 'Jake',
			'email' => 'jake@sim.com',
			'address' => '748, McArthur Highway, Mabalacat City',
			'contact_number' => '09773942061'
		],
		[
			'name' => 'Hanbinnie',
			'gender' => 'Female',
			'birthdate' => '2004-08-24',
			'owner' => 'Hao',
			'email' => 'hao@zhang.com',
			'address' => '802, Talimundok, Dau Mabalacat City',
			'contact_number' => '09356661062'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

