<?php 
require 'book.php';
require 'search.php';
function pageSort($page, $sort){
	return (($page >= 1) ? '&page='.$page : ''). (($sort != null) ? (($sort == 1 || $sort == 'popular') ? '&sort=popular' : (($sort == 2 || $sort == 'date') ? '&sort=date' : '')) : '' );
}
/**
 * lolo
 */
class nhtaiAPI
{
	public $domain;
	public $apis;
	function __construct($ssl = true)
	{	

		$protocol = "http". ($ssl ? 's' : ''). '://';
		$this->domain = array(
			'main' => $protocol . 'proxypoi.glitch.me/proxy/https://nhentai.net',
			'images' => $protocol . 'cdn.nhent.ai',
			'thumbs' => $protocol . 't.nhent.ai'
		);

		$this->apis = array(
			'home' => $this->domain['main'].'/api/galleries/all?',
			'search' => $this->domain['main'].'/api/galleries/search?query={QUERY}',
			'searchLike' => $this->domain['main'].'/api/gallery/{BOOK_ID}/related',
			'searchTagged' => $this->domain['main'].'/api/galleries/tagged?tag_id={TAG_ID}',
			'bookDetails' => $this->domain['main'].'/api/gallery/{BOOK_ID}',
			'getPage' => $this->domain['images'].'/galleries/{MEDIA_ID}/{PAGE}.jpg',
			'getThumb' => $this->domain['thumbs'].'/galleries/{MEDIA_ID}/{PAGE}t.jpg',
			'getCover' => $this->domain['thumbs'].'/galleries/{MEDIA_ID}/cover.jpg'

		);
		

	}
	function home($page = 1, $sort = null) {
		if ($page >= 1 && is_integer($page)) {
			$p = $this->apis['home'].pageSort($page, $sort);
			return $p ;
		}else {
			return 'page must be a number';
		}
	}
	function search($query, $page = 1, $sort = null){
		if ($query != null && is_string($query) == true) {
			if ($page != null && is_integer($page) == true) {
				return str_replace("{QUERY}", str_replace('/', '+', $query), $this->apis['search']).pageSort($page,$sort);;
			}else {
				return 'page must be a number';
			}

		}else {
			return 'query must be a string';
		}

	}

	function searchLike($book_id, $page = 1, $sort = null) {
		if ($book_id != null && is_integer($book_id) == true) {
			return str_replace('{BOOK_ID}', $book_id, $this->apis['searchLike']).pageSort($page,$sort);
		}else {
			return 'book_id must be a number';
		}
	}
	function searchTagged($tag_id, $page = 1, $sort = null) {
		if ($tag_id != null && is_integer($tag_id) == true) {
			return str_replace('{TAG_ID}', $tag_id, $this->apis['searchTagged']).pageSort($page, $sort);
		}else {
			return 'tag_id must be a number';
		}
	}
	function bookDetails($book_id) {
		if ($book_id != null && is_integer($book_id) == true) {
			return str_replace('{BOOK_ID}', $book_id, $this->apis['bookDetails']);
		}else {
			return 'id must be a number';
		}
	}
	function getPage($media_id, $page = 1) {
		if ($media_id != null && is_integer($media_id)) {
			if ($page != null && is_integer($page)) {
				if ($page >= 1) {
					return str_replace('{MEDIA_ID}', $media_id, $this->apis['getPage']);
				}else {
					return 'page must be a greater than or equal to 1';
				}
			}else {
				return 'page must be a number';
			}
		}else {
			return 'media_id must be a number';
		}
	}
	function getThumb($media_id, $page = 1) {
		if ($media_id != null && is_integer($media_id)) {
			if ($page != null && is_integer($page)) {
				if ($page >= 1) {
					return str_replace('{MEDIA_ID}', $media_id, $this->apis['getThumb']);
				}else {
					return 'pagemust be a greater than or equal to 1';
				}
			}else {
				return 'page must be a number';
			}
		}else{
			return 'media_id must be a number';
		}
	}
	function getCover($media_id) {
		if ($media_id != null && is_integer($media_id)) {
			return str_replace('{MEDIA_ID}', $media_id, $this->apis['getCover']);
		}else {
			return 'media_id must be a number';
		}
	}
	function parseBook($data) {
		return new nhentaiBook($data);
	}
	function parseSearch($data){
		return new nhentaiSearch($data);
	}

}



























 ?>