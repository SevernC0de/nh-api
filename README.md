# NhentaiAPI

## home(page, sort)
Returns Home URL for related new update

[http://localhost:8080/galleries/all?page={page}](#homepage-sort)

| Parameter | Required | Default Value |                        Description |
| :-------- | :------: | :-----------: | ---------------------------------: |
| page      |    -     |       1       |                       page of home |
| sort      |    -     |     null      | Sort type: popular (1) or date (2) |


## search(query, page, sort)
Returns Search URL by query

[http://localhost:8080/galleries/search?query={QUERY}&page={PAGE}](#searchquery-page-sort)

| Parameter | Required | Default Value |                        Description |
| :-------- | :------: | :-----------: | ---------------------------------: |
| query     |    +     |               |                       Search query |
| page      |    -     |       1       |                     Page of search |
| sort      |    -     |     null      | Sort type: popular (1) or date (2) |

## bookDetails(book_id)
Returns URL for getting Book

[http://localhost:8080/gallery/?id={book_id}](#bookdetailsbook_id)

| Parameter | Required | Default Value | Description |
| :-------- | :------: | :-----------: | ----------: |
| book_id   |    +     |               |   Book`s ID |
