<?php 

function trenutniSat() {
		$trenutniSat = date('H');

		if ($trenutniSat < 9){
			return 'Dobro jutro';
		} else if ($trenutniSat >= 9 && $trenutniSat <= 17) {
			return 'Dobar dan';
		} else {
			return 'Dobro vece';
		}
	}
