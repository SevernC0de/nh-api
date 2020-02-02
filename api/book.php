<?php 

class nhentaiBook {
	public $book;
	function __construct($data) {
		if ($data != null) {
			if (is_string($data)) {
				$this->book = file_get_contents($data);
				$this->book = json_decode($this->book, true);
			}elseif (is_array($data)) {
				$this->book = $data;
			}else {
				return 'data must be a string or object';
			}
		}else {
			return 'data must be a string or object';
		}

	}
	function id() {
		return $this->book['id'];
	}
	function media_id() {
		return $this->book['media_id'];
	}
	function title_english() {
		return $this->book['title']['english'];
	}
	function title_japanese() {
		return $this->book['title']['japanese'];
	}
	function pages() {
		return $this->book['images']['pages'];
	}
	function cover() {
		return $this->book['images']['cover'];
	}
	function thumbnail() {
		return $this->book['images']['thumbnail'];
	}
	function scanlator() {
		return $this->book['scanlator'];
	}
	function upload_date() {

		return date(($this->book['upload_date']) * 1000);
	}
	function tags() {
		return $this->book['tags'];
	}
	function num_pages() {
		return $this->book['num_pages'];
	}
	function num_favorites() {
		return $this->book['num_favorites'];
	}

}


 ?>