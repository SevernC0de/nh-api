<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet"> 
	<style type="text/css">
		body{
		font-family: Roboto Mono;
		}
	</style>
    <title>NhentaiAPI Guide</title>
  </head>
  <body>
  	<div class="container mt-2">
    <h1>NhentaiAPI</h1>
    <p><b>How To Use?</b></p>
    <hr>
    <p><b>home(page, sort)</b><br><small>Returns Home URL for related new update </small></p>
    <p>
    	<a href="#">http://akie.club/galleries/all?page={page}</a>
    	<br>
    	<table class="table table-bordered">
    		<thead>
    			<th>Parameter</th>
    			<th>Required</th>
    			<th>Default Value</th>
    			<th>Description</th>
    		</thead>
    		<tr>
    			<td>page</td>
    			<td>-</td>
    			<td>1</td>
    			<td>page of home</td>
    		</tr>
    		<tr>
    			<td>sort</td>
    			<td>-</td>
    			<td>null</td>
    			<td>Sort type: popular (1) or date (2)</td>
    		</tr>
    	</table>
    </p>
    <p><b>search(query, page, sort)</b><br><small>Returns Search URL by query</small></p>
    <p>
    	<a href="#">http://akie.club/galleries/search?query={QUERY}&page={PAGE}</a>
    	<br>
    	<table class="table table-bordered">
    		<thead>
    			<th>Parameter</th>
    			<th>Required</th>
    			<th>Default Value</th>
    			<th>Description</th>
    		</thead>
    		<tr>
    			<td>query</td>
    			<td>+</td>
    			<td> </td>
    			<td>Search query</td>
    		</tr>
    		<tr>
    			<td>page</td>
    			<td>-</td>
    			<td>1</td>
    			<td>Page of search</td>
    		</tr>
    		<tr>
    			<td>sort</td>
    			<td>-</td>
    			<td>null</td>
    			<td>Sort type: popular (1) or date (2)</td>
    		</tr>
    	</table>	
    </p>
    <br>
    <p><b>bookDetails(book_id)</b><br><small>Returns URL for getting Book</small></p>
    <p>
    	<a href="">http://akie.club/gallery/{book_id}</a>
    	<br>
    	<table class="table table-bordered">
    		<thead>
    			<th>Parameter</th>
    			<th>Required</th>
    			<th>Default Value</th>
    			<th>Description</th>
    		</thead>
    		<tr>
    			<td>book_id</td>
    			<td>+</td>
    			<td> </td>
    			<td>Book`s ID</td>
    		</tr>
    	</table>
    </p>

	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
