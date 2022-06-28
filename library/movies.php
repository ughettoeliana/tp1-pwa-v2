<?php
function allmovies(): array
{
	$filename = __DIR__ . "/../data/movies.json";
	$jsonContent = file_get_contents($filename);
	$data = json_decode($jsonContent, true);

	$exit = [];

	foreach ($data as $valor) {
		$movie = new Movie;
		$movie->item_id = $valor['item_id'];
		$movie->image = $valor['image'];
		$movie->title = $valor['title'];
		$movie->short_description = $valor['short_description'];
		$movie->duration = $valor['duration'];

		$exit[] = $movie;
	}

	return $exit;
}

function getmoviesById(int $id): ?Movie
{
	$movies = allmovies();

	foreach ($movies as $movie) {
		if ($movie->item_id == $id) {
			return $movie;
		}
	}

	return null;
}
