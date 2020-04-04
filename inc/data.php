<?php
$catalog = [];
//Books
$catalog[101] = [
	"title" => "The Diamond Sutra",
	"img" => "img/media/diamondSutra.jpg",
    "genre" => "Self-help",
    "format" => "Paperback",
    "year" => 2002,
    "category" => "Books",
    "authors" => [
        "Bill Porter"
    ],
    "publisher" => "Counterpoint ",
    "isbn" => '1582432562'
];
$catalog[102] = [
    "title" => "Expecting Adam",
    "img" => "img/media/exptnAdam.jpg",
    "genre" => "Self-help",
    "format" => "Paperback",
    "year" => 2011,
    "category" => "Books",
    "authors" => [
        "Martha Beck"
    ],
    "publisher" => "Harmony",
    "isbn" => '0307719642'
];
$catalog[103] = [
    "title" => "Lajja",
    "img" => "img/media/Lajja.jpg",
    "genre" => "Self-help",
    "format" => "Paperback",
    "year" => 2014,
    "category" => "Books",
    "authors" => [
        "Taslima Nasrin"
    ],
    "publisher" => "Penguin",
    "isbn" => '0143419218'
];
$catalog[104] = [
    "title" => "The Book of Secrets",
    "img" => "img/media/Secret.jpg",
    "genre" => "Self-help",
    "format" => "Paperback",
    "year" => 1998,
    "category" => "Books",
    "authors" => [
        "Osho"
    ],
    "publisher" => "St. Martin's Griffin",
    "isbn" => '0312180586'
];
//Movies
$catalog[201] = [
    "title" => "What the blip do we know?",
    "img" => "img/media/Blip.jpg",
    "genre" => "Scientific and spiritual fiction",
    "format" => "DVD",
    "year" => 2005,
    "category" => "Movies",
    "director" => ["Betsy Chasse", "Mark Vicente"],
    "writers" => [" Betsy Chasse", "Mark Vicente", "William Arntz", "Matthew Hoffman"
    ],
    "stars" =>  "#",

];
$catalog[202] = [
    "title" => "Kundun",
    "img" => "img/media/Kundun.jpg",
    "genre" => "spiritual",
    "format" => "DVD",
    "year" => 1998,
    "category" => "Movies",
    "director" => "Martin Scorsese",
    "writers" => " Melissa Mathison",
    "stars" => "#"
];
$catalog[203] = [
    "title" => "Stepmom",
    "img" => "img/media/stepMom.jpg",
    "genre" => ["Drama”, “Comedy"],
    "format" => "DVD",
    "year" => 2019,
    "category" => "Movies",
    "director" => "Chris Columbus",
    "writers" =>
        "Gigi Levangie Grazer",
    "stars" => ["Julia Robert", "Susan Sarandon" ]
];
$catalog[204] = [
    "title" => "Titanic",
		"img" => "img/media/Titanic.jpg",
	  "genre" => ["Drama, Romance"],
	  "format" => "DVD",
	  "year" => 1997,
	  "category" => "Movies",
	  "director" => "James Cameron",
	  "writers" => [
	      "James Cameron"

	  ],
	  "stars" => [
	      "Leonardo DiCaprio",
	      "Kate Winslet",
	      "Billy Zane"
	  ]
	];
//Music
$catalog[301] = [
	"title" => "Infidels",
	"img" => "img/media/Infidels.jpg",
	"genre" => "Rock",
	"format" => "CD",
	"year" => 1983,
	"category" => "Music",
	"artist" => "Bob Dylan"
];

$catalog[302] = [
	"title" => "Imagine",
	"img" => "img/media/Imagine.jpg",
	"genre" => ["Rock", "Pop"],
	"format" => "CD",
	"year" => 1971,
	"category" => "Music",
	"artist" => "John Lennon"
];
$catalog[303] = [
	"title" => "Jhuma",
	"img" => "img/media/Jhuma.jpg",
	"genre" => "Modern",
	"format" => "CD",
	"year" => 2019,
	"category" => "Music",
	"artist" => "Pramod Kharel"
];
$catalog[304] = [
	"title" => "In the name of love",
	"img" => "img/media/nameoLove.jpg",
	"genre" => ["Electronica", "Pop"],
	"format" => "CD",
	"year" => 2015,
	"category" => "Music",
	"artist" => ["Martin Garrix", "Babe Rexha"]
];
?>
