<?php

$page = $_REQUEST[ 'page' ]; //The current page to load.
$per  = $_REQUEST[ 'per' ];  //The amount to load each time.


if ( $page == 4 ) {
	
	echo '
	{
		"items": [
			{
			  "img"     : "assets-demo/images/test-img-big-1.jpg",
			  "title"   : "Project Title - PAGE 4",
			  "time"    : "December 10, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 10,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a><a href=\"#\">Web Design</a>",
			  "link"    : "#"

			},
			{
			  "img"     : "assets-demo/images/test-img-big-3.jpg",
			  "title"   : "Project Title Here - PAGE 4",
			  "time"    : "December 9, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 0,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a>",
			  "link"    : "#"
			},
			{
			  "img"     : "assets-demo/images/test-img-big-2.jpg",
			  "title"   : "Project Title Here - PAGE 4",
			  "time"    : "December 8, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 2,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. porta ac consectetur ac.",
			  "tags"    : "<a href=\"#\">Design</a><a href=\"#\">UI</a>",
			  "link"    : "#"
			}

		]
	}
	';

}

if ( $page == 3 ) {
	
	echo '
	{
		"items": [
			{
			  "img"     : "assets-demo/images/test-img-big-2.jpg",
			  "title"   : "Project Title - PAGE 3",
			  "time"    : "December 10, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 10,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a><a href=\"#\">Web Design</a>",
			  "link"    : "#"

			},
			{
			  "img"     : "assets-demo/images/test-img-big-5.jpg",
			  "title"   : "Project Title Here - PAGE 3",
			  "time"    : "December 9, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 0,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a>",
			  "link"    : "#"
			},
			{
			  "img"     : "assets-demo/images/test-img-big-4.jpg",
			  "title"   : "Project Title Here - PAGE 3",
			  "time"    : "December 8, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 2,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. porta ac consectetur ac.",
			  "tags"    : "<a href=\"#\">Design</a><a href=\"#\">UI</a>",
			  "link"    : "#"
			}

		]
	}
	';

}
if ( $page == 2 ) {
	echo '
	{
		"items": [
		
			{
			  "img"     : "assets-demo/images/test-img-big-3.jpg",
			  "title"   : "Project Title - PAGE 2",
			  "time"    : "December 10, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 10,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a><a href=\"#\">Web Design</a>",
			  "link"    : "#"

			},
			{
			  "img"     : "assets-demo/images/test-img-big-5.jpg",
			  "title"   : "Project Title Here - PAGE 2",
			  "time"    : "December 9, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 0,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a>",
			  "link"    : "#"
			},
			{
			  "img"     : "assets-demo/images/test-img-big-2.jpg",
			  "title"   : "Project Title Here - PAGE 2",
			  "time"    : "December 8, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 2,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. porta ac consectetur ac.",
			  "tags"    : "<a href=\"#\">Design</a><a href=\"#\">UI</a>",
			  "link"    : "#"
			}
		

		]
	}
	';		
}

if ( $page == 1 ) {
	echo '
	{
		"items": [
		
			{
			  "img"     : "assets-demo/images/test-img-big-1.jpg",
			  "title"   : "Project Title",
			  "time"    : "December 10, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 10,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a><a href=\"#\">Web Design</a>",
			  "link"    : "#"

			},
			{
			  "img"     : "assets-demo/images/test-img-big-2.jpg",
			  "title"   : "Project Title Here",
			  "time"    : "December 9, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 0,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.",
			  "tags"    : "<a href=\"#\">Tag</a><a href=\"#\">Video</a>",
			  "link"    : "#"
			},
			{
			  "img"     : "assets-demo/images/test-img-big-3.jpg",
			  "title"   : "Project Title Here",
			  "time"    : "December 8, 2017",
			  "author"  : "David",
			  "cat"     : "Art, Design",
			  "comments": 2,
			  "detail"  : "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. porta ac consectetur ac.",
			  "tags"    : "<a href=\"#\">Design</a><a href=\"#\">UI</a>",
			  "link"    : "#"
			}
		

		]
	}
	';		
}

